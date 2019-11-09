<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
  <label for="name" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.name') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}"
           id="name" name="name" placeholder="{{ trans('admin.rebs-company.columns.name') }}">
    <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('registration_number'), 'has-success': this.fields.registration_number && this.fields.registration_number.valid }">
  <label for="registration_number" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.registration_number') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.registration_number" v-validate="'required'" @input="validate($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('registration_number'), 'form-control-success': this.fields.registration_number && this.fields.registration_number.valid}"
           id="registration_number" name="registration_number"
           placeholder="{{ trans('admin.rebs-company.columns.registration_number') }}">
    <div v-if="errors.has('registration_number')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('registration_number') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('ceo'), 'has-success': this.fields.ceo && this.fields.ceo.valid }">
  <label for="ceo" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.ceo') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.ceo" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('ceo'), 'form-control-success': this.fields.ceo && this.fields.ceo.valid}"
           id="ceo" name="ceo" placeholder="{{ trans('admin.rebs-company.columns.ceo') }}">
    <div v-if="errors.has('ceo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ceo') }}</div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('business_number'), 'has-success': this.fields.business_number && this.fields.business_number.valid }">
  <label for="business_number" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.business_number') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.business_number" v-validate="'required'" @input="validate($event)"
           class="form-control"
           :class="{'form-control-danger': errors.has('business_number'), 'form-control-success': this.fields.business_number && this.fields.business_number.valid}"
           id="business_number" name="business_number"
           placeholder="{{ trans('admin.rebs-company.columns.business_number') }}">
    <div v-if="errors.has('business_number')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('business_number') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('business_type'), 'has-success': this.fields.business_type && this.fields.business_type.valid }">
  <label for="business_type" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.business_type') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.business_type" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('business_type'), 'form-control-success': this.fields.business_type && this.fields.business_type.valid}"
           id="business_type" name="business_type"
           placeholder="{{ trans('admin.rebs-company.columns.business_type') }}">
    <div v-if="errors.has('business_type')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('business_type') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('sectors'), 'has-success': this.fields.sectors && this.fields.sectors.valid }">
  <label for="sectors" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.sectors') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.sectors" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('sectors'), 'form-control-success': this.fields.sectors && this.fields.sectors.valid}"
           id="sectors" name="sectors" placeholder="{{ trans('admin.rebs-company.columns.sectors') }}">
    <div v-if="errors.has('sectors')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sectors') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('main_tel'), 'has-success': this.fields.main_tel && this.fields.main_tel.valid }">
  <label for="main_tel" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.main_tel') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.main_tel" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('main_tel'), 'form-control-success': this.fields.main_tel && this.fields.main_tel.valid}"
           id="main_tel" name="main_tel" placeholder="{{ trans('admin.rebs-company.columns.main_tel') }}">
    <div v-if="errors.has('main_tel')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('main_tel') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('main_fax'), 'has-success': this.fields.main_fax && this.fields.main_fax.valid }">
  <label for="main_fax" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.main_fax') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.main_fax" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('main_fax'), 'form-control-success': this.fields.main_fax && this.fields.main_fax.valid}"
           id="main_fax" name="main_fax" placeholder="{{ trans('admin.rebs-company.columns.main_fax') }}">
    <div v-if="errors.has('main_fax')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('main_fax') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('establishment_date'), 'has-success': this.fields.establishment_date && this.fields.establishment_date.valid }">
  <label for="establishment_date" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.establishment_date') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
    <div class="input-group input-group--custom">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <datetime v-model="form.establishment_date" :config="datePickerConfig"
                v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr"
                :class="{'form-control-danger': errors.has('establishment_date'), 'form-control-success': this.fields.establishment_date && this.fields.establishment_date.valid}"
                id="establishment_date" name="establishment_date"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
    </div>
    <div v-if="errors.has('establishment_date')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('establishment_date') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('opening_date'), 'has-success': this.fields.opening_date && this.fields.opening_date.valid }">
  <label for="opening_date" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.opening_date') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
    <div class="input-group input-group--custom">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <datetime v-model="form.opening_date" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'"
                class="flatpickr"
                :class="{'form-control-danger': errors.has('opening_date'), 'form-control-success': this.fields.opening_date && this.fields.opening_date.valid}"
                id="opening_date" name="opening_date"
                placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
    </div>
    <div v-if="errors.has('opening_date')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('opening_date') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('tax_invoice_email'), 'has-success': this.fields.tax_invoice_email && this.fields.tax_invoice_email.valid }">
  <label for="tax_invoice_email" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.tax_invoice_email') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.tax_invoice_email" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('tax_invoice_email'), 'form-control-success': this.fields.tax_invoice_email && this.fields.tax_invoice_email.valid}"
           id="tax_invoice_email" name="tax_invoice_email"
           placeholder="{{ trans('admin.rebs-company.columns.tax_invoice_email') }}">
    <div v-if="errors.has('tax_invoice_email')" class="form-control-feedback form-text" v-cloak>@{{
      errors.first('tax_invoice_email') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('tax_office'), 'has-success': this.fields.tax_office && this.fields.tax_office.valid }">
  <label for="tax_office" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.tax_office') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.tax_office" v-validate="''" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('tax_office'), 'form-control-success': this.fields.tax_office && this.fields.tax_office.valid}"
           id="tax_office" name="tax_office" placeholder="{{ trans('admin.rebs-company.columns.tax_office') }}">
    <div v-if="errors.has('tax_office')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tax_office')
      }}
    </div>
  </div>
