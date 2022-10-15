<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Organitation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class OrganitationController extends Controller
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
        $organitations = Organitation::all();
        return view('admin.organitation.index', compact('admin', 'organitations'));
    }
    public function getjson(Request $request, Organitation $organitation)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Organitation::query();
            return DataTables::eloquent($model)
                ->addColumn('Actions', function ($organitation) {
                    $button = '<a href="' . route("admin.organitation.edit", $organitation->id) . '" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="' . $organitation->id . '"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })
                ->addColumn('image', function ($organitation) {
                    $url = asset('storage/' . $organitation->image);
                    return '<img src="' . $url . '" border="0" width="32" height="32"  class="rounded-circle p-1 border" align="center" />';
                })
                // ->json();
                ->rawColumns(['Actions', 'image'])
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
        $organitations = Organitation::all();
        return view('admin.organitation.create', compact('admin', 'organitations'));
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
            "image"     => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "name"     => "required|max:40",
            "position"  => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $organitation       = new Organitation();
        $image              = $request->file('image');
        if ($image) {
            $image_path     = $image->store('images/organitation', 'public');
            $organitation->image    = $image_path;
        }
        $organitation->name        = $request->name;
        $organitation->slug         = Str::slug($request->name);
        $organitation->admin_id      = Auth::user()->id;
        $organitation->position  = $request->position;
        $organitation->save();
        // $data = $organitation;
        // dd($organitation);
        return redirect()->back()->with('success', 'Data Sukses Telah Terupload');
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
        $organitation = Organitation::findOrFail($id);
        return view('admin.organitation.edit', compact('organitation', 'admin'));
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
            "image"     => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "name"     => "required|max:40",
            "position"  => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $organitation = organitation::findOrFail($id);
        $new_image = $request->file('image');
        if ($new_image) {
            if ($organitation->image && file_exists(storage_path('app/public/' . $organitation->image))) {
                Storage::delete('public/' . $organitation->image);
            }
            $new_image_path = $new_image->store('images/organitation', 'public');
            $organitation->image = $new_image_path;
        }
        $organitation->name        = $request->name;
        $organitation->slug         = $request->slug;
        $organitation->admin_id      = Auth::user()->id;
        $organitation->position  = $request->position;
        $organitation->save();
        // dd($data);
        return redirect()->back()->with('success', 'Data Sukses Telah Terupload');
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
        $data = Organitation::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
}
