@extends('admin.core-layout.default')

@section('title', trans('admin.rebs-bank-account.actions.create'))

@section('body')

    <div class="container-xl">

                <div class="card">

        <rebs-bank-account-form
            :action="'{{ url('admin/rebs-bank-accounts') }}'"
            :companies="{{ $companies->toJson() }}"
            v-cloak
            inline-template>

            <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>

                <div class="row">
                    <div class="col-6">
                        <div class="card-header">
                            <i class="fa fa-plus"></i> {{ trans('admin.rebs-bank-account.actions.create') }}
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-header text-right">
                            <i class="fa fa-list"></i> <a href="{{ url('admin/rebs-bank-accounts') }}">{{ __('to_list') }}</a>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    @include('admin.rebs-bank-account.components.form-elements')
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>
                </div>

            </form>

        </rebs-bank-account-form>

        </div>

        </div>


@endsection
