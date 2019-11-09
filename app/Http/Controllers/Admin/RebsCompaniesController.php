<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RebsCompany\DestroyRebsCompany;
use App\Http\Requests\Admin\RebsCompany\IndexRebsCompany;
use App\Http\Requests\Admin\RebsCompany\StoreRebsCompany;
use App\Http\Requests\Admin\RebsCompany\UpdateRebsCompany;
use App\Models\RebsCompany;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RebsCompaniesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRebsCompany $request
     * @return Response|array
     */
    public function index(IndexRebsCompany $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(RebsCompany::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'registration_number', 'ceo', 'business_number', 'business_type', 'sectors', 'main_tel', 'main_fax', 'establishment_date', 'opening_date', 'tax_invoice_email', 'tax_office', 'postcode', 'address', 'detail_address', 'extra_address'],

            // set columns to searchIn
            ['id', 'name', 'registration_number', 'ceo', 'business_number', 'business_type', 'sectors', 'main_tel', 'main_fax', 'tax_invoice_email', 'tax_office', 'postcode', 'address', 'detail_address', 'extra_address']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.rebs-company.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.rebs-company.create');

        return view('admin.rebs-company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRebsCompany $request
     * @return Response|array
     */
    public function store(StoreRebsCompany $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the RebsCompany
        $rebsCompany = RebsCompany::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/rebs-companies'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/rebs-companies');
    }

    /**
     * Display the specified resource.
     *
     * @param RebsCompany $rebsCompany
     * @throws AuthorizationException
     * @return void
     */
    public function show(RebsCompany $rebsCompany)
    {
        $this->authorize('admin.rebs-company.show', $rebsCompany);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RebsCompany $rebsCompany
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(RebsCompany $rebsCompany)
    {
        $this->authorize('admin.rebs-company.edit', $rebsCompany);


        return view('admin.rebs-company.edit', [
            'rebsCompany' => $rebsCompany,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRebsCompany $request
     * @param RebsCompany $rebsCompany
     * @return Response|array
     */
    public function update(UpdateRebsCompany $request, RebsCompany $rebsCompany)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values RebsCompany
        $rebsCompany->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rebs-companies'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/rebs-companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRebsCompany $request
     * @param RebsCompany $rebsCompany
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRebsCompany $request, RebsCompany $rebsCompany)
    {
        $rebsCompany->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyRebsCompany $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyRebsCompany $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    RebsCompany::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
