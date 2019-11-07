<div class="form-group row">
        <label for="title" class="col-sm-2 col-from-label">제목</label>
        <div class="col-sm-6 {{ $errors->has('title') ? 'has-error' : '' }}">
            <input type="text" name="title" id="title" value="{{ old('title', $doc->title) }}" class="form-control"/>
            {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
        </div>
        <div class="col-sm-4 checkbox">
            <label for="is_public">
                    공개 허용 여부 <input class="js-switch" type="checkbox" name="is_public" id="is_public" {{ (old('is_public') OR $doc->is_public) ? 'checked' : '' }} />
            </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="author" class="col-sm-2 col-from-label">저자</label>
        <div class="col-sm-4 {{ $errors->has('author') ? 'has-error' : '' }}">
            <input type="text" name="author" id="author" value="{{ old('author', $doc->author) }}" class="form-control"/>
            {!! $errors->first('author', '<span class="form-error">:message</span>') !!}
        </div>
        <label for="translator" class="col-sm-2 col-from-label">번역자</label>
        <div class="col-sm-4 {{ $errors->has('translator') ? 'has-error' : '' }}">
            <input type="text" name="translator" id="translator" value="{{ old('translator', $doc->translator) }}" class="form-control"/>
            {!! $errors->first('translator', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group row">
        <label for="publisher" class="col-sm-2 col-from-label">출판사</label>
        <div class="col-sm-4 {{ $errors->has('publisher') ? 'has-error' : '' }}">
            <input type="text" name="publisher" id="publisher" value="{{ old('publisher', $doc->publisher) }}" class="form-control"/>
            {!! $errors->first('publisher', '<span class="form-error">:message</span>') !!}
        </div>
        <label for="pub_date" class="col-sm-2 col-from-label">출간일 (최종)</label>
        <div class="col-sm-4 {{ $errors->has('pub_date') ? 'has-error' : '' }}">
            <input type="date" name="pub_date" id="pub_date" value="{{ old('pub_date', $doc->pub_date) }}" class="form-control"/>
            {!! $errors->first('pub_date', '<span class="form-error">:message</span>') !!}
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-12 col-from-label">설명</label>
        <div class="col-sm-12 {{ $errors->has('description') ? 'has-error' : '' }}">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description', $doc->description) }}</textarea>
            {!! $errors->first('description', '<span class="form-error">:message</span>') !!}
        </div>
    </div>
