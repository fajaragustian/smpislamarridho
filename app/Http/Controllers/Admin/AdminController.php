<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Ekskul;
use App\Models\Galeri;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $admin= Admin::find(Auth::guard('admin')->user()->id);
        $post = Post::all();
        $galeri= Galeri::all();
        $user = User::all();
        $ekskul = Ekskul::all();
        return view('admin.dashboard',compact('admin','user','ekskul','galeri','post'));
    }
    public function getDashboard()
    {
       return DataTables::of(User::limit(10))->make(true);
    }
    public function editProfile(Request $request)
    {
        return view('admin.auth.profile', [
            'admin' => $request->user()
        ]);
    }
    // public function updateProfile(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|email',
    //         'image' => 'file|max:2000|mimes:jpg,bmp,png'
    //     ]);

    //     $admin = Admin::where('id', Auth::id())->first();
    //     $admin->name = $request->name;
    //     $admin->email = $request->email;
    //     $uploadedFile = $request->file('image');
    //     //dd($uploadedFile);
    //     // // mendapatkan nama berkas asli
    //     // $request->file('file')->getClientOriginalName();
    //     // // mendapatkan ektensi berkas
    //     // $request->file('file')->getClientOriginalExtension();
    //     // // mendapatkan ukuran berkas
    //     // $request->file('file')->getClientSize();
    //     $path = $uploadedFile->store('public/avatars');

    //     $old_file = $admin->image;

    //     $admin->image = $path;
    //     $admin->save();

    //     if ($old_file !== null) {
    //         Storage::delete($old_file);
    //     }
    //     return redirect()->route('admin.profile')->with('success','Data Sukses Telah Terupdate');
    // }
    public function updateProfile(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "image"     => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "name"     => "required|max:40",
            "email"  => "required",
        ]);
        if ($validator->fails()) { return redirect()->back()->withErrors($validator)->withInput();
        }
        $admin = Admin::where('id', Auth::id())->first();
        $new_image = $request->file('image');
        if($new_image){
            if($admin->image && file_exists(storage_path('app/public/' . $admin->image))){
                Storage::delete('public/'. $admin->image);
            }
            $new_image_path = $new_image->store('images/avatars', 'public');
            $admin->image = $new_image_path;
        }
        $admin->name        = $request->name;
        $admin->email         = $request->email;
        $admin->save();
        // dd($data);
        return redirect()->route('admin.profile')->with('success','Profile Data Sukses Telah Terupdate');
    }


}