</div>

<!-- 다음 우편번호 서비스 - iOS에서는 position:fixed 버그가 있음, 적용하는 사이트에 맞게 position:absolute 등을 이용하여 top,left값 조정 필요 -->
<!-- iOS에서는 position:fixed 버그가 있음, 적용하는 사이트에 맞게 position:absolute 등을 이용하여 top,left값 조정 필요 -->
<div id="layer" style="display:none;position:fixed;overflow:hidden;z-index:1;-webkit-overflow-scrolling:touch;">
  <img src="//t1.daumcdn.net/postcode/resource/images/close.png" id="btnCloseLayer"
       style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:1" onclick="closeDaumPostcode()"
       alt="닫기 버튼">
</div>
<!-- 다음 우편번호 서비스 -------------onclick="execDaumPostcode()"-----postcode-----address---------------------------------->

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('postcode'), 'has-success': this.fields.postcode && this.fields.postcode.valid }">
  <label for="postcode" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.postcode') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'" class="form-row">
    <div class="col-3">
      <input type="text" v-model="form.postcode" v-validate="'required'" @input="validate($event)" class="form-control"
             :class="{'form-control-danger': errors.has('postcode'), 'form-control-success': this.fields.postcode && this.fields.postcode.valid}"
             id="postcode" name="postcode" placeholder="{{ trans('admin.rebs-company.columns.postcode') }}">
    </div>
    <div class="col">
      <input type="button" class="btn btn-secondary" value="우편번호" onclick="execDaumPostcode()">
    </div>
    <div v-if="errors.has('postcode')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('postcode') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('address'), 'has-success': this.fields.address && this.fields.address.valid }">
  <label for="address" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.address') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
    <input type="text" v-model="form.address" v-validate="'required'" @input="validate($event)" class="form-control"
           :class="{'form-control-danger': errors.has('address'), 'form-control-success': this.fields.address && this.fields.address.valid}"
           id="address" name="address" placeholder="{{ trans('admin.rebs-company.columns.address') }}">
    <div v-if="errors.has('address')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('address') }}
    </div>
  </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('detail_address'), 'has-success': this.fields.detail_address && this.fields.detail_address.valid }">
  <label for="detail_address" class="col-form-label text-md-right"
         :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-company.columns.detail_address') }}</label>
  <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'" class="form-row">
    <div class="col-7">
      <input type="text" v-model="form.detail_address" v-validate="'required'" @input="validate($event)"
             class="form-control"
             :class="{'form-control-danger': errors.has('detail_address'), 'form-control-success': this.fields.detail_address && this.fields.detail_address.valid}"
             id="detail_address" name="detail_address"
             placeholder="{{ trans('admin.rebs-company.columns.detail_address') }}">
      <div v-if="errors.has('detail_address')" class="form-control-feedback form-text" v-cloak>@{{
        errors.first('detail_address') }}
      </div>
    </div>
    <div class="col" style="padding-right: 0;">
      <input type="text" v-model="form.extra_address" v-validate="'required'" @input="validate($event)"
             class="form-control"
             :class="{'form-control-danger': errors.has('extra_address'), 'form-control-success': this.fields.extra_address && this.fields.extra_address.valid}"
             id="extra_address" name="extra_address"
             placeholder="{{ trans('admin.rebs-company.columns.extra_address') }}">
      <div v-if="errors.has('extra_address')" class="form-control-feedback form-text" v-cloak>@{{
        errors.first('extra_address') }}
      </div>
    </div>
  </div>
