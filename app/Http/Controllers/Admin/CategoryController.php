<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $categories = Category::all();
        return view('admin.categories.index',compact('admin','categories'));
    }
    public function getjson(Request $request,Category $categories)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Category::query();
                return DataTables::eloquent($model)
                ->addColumn('Actions', function($categories) {
                    $button = '<a href="'. route("admin.categories.edit", $categories->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $categories->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })

                // ->json();
                ->rawColumns(['Actions'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $categories = Category::all();
        return view('admin.categories.create', compact('admin','categories'));
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
        $validator = Validator::make($request->all(), [
            "name"     => "required|max:40|unique:categories,name",
            "keywords"  => "required",
            "meta_desc"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return redirect()->back()->with('success','Data Sukses Telah Terupload');
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
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $categories = Category::findOrFail($id);
        return view('admin.categories.edit',compact('categories','admin'));
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
        $validator = Validator::make($request->all(), [
            "name"     => "required|max:40",
            "keywords"  => "required",
            "meta_desc"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return redirect()->back()->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request)
    {
        //
        $id = $request->id;
        $data = Category::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
}
