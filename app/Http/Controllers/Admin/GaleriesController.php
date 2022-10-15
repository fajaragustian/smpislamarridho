<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class GaleriesController extends Controller
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

    public function index(){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $galeries = Galeri::all();
        return view ('admin.galeri.index2', compact('galeries','admin'));
    }
    public function getjson(Request $request,Galeri $galeries)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Galeri::with('category');
                return DataTables::eloquent($model)
                ->addColumn('category', function (Galeri $galeries) {
                    return $galeries->category->name;
                })
                ->addColumn('Actions', function($galeries) {
                    $button = '<a href="'. route("admin.galeri.edit", $galeries->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $galeries->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })
                ->addColumn('image', function ($galeries) {
                    $url= asset('storage/'.$galeries->image) ;
                    return '<img src="'.$url.'" border="0" width="32" height="32"  class="rounded-circle p-1 border" align="center" />';
                     })
                // ->json();
                ->rawColumns(['Actions','image'])
                ->make(true);
        }
    }
    public function create()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $categories = Category::all();
        return view('admin.galeri.create', compact('categories','admin'));

    }
    public function store(Request $request)

    {
        $validator = Validator ::make($request->all(), [
            "image"     => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "title"     => "required|max:40",
            "category"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $galeris = new Galeri();
        $image              = $request->file('image');
        if($image){
            $image_path     = $image->store('images/galeri', 'public');
            $galeris->image    = $image_path;
        }
        $galeris->title = $request->title;
        $galeris->category_id  = $request->category;
        $galeris->save();
        return redirect()->back()->with('success','Data Sukses Telah Terupload');

    }
    public function edit($id)
    {
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $galeries = Galeri::findOrFail($id);
        $categories = Category::all();
        return view('admin.galeri.edit',compact('galeries','categories','admin'));
    }
    public function update(Request $request, $id)
    {
        $galeries = Galeri::findOrFail($id);
        $validator = Validator::make($request->all(), [
            "image"     => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "title"     => "required|max:40",
            "category"  => "required",
        ]);

        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $galeries = Galeri::findOrFail($id);
        $new_image = $request->file('image');
        if($new_image){
            if($galeries->image && file_exists(storage_path('app/public/' . $galeries->image))){
                Storage::delete('public/'. $galeries->image);
            }
            $new_image_path = $new_image->store('images/galeri', 'public');
            $galeries->image = $new_image_path;
        }
        $galeries->title = $request->title;
        $galeries->category_id  = $request->category;
        $galeries->save();
        // $data = $ekskuls;
        // dd($data);
        return redirect()->back()->with('success','Data Sukses Telah Terupload');
    }
public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $data = Galeri::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }

}
