<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RebsBankAccount\DestroyRebsBankAccount;
use App\Http\Requests\Admin\RebsBankAccount\IndexRebsBankAccount;
use App\Http\Requests\Admin\RebsBankAccount\StoreRebsBankAccount;
use App\Http\Requests\Admin\RebsBankAccount\UpdateRebsBankAccount;
use App\Models\RebsCompany;
use App\Models\RebsBankAccount;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RebsBankAccountsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRebsBankAccount $request
     * @return Response|array
     */
    public function index(IndexRebsBankAccount $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(RebsBankAccount::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'rebs_company_id', 'name', 'bank', 'account_number', 'manager', 'creation_date', 'description'],

            // set columns to searchIn
            ['id', 'name', 'bank', 'account_number', 'manager', 'description'],

            function ($query) use ($request) {
                $query->with(['company']);
                if($request->has('companies')){
                    $query->whereIn('rebs_company_id', $request->get('companies'));
                }
            }
        );

        $companies = RebsCompany::all();

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.rebs-bank-account.index', compact('data', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
//        $this->authorize('admin.rebs-bank-account.create');

        return view('admin.rebs-bank-account.create', ['companies' => RebsCompany::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRebsBankAccount $request
     * @return Response|array
     */
    public function store(StoreRebsBankAccount $request)
    {
        // Sanitize input
        $sanitized = $request->validated();
        $sanitized['rebs_company_id'] = $request->getCompanyId();

        // Store the RebsBankAccount
        $rebsBankAccount = RebsBankAccount::create($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rebs-bank-accounts'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded')
            ];
        }

        return redirect('admin/rebs-bank-accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param RebsBankAccount $rebsBankAccount
     * @throws AuthorizationException
     * @return void
     */
    public function show(RebsBankAccount $rebsBankAccount)
    {
        $this->authorize('admin.rebs-bank-account.show', $rebsBankAccount);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RebsBankAccount $rebsBankAccount
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(RebsBankAccount $rebsBankAccount)
    {
//        $this->authorize('admin.rebs-bank-account.edit', $rebsBankAccount);

        $companies = RebsCompany::all();

        return view('admin.rebs-bank-account.edit', compact('rebsBankAccount', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRebsBankAccount $request
     * @param RebsBankAccount $rebsBankAccount
     * @return Response|array
     */
    public function update(UpdateRebsBankAccount $request, RebsBankAccount $rebsBankAccount)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['rebs_company_id'] = $request->getCompanyId();

        // Update changed values RebsBankAccount
        $rebsBankAccount->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rebs-bank-accounts'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/rebs-bank-accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRebsBankAccount $request
     * @param RebsBankAccount $rebsBankAccount
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRebsBankAccount $request, RebsBankAccount $rebsBankAccount)
    {
        $rebsBankAccount->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyRebsBankAccount $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyRebsBankAccount $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    RebsBankAccount::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
