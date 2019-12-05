<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('company'), 'has-success': this.fields.company && this.fields.company.valid }">
    <label for="company" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-department.columns.rebs_company_id') }}</label>
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

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-department.columns.name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control"
               :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}"
               id="name" name="name" placeholder="{{ trans('admin.rebs-department.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center"
     :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right"
           :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.rebs-department.columns.description') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)"
               class="form-control"
               :class="{'form-control-danger': errors.has('description'), 'form-control-success': this.fields.description && this.fields.description.valid}"
               id="description" name="description"
               placeholder="{{ trans('admin.rebs-department.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{
            errors.first('description') }}
        </div>
    </div>
</div>