</div>


@section('bottom-scripts')
  <script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
  <script>
     // 우편번호 찾기 화면을 넣을 element
     var element_layer = document.getElementById('layer');

     function closeDaumPostcode() {
        // iframe을 넣은 element를 안보이게 한다.
        element_layer.style.display = 'none';
     }

     function execDaumPostcode() {
        new daum.Postcode({
           oncomplete: function (data) {
              // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

              // 각 주소의 노출 규칙에 따라 주소를 조합한다.
              // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
              var addr = ''; // 주소 변수
              var extraAddr = ''; // 참고항목 변수

              //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
              if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                 addr = data.roadAddress;
              } else { // 사용자가 지번 주소를 선택했을 경우(J)
                 addr = data.jibunAddress;
              }

              // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
              if (data.userSelectedType === 'R') {
                 // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                 // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                 if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                    extraAddr += data.bname;
                 }
                 // 건물명이 있고, 공동주택일 경우 추가한다.
                 if (data.buildingName !== '' && data.apartment === 'Y') {
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                 }
                 // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                 if (extraAddr !== '') {
                    extraAddr = ' (' + extraAddr + ')';
                 }
                 // 조합된 참고항목을 해당 필드에 넣는다.
                 // document.getElementById("extra_address").value = extraAddr;
                 vm.$refs.company.form.extra_address = extraAddr;

              } else {
                 // document.getElementById("extra_address").value = '';
                 vm.$refs.company.form.extra_address = '';
              }

              // 우편번호와 주소 정보를 해당 필드에 넣는다.
              // document.getElementById('postcode').value = data.zonecode;
              vm.$refs.company.form.postcode = data.zonecode;
              // document.getElementById("address").value = addr;
              vm.$refs.company.form.address = addr;
              // 커서를 상세주소 필드로 이동한다.
              document.getElementById("detail_address").focus();

              // iframe을 넣은 element를 안보이게 한다.
              // (autoClose:false 기능을 이용한다면, 아래 코드를 제거해야 화면에서 사라지지 않는다.)
              element_layer.style.display = 'none';
           },
           width: '100%',
           height: '100%',
           maxSuggestItems: 5
        }).embed(element_layer);

        // iframe을 넣은 element를 보이게 한다.
        element_layer.style.display = 'block';

        // iframe을 넣은 element의 위치를 화면의 가운데로 이동시킨다.
        initLayerPosition();
     }

     // 브라우저의 크기 변경에 따라 레이어를 가운데로 이동시키고자 하실때에는
     // resize이벤트나, orientationchange이벤트를 이용하여 값이 변경될때마다 아래 함수를 실행 시켜 주시거나,
     // 직접 element_layer의 top,left값을 수정해 주시면 됩니다.
     function initLayerPosition() {
        var width = 420; //우편번호서비스가 들어갈 element의 width
        var height = 420; //우편번호서비스가 들어갈 element의 height
        var borderWidth = 5; //샘플에서 사용하는 border의 두께

        // 위에서 선언한 값들을 실제 element에 넣는다.
        element_layer.style.width = width + 'px';
        element_layer.style.height = height + 'px';
        element_layer.style.border = borderWidth + 'px solid';
        // 실행되는 순간의 화면 너비와 높이 값을 가져와서 중앙에 뜰 수 있도록 위치를 계산한다.
        element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width) / 2 - borderWidth) + 'px';
        element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height) / 2 - borderWidth) + 'px';
     }
  </script>
@endsection