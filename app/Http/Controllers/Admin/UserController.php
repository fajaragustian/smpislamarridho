<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Ekskul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $user = User::all();

        return view('admin.user.index', compact('user','admin'));
    }
    public function cetak()
    {
        //
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $user = User::all();
        return view('admin.user.cetak', compact('user','admin'));
    }
    public function getcetak(Request $request,User $user)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = User::with('ekskul');
                return DataTables::eloquent($model)
                ->addColumn('ekskul', function (User $user) {
                    return $user->ekskul->name;
                })
                ->editColumn('alasan', function ($user) {
                    return Str::limit($user->alasan, 10);
                })
                // ->json();
                ->rawColumns(['Actions'])
                ->make(true);
        }
    }
    public function getjson(Request $request,User $user)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = User::with('ekskul');
                return DataTables::eloquent($model)
                ->addColumn('ekskul', function (User $user) {
                    return $user->ekskul->name;
                })
                ->addColumn('Actions', function($user) {
                    $button = '<a href="'. route("admin.user.edit", $user->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $user->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })
                ->editColumn('alasan', function ($user) {
                    return Str::limit($user->alasan, 10);
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
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $user = User::all();
        $ekskul = Ekskul::all();
        return view('admin.user.create',compact('ekskul','user','admin'));
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
        $request->validate([
            "name"     => "required|max:50",
            "email"     => "required|email|unique:users",
            "umur"  => "required|max:2",
            "telp"  => "required|max:13",
            "ekskul"  => "required",
            "alasan"  => "required|max:120",
        ]);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->umur = $request->umur;
        $users->telp = $request->telp;
        $users->alasan = $request->alasan;
        $users->ekskul_id = $request->ekskul;
        $users->admin_id      = Auth::user()->id;
        $users->save();
        // $data = $organitation;
        // dd($organitation);
        return redirect()->back()->with('success','Data Register telah berhasil');
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
        $user = User::findOrFail($id);
        $ekskul = Ekskul::all();
        return view('admin.user.edit',compact('ekskul','user','admin'));
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
        $request->validate([
            "name"     => "required|max:50",
            "email"     => "required|email",
            "umur"  => "required|max:2",
            "telp"  => "required|max:13",
            "ekskul"  => "required",
            "alasan"  => "required|max:120",
        ]);
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->umur = $request->umur;
        $users->telp = $request->telp;
        $users->alasan = $request->alasan;
        $users->ekskul_id = $request->ekskul;
        $users->admin_id      = Auth::user()->id;
        $users->save();
        // $data = $organitation;
        // dd($organitation);
        return redirect()->back()->with('success','Data Register telah berhasil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request )
    {
        //
        $id = $request->id;
        $data = User::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
}
