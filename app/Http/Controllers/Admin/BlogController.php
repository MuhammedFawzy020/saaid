<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
     use Upload_Files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
         $our_blogs = Blog::latest();

         return DataTables::of($our_blogs)
         ->editColumn('image', function ($row) {
                 return ' <img src="'.get_file($row->image).'" class="rounded" style="height:60px;width:60px;"
                            onclick="window.open(this.src)">';
         })
         ->editColumn('created_at', function ($row) {
                return date('Y/m/d',strtotime($row->created_at));
         })
         ->editColumn('title', function ($row) {
                return $row->title_ar;
         })
         ->addColumn('delete_all', function ($row) {
         return "<input type='checkbox' class=' delete-all form-check-input' data-tablesaw-checkall name='delete_all'
             id='" . $row->id . "'>";
         })
         ->addColumn('actions', function ($row) {
         $edit = '';
         $delete = '';
         
         return "<a href=". route('blogs.edit', $row->id) . " class='btn btn-info' id='" . $row->id . "'> <i
                 class='fa fa-edit'></i></a>
         <button $delete class='btn btn-danger  delete' id='" . $row->id . "'><i class='fa fa-trash'></i> </button>";
         })
         ->rawColumns(['actions', 'image', 'delete_all','title'])->make(true);
         }
         return view('admin.crud.blogs.table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("admin.crud.blogs.create_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|string',
            'description_ar' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,webp,svg'
        ]);

        $data = $request->all();
        $data['image'] = $this->uploadFiles('blogs',$request->file('image'),null );
        $newBlog = Blog::create($data);

         return response()->json(1,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        return view('admin.crud.blogs.edit_form')->with('blog', Blog::findOrFail($blog));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        $request->validate([
            'title_ar' => 'required|string',
            'description_ar' => 'required',
            
        ]);

        $blog = Blog::findOrFail($blog);
        $data = $request->all();
        if($request->has('image')) {
            $data['image'] = $this->uploadFiles('blogs',$request->file('image'),null );
        }
        
        $blog->update($data);

        //return response()->json(1,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blog = Blog::findOrFail($blog);
        $blog->delete();

        return response()->json(1,200);
    }

    public function delete_all(Request $request) {
        blog::destroy($request->id);
        return response()->json(1,200);
    }
}
