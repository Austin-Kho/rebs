@extends('admin.core-layout.default')

@section('title', trans('admin.rebs-bank-account.actions.index'))

@section('body')

    <rebs-bank-account-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/rebs-bank-accounts') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.rebs-bank-account.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/rebs-bank-accounts/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.rebs-bank-account.actions.create') }}</a>
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
                                    <th class="bulk-checkbox">
                                        <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                        <label class="form-check-label" for="enabled">
                                            #
                                        </label>
                                    </th>

                                    <th is='sortable' :column="'id'">{{ trans('admin.rebs-bank-account.columns.id') }}</th>
                                    <th is='sortable' :column="'rebs_company_id'">{{ trans('admin.rebs-bank-account.columns.rebs_company_id') }}</th>
                                    <th is='sortable' :column="'name'">{{ trans('admin.rebs-bank-account.columns.name') }}</th>
                                    <th is='sortable' :column="'bank'">{{ trans('admin.rebs-bank-account.columns.bank') }}</th>
                                    <th is='sortable' :column="'account_number'">{{ trans('admin.rebs-bank-account.columns.account_number') }}</th>
                                    <th is='sortable' :column="'manager'">{{ trans('admin.rebs-bank-account.columns.manager') }}</th>
                                    <th is='sortable' :column="'creation_date'">{{ trans('admin.rebs-bank-account.columns.creation_date') }}</th>
                                    <th is='sortable' :column="'description'">{{ trans('admin.rebs-bank-account.columns.description') }}</th>

                                    <th></th>
                                </tr>
                                <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                    <td class="bg-bulk-info d-table-cell text-center" colspan="10">
                                        <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/rebs-bank-accounts')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                    href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                        <span class="pull-right pr-2">
                                            <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/rebs-bank-accounts/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                        </span>

                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                    <td class="bulk-checkbox">
                                        <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                        <label class="form-check-label" :for="'enabled' + item.id">
                                        </label>
                                    </td>

                                    <td>@{{ item.id }}</td>
                                    <td>@{{ item.company.name }}</td>
                                    <td>@{{ item.name }}</td>
                                    <td>@{{ item.bank }}</td>
                                    <td>@{{ item.account_number }}</td>
                                    <td>@{{ item.manager }}</td>
                                    <td>@{{ item.creation_date | date }}</td>
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
                            <a class="btn btn-primary btn-spinner" href="{{ url('admin/rebs-bank-accounts/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.rebs-bank-account.actions.create') }}</a>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
    </rebs-bank-account-listing>

@endsection
