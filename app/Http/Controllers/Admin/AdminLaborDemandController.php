<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\DailyLabordemand;
use App\Models\User;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Yajra\DataTables\DataTables;

class AdminLaborDemandController extends Controller
{

    public function index(Request $request)
    {
        if (!checkPermission(45))
            return view('admin.permission');

        if ($request->ajax()) {

            $row=DailyLabordemand::get();

            return DataTables::of($row)

                ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->editColumn('job_id', function ($admin) {
                    return $admin->job_id;
                })
                ->addColumn('delete_all', function ($admin) {
                    return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all' id='" . $admin->id . "'>";
                })
                ->addColumn('actions', function ($admin) {
                    $delete='';
                    if (!checkPermission(46))
                        $delete='hidden';
                    return "
                   <button $delete class='btn btn-danger  delete' id='" . $admin->id . "'><i class='fa fa-trash'></i> </button>";
                })->rawColumns(['actions', 'image', 'delete_all','job_id'])->make(true);
        }
        return view('admin.laborDemand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(DailyLabordemand::destroy($id),200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete_all(Request $request)
    {

        DailyLabordemand::destroy($request->id);
        return response()->json(1,200);
    }
}
