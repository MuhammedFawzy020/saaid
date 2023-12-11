<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\Upload_Files;
use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\City;
use App\Models\Review;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminReviewsController extends Controller
{

    use Upload_Files;


    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(!checkPermission(10))
            return view('admin.permission');

        if ($request->ajax()) {
            $dataTables = Review::query()->latest();

            return DataTables::of($dataTables)

                ->editColumn('created_at', function ($row) {
                    return date('Y/m/d',strtotime($row->created_at));
                })
                ->editColumn('name', function ($row) {
                    return $row->name;
                })->editColumn('comment', function ($row) {
                    return $row->comment;
                })
                ->editColumn('image', function ($row) {
                    return ' <img src="' . get_file($row->img) . '" class="rounded" style="height:60px;width:60px;"
                             onclick="window.open(this.src)">';
                })
                ->addColumn('actions', function ($row) {
                    $edit = '';
                    $delete = '';
                    if (!checkPermission(12))
                        $edit = 'hidden';
                    if (!checkPermission(13))
                        $delete = 'hidden';
                    return "<button $edit  class='btn btn-info editButton' id='" . $row->id . "'> <i class='fa fa-edit'></i></button>
                   <button $delete class='btn btn-danger  delete' id='" . $row->id . "'><i class='fa fa-trash'></i> </button>";
                })
                ->rawColumns(['actions','name','image','created_at','comment'])->make(true);
        }
        return view('admin.crud.reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()){
            $returnHTML = view("admin.crud.reviews.parts.add_form")->with([
                'languages'=>Language::where('is_active','active')->get(),
            ])->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'image'=>'required|file|image',
            'name'=>'required',

           'comment'=>'required',

        ]);
        $data = $request->except([ '_token','image']);
        $name = [];


        $data["img"] = $this->uploadFiles('reviews', $request->file('image'), null);

        Review::create($data);
        return response()->json(1,200);

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
    public function edit(Request $request , $id)
    {
        if ($request->ajax()){
            $returnHTML = view("admin.crud.reviews.parts.edit_form")
                ->with([
                    'obj' =>Review::findOrFail($id),
                ])
                ->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $slider = Review::findOrFail($id);
        $data = $this->validate($request,[
            'image'=>'file|image',
            'name'=>'required',
            'comment'=>'required',

        ]);
        try{
                     $data = $request->except([ '_token','image']);


             if ($request->hasFile('image')){
                $data ['img'] = $this->uploadFiles('',$request->file('image'),$slider->image );
            }

//            if ($request->image) {
//                $data["img"] = $this->uploadFiles('reviews', $request->file('image'), null);
//            }
//            }else{
//                $data ['img'] = $slider->image;
//            }

            $slider->update($data);
            return response()->json(1,200);
        }catch (\Exception $exception){
            return response()->json($exception->getMessage(),500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(Review::destroy($id),200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function delete_all(Request $request)
    {
        Review::destroy($request->id);
        return response()->json(1,200);
    }


}//end
