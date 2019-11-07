<div class="col-md-1 sidebar__subject"></div>

<div class="col-md-8 list__subject">
    <div class="form-group row {{ $errors->has('sub_title') ? 'has-error' : '' }}">
        <label for="sub_title" class="col-sm-2 col-form-label">단원 명칭</label>
        <div class="col-sm-10">
            <input type="text" name="sub_title" id="sub_title" value="{{ old('sub_title', $sub->sub_title) }}" class="form-control"/>
            {!! $errors->first('sub_title', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group row">
        @php
            $seq = (Route::currentRouteName()=='docs.sub.create')
                ? (count(\App\Models\Docs\Subject::whereDocId($doc->id)->get()) + 1)
                : $sub->seq;
            $lev = ($doc->subjects()->max('sub_level')+1 > 5)
                ? 5
                : $doc->subjects()->max('sub_level')+1;
        @endphp
        <label for="seq" class="sr-only">단원 순서</label>
        <input type="hidden" name="seq" id="seq" value="{{ $seq }}">

        <label for="sub_level" class="col-sm-2 col-form-label">단원 레벨</label>
        <div class="col-sm-10 {{ $errors->has('sub_level') ? 'has-error' : '' }}">
            <select name="sub_level" id="sub_level" class="form-control" >
                @for ($i = 1; $i <= $lev; $i++)
                    <option value="{{ $i }}" {{ $sub->sub_level === $i ? 'selected="selected"' : '' }}>{{ $i }}</option>
                @endfor
            </select>
            {!! $errors->first('sub_level', '<span class="form-error">:message</span>') !!}
        </div>
    </div>
</div>

<div class="col-md-3 sidebar__subject"></div>


<div class="col-md-12">
    <label for="content" class="col-sm-2 col-form-label">내용 입력</label>
    <div id="editormd_id">
        <textarea name="content" id="content" style="display:none;" v-pre>{{ old('content', $sub->content) }}</textarea>
    </div>
    <div class="{{ $errors->has('content') ? 'has-error' : '' }}">
        {!! $errors->first('content', '<span class="form-error">:message</span>') !!}
    </div>
    <textarea name="md-imgUrl" id="md-imgUrl" rows="1" class="form-control" disabled></textarea>

    <div class="form-group" style="margin-top: 8px;">
        <label for="my-dropzone">파일 업로드
            <small class="text-muted">
                <i class="fa fa-chevron-down"></i> 열기
            </small>
            <small class="text-muted" style="display: none;">
                <i class="fa fa-chevron-up"></i> 닫기
            </small>
        </label>

        <div id="my-dropzone" class="dropzone"></div>
    </div>

    <div class="form-group text-right">
        @if (strpos(Route::current()->uri, 'create'))
            <button type="submit" class="btn btn-primary">등록하기</button>
        @else
            <button type="submit" class="btn btn-success">수정하기</button>
        @endif
    </div>
</div>


@section('script')
    @parent
    <script>
        var form = $('form[name=subject]'),
        dropzone  = $('div.dropzone'),
        dzControl = $('label[for=my-dropzone]>small');

        /* Dropzone */
        Dropzone.autoDiscover = false;

        // 드롭존 인스턴스 생성.
        var myDropzone = new Dropzone(
            'div#my-dropzone', {
                url: '/attachments',
                paramName: 'files',
                maxFilesize: 3,
                acceptedFiles: '.{{ implode(',.', config('settings.mimes')) }}',
                uploadMultiple: true,
                params: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    subject_id: '{{ $sub->id }}'
                },
                dictDefaultMessage: '<div class="text-center text-muted">' +
                    "<h2 class='text-secondary mt-3'>첨부할 파일을 끌어다 놓으세요.</h2>" +
                    "<p>(또는 클릭하여 파일을 업로드 하세요.)</p></div>",
                dictFileTooBig: "파일당 최대 크기는 3MB입니다.",
                dictInvalidFileType: '{{ implode(',.', config('settings.mimes')) }}' + ' 파일만 가능합니다.',
                addRemoveLinks: true
            }
        );

        // 파일 업로드 성공 이벤트 리스너.
        myDropzone.on('successmultiple', function(file, data) {
            for (var i= 0,len=data.length; i<len; i++) {
                // 책에 있는 'attachments[]' 숨은 필드 추가 로직을 별도 메서드로 추출했다.
                handleFormElement(data[i].id);

                // 책에 없는 내용
                // 성공한 파일 애트리뷰트를 파일 인스턴스에 추가
                file[i]._id = data[i].id;
                file[i]._name = data[i].filename;
                file[i]._url = data[i].url;

                // 책에 없는 내용
                // 이미지 파일일 경우 handleContent() 호출.
                if (/^image/.test(data[i].mime)) {
                    handleContent('md-imgUrl', data[i].url);
                }
            }
        });

        // 파일 삭제 이벤트 리스너.
        myDropzone.on('removedfile', function(file) {
            // 사용자가 이미지를 삭제하면 UI의 DOM 레벨에서 사라진다.
            // 서버에서도 삭제해야 하므로 Ajax 요청한다.
            $.ajax({
                type: 'DELETE',
                url: '/attachments/' + file._id
            }).then(function(data) {
                handleFormElement(data.id, true);

                if (/^image/.test(data.mime)) {
                    handleContent('md-imgUrl', data.url, true);
                }
            })
        });

        // 'attachments[]' 숨은 필드를 만들거나 제거한다.
        var handleFormElement = function(id, remove) {
            if (remove) {
                $('input[name="attachments[]"][value="'+id+'"]').remove();

                return;
            }

            $('<input>', {
                type: 'hidden',
                name: 'attachments[]',
                value: id
            }).appendTo(form);
        }

        // 컨텐트 영역의 캐럿 위치에 이미지 마크다운을 삽입한다.
        var handleContent = function(objId, imgUrl, remove) {
            var caretPos = document.getElementById(objId).selectionStart;
            var content = $('#' + objId).val();
            var imgMarkdown = '![](' + imgUrl + ')';

            if (remove) {
                $('#' + objId).val(
                    content.replace(imgMarkdown, '')
                );

                return;
            }

            $('#' + objId).val(
                content.substring(0, caretPos) +
                imgMarkdown + '\n' +
                content.substring(caretPos)
            );
        };

        // 드롭존의 가시성을 토글한다.
        dzControl.on('click', function(e) {
            dropzone.fadeToggle(0);
            dzControl.fadeToggle(0);
        });
    </script>
@endsection
