<div class="form-group row align-items-center" :class="{'has-danger': errors.has('company'), 'has-success': this.fields.company && this.fields.company.valid }">
{{--    <label for="rebs_company_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.rebs_company_id') }}</label>--}}
{{--    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">--}}
{{--        <input type="text" v-model="form.rebs_company_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('rebs_company_id'), 'form-control-success': this.fields.rebs_company_id && this.fields.rebs_company_id.valid}" id="rebs_company_id" name="rebs_company_id" placeholder="{{ trans('admin.rebs-bank-account.columns.rebs_company_id') }}">--}}
{{--        <div v-if="errors.has('rebs_company_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('rebs_company_id') }}</div>--}}
{{--    </div>--}}

{{--    <label for="company" class="col-form-label text-md-right"--}}
{{--           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-department.columns.rebs_company_id') }}</label>--}}
    <label for="company" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.rebs_company_id') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <multiselect
            v-model="form.company"
            :options="companies"
            :multiple="false"
            track-by="id"
            label="name"
            tag-placeholder="{{ __('Select Company') }}"
            placeholder="{{ __('Company') }}">
        </multiselect>
        <div v-if="errors.has('company')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('company') }}
        </div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.rebs-bank-account.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('bank'), 'has-success': this.fields.bank && this.fields.bank.valid }">
    <label for="bank" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.bank') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.bank" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('bank'), 'form-control-success': this.fields.bank && this.fields.bank.valid}" id="bank" name="bank" placeholder="{{ trans('admin.rebs-bank-account.columns.bank') }}">
        <div v-if="errors.has('bank')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('bank') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('account_number'), 'has-success': this.fields.account_number && this.fields.account_number.valid }">
    <label for="account_number" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.account_number') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.account_number" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('account_number'), 'form-control-success': this.fields.account_number && this.fields.account_number.valid}" id="account_number" name="account_number" placeholder="{{ trans('admin.rebs-bank-account.columns.account_number') }}">
        <div v-if="errors.has('account_number')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('account_number') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('manager'), 'has-success': this.fields.manager && this.fields.manager.valid }">
    <label for="manager" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.manager') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.manager" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('manager'), 'form-control-success': this.fields.manager && this.fields.manager.valid}" id="manager" name="manager" placeholder="{{ trans('admin.rebs-bank-account.columns.manager') }}">
        <div v-if="errors.has('manager')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('manager') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('creation_date'), 'has-success': this.fields.creation_date && this.fields.creation_date.valid }">
    <label for="creation_date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.creation_date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.creation_date" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('creation_date'), 'form-control-success': this.fields.creation_date && this.fields.creation_date.valid}" id="creation_date" name="creation_date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('creation_date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('creation_date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-bank-account.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': this.fields.description && this.fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.rebs-bank-account.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>


