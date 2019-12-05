@extends('admin.core-layout.default')

@section('title', trans('admin.rebs-department.actions.edit', ['name' => $rebsDepartment->name]))

@section('body')

  <div class="container-xl">
    <div class="card">

      <rebs-department-form
              :action="'{{ $rebsDepartment->resource_url }}'"
              :data="{{ $rebsDepartment->toJson() }}"
              :companies="{{ $companies->toJson() }}"
              v-cloak
              inline-template>

        <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action"
              novalidate>


          <div class="row">
            <div class="col-6">
              <div class="card-header">
                <i class="fa fa-pencil"></i> {{ trans('admin.rebs-department.actions.edit', ['name' => $rebsDepartment->name]) }}
              </div>
            </div>
            <div class="col">
              <div class="card-header text-right">
                <i class="fa fa-list"></i> <a href="{{ url('admin/rebs-departments') }}">{{ __('to_list') }}</a>
              </div>
            </div>
          </div>


          <div class="card-body">
            @include('admin.rebs-department.components.form-elements')
          </div>


          <div class="card-footer">
            <button type="submit" class="btn btn-primary" :disabled="submiting">
              <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
              {{ trans('brackets/admin-ui::admin.btn.save') }}
            </button>
          </div>

        </form>

      </rebs-department-form>

    </div>

  </div>

@endsection
