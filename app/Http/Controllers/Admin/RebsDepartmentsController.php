<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RebsDepartment\DestroyRebsDepartment;
use App\Http\Requests\Admin\RebsDepartment\IndexRebsDepartment;
use App\Http\Requests\Admin\RebsDepartment\StoreRebsDepartment;
use App\Http\Requests\Admin\RebsDepartment\UpdateRebsDepartment;
use App\Models\RebsCompany;
use App\Models\RebsDepartment;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;

class RebsDepartmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRebsDepartment $request
     * @return Response|array
     */
    public function index(IndexRebsDepartment $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(RebsDepartment::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'rebs_company_id', 'name', 'description'],

            // set columns to searchIn
            ['id', 'name', 'description'],

            function ($query) use ($request) {
                $query->with(['company']);
                if($request->has('companies')){
                    $query->whereIn('rebs_company_id', $request->get('companies'));
                }
            }
        );

        $companies = RebsCompany::all();

        if ($request->ajax()) {
            return ['data' => $data];
        }

        return view('admin.rebs-department.index', compact('data', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.rebs-department.create');
        
        $companies = RebsCompany::all();

        return view('admin.rebs-department.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRebsDepartment $request
     * @return Response|array
     */
    public function store(StoreRebsDepartment $request)
    {
        // Sanitize input
        $sanitized = $request->validated();
        $sanitized['rebs_company_id'] = $request->getCompanyId();

        // Store the RebsDepartment
        $rebsDepartment = RebsDepartment::create($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rebs-departments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded')
            ];
        }

        return redirect('admin/rebs-departments');
    }

    /**
     * Display the specified resource.
     *
     * @param RebsDepartment $rebsDepartment
     * @throws AuthorizationException
     * @return void
     */
    public function show(RebsDepartment $rebsDepartment)
    {
        $this->authorize('admin.rebs-department.show', $rebsDepartment);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RebsDepartment $rebsDepartment
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(RebsDepartment $rebsDepartment)
    {
        $this->authorize('admin.rebs-department.edit', $rebsDepartment);

        $companies = RebsCompany::all();

        return view('admin.rebs-department.edit', compact('rebsDepartment', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRebsDepartment $request
     * @param RebsDepartment $rebsDepartment
     * @return Response|array
     */
    public function update(UpdateRebsDepartment $request, RebsDepartment $rebsDepartment)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $sanitized['rebs_company_id'] = $request->getCompanyId();


        // Update changed values RebsDepartment
        $rebsDepartment->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/rebs-departments'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/rebs-departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRebsDepartment $request
     * @param RebsDepartment $rebsDepartment
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRebsDepartment $request, RebsDepartment $rebsDepartment)
    {
        $rebsDepartment->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
