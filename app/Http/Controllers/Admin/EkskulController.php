<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Str;
use Validator;
use Yajra\DataTables\Facades\DataTables;

class EkskulController extends Controller
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
        $ekskuls = Ekskul::all();
        return view('admin.ekskul.index', compact('admin','ekskuls'));
    }
    public function getjson(Request $request,Ekskul $ekskul)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Ekskul::with('category');
                return DataTables::eloquent($model)
                ->addColumn('category', function (Ekskul $ekskul) {
                    return $ekskul->category->name;
                })
                ->addColumn('Actions', function($ekskul) {
                    $button = '<a href="'. route("admin.ekskul.edit", $ekskul->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $ekskul->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })
                ->addColumn('image', function ($ekskul) {
                    $url= asset('storage/'.$ekskul->image) ;
                    return '<img src="'.$url.'" border="0" width="32" height="32"  class="rounded-circle p-1 border" align="center" />';
                     })
                // ->json();
                ->rawColumns(['Actions','image'])
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
        return view('admin.ekskul.create', compact('categories','admin'));

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
        $validator = FacadesValidator::make($request->all(), [
            "image"     => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "name"     => "required|max:40|unique:ekskuls,name",
            "pembina"     => "required|max:40",
            "category"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $ekskuls = new Ekskul();
        $image              = $request->file('image');
        if($image){
            $image_path     = $image->store('images/ekskuls', 'public');
            $ekskuls->image    = $image_path;
        }
        $ekskuls->name = $request->name;
        $ekskuls->pembina = $request->pembina;
        $ekskuls->slug = Str::slug($request->name);
        $ekskuls->category_id  = $request->category;
        $ekskuls->save();
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
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $ekskuls = Ekskul::findOrFail($id);
        $categories = Category::all();
        return view('admin.ekskul.edit',compact('ekskuls','categories','admin'));
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
        $ekskuls = Ekskul::findOrFail($id);
        $validator = FacadesValidator::make($request->all(), [
            "image"     => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "name"     => "required|max:40",
            "pembina"     => "required|max:40",
            "category"  => "required",
        ]);

        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $ekskuls = Ekskul::findOrFail($id);
        $new_image = $request->file('image');
        if($new_image){
            if($ekskuls->image && file_exists(storage_path('app/public/' . $ekskuls->image))){
                Storage::delete('public/'. $ekskuls->image);
            }
            $new_image_path = $new_image->store('images/ekskul', 'public');
            $ekskuls->image = $new_image_path;
        }
        $ekskuls->name = $request->name;
        $ekskuls->pembina = $request->pembina;
        $ekskuls->slug = Str::slug($request->name);
        $ekskuls->category_id  = $request->category;
        $ekskuls->save();
        // $data = $ekskuls;
        // dd($data);
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
        $data = Ekskul::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
}
