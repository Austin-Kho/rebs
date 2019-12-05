@extends('admin.core-layout.default')

@section('title', trans('admin.rebs-department.actions.index'))

@section('body')

    <rebs-department-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/rebs-departments') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.rebs-department.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/rebs-departments/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.rebs-department.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <form @submit.prevent="">
                            <div class="row justify-content-md-between">
                                <div class="col col-lg-7 col-xl-5 form-group">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="col form-group deadline-checkbox-col">
                                    <div class="switch-filter-wrap">
                                        <label class="switch switch-3d switch-primary">
                                            <input type="checkbox" class="switch-input" v-model="showCompaniesFilter" >
                                            <span class="switch-slider"></span>
                                        </label>
                                        <span class="authors-filter">&nbsp;{{ __('Companies filter') }}</span>
                                    </div>
                                </div>

                                <div class="col-sm-auto form-group ">
                                    <select class="form-control" v-model="pagination.state.per_page">

                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row" v-if="showCompaniesFilter">
                                <div class="col-sm-auto form-group" style="margin-bottom: 0;">
                                    <p style="line-height: 40px; margin:0;">{{ __('Select company/ies') }}</p>
                                </div>
                                <div class="col col-lg-12 col-xl-12 form-group" style="max-width: 590px; ">
                                    <multiselect v-model="companiesMultiselect"
                                                 :options="{{ $companies->map(function($company) { return ['key' => $company->id, 'label' =>  $company->name]; })->toJson() }}"
                                                 label="label"
                                                 track-by="key"
                                                 placeholder="{{ __('Type to search a company/ies') }}"
                                                 :limit="2"
                                                 :multiple="true">
                                    </multiselect>
                                </div>
                            </div>
                        </form>

                        <table class="table table-hover table-listing">
                            <thead>
                                <tr>

                                    <th is='sortable' :column="'id'">{{ trans('admin.rebs-department.columns.id') }}</th>
                                    <th is='sortable' :column="'rebs_company_id'">{{ trans('admin.rebs-department.columns.rebs_company_id') }}</th>
                                    <th is='sortable' :column="'name'">{{ trans('admin.rebs-department.columns.name') }}</th>
                                    <th is='sortable' :column="'description'">{{ trans('admin.rebs-department.columns.description') }}</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in collection" >

                                    <td>@{{ item.id }}</td>
                                    <td>@{{ item.company.name }}</td>
                                    <td>@{{ item.name }}</td>
                                    <td>@{{ item.description }}</td>

                                    <td>
                                        <div class="row no-gutters">
                                            <div class="col-auto">
                                                <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="row" v-if="pagination.state.total > 0">
                            <div class="col-sm">
                                <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                            </div>
                            <div class="col-sm-auto">
                                <pagination></pagination>
                            </div>
                        </div>

	                    <div class="no-items-found" v-if="!collection.length > 0">
		                    <i class="icon-magnifier"></i>
		                    <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
		                    <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                            <a class="btn btn-primary btn-spinner" href="{{ url('admin/rebs-departments/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.rebs-department.actions.create') }}</a>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
    </rebs-department-listing>

@endsection
