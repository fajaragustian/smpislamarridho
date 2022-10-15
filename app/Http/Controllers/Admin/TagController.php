<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
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
        $tags = Tag::all();
        return view('admin.tag.index',compact('admin','tags'));
    }
    public function getjson(Request $request,Tag $tags)
    {

        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Tag::query();
                return DataTables::eloquent($model)
                ->addColumn('Actions', function($tags) {
                    $button = '<a href="'. route("admin.tag.edit", $tags->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $tags->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
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
        $tags = Tag::all();
        return view('admin.tag.create', compact('admin','tags'));
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
            "name"     => "required|max:40|unique:tags,name",
            "keywords"  => "required",
            "meta_desc"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name);
        $tag->keywords = $request->keywords;
        $tag->meta_desc = $request->meta_desc;
        $tag->save();

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
        $tags = Tag::findOrFail($id);
        return view('admin.tag.edit',compact('tags','admin'));
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
        $validator = Validator::make($request->all(), [
            "name"     => "required|max:40",
            "keywords"  => "required",
            "meta_desc"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $Tag = Tag::findOrFail($id);
        $Tag->name = $request->name;
        $Tag->slug = $request->slug;
        $Tag->keywords = $request->keywords;
        $Tag->meta_desc = $request->meta_desc;
        $Tag->save();

        return redirect()->back()->with('success','Data Sukses Telah Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $data = Tag::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
}
