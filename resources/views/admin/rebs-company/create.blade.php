@extends('admin.core-layout.default')

@section('title', trans('admin.rebs-company.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <rebs-company-form
            :action="'{{ url('admin/rebs-companies') }}'"
            ref="company"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                <div class="row">
                    <div class="col-6">
                        <div class="card-header">
                            <i class="fa fa-plus"></i> {{ trans('admin.rebs-company.actions.create') }}
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-header text-right">
                            <i class="fa fa-list"></i> <a href="{{ url('admin/rebs-companies') }}">{{ __('to_list') }}</a>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    @include('admin.rebs-company.components.form-elements')
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </rebs-company-form>

        </div>

        </div>


@endsection
