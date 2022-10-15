<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
// use App\Models\{Category, Post, Tag};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
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
        $posts = Post::all();
        return view('admin.post.index',compact('admin','posts'));
    }
    public function getjson(Request $request,Post $post)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Post::with('category');
                return DataTables::eloquent($model)
                ->addColumn('category', function (Post $post) {
                    return $post->category->name;
                })
                ->addColumn('Actions', function($post) {
                    $button = '<a href="'. route("admin.post.edit", $post->id) .'" class="btn btn-primary">Edit</a> ';
                    $button .= '<a id="'. $post->id .'"  class="btn btn-danger hapus" style="text-color:white;">Hapus </a>';
                    return $button;
                })
                ->editColumn('title', function ($post) {
                    return Str::limit($post->title, 20);
                })
                ->editColumn('desc', function ($post) {
                    $desc = strip_tags($post->desc);
                    return Str::limit($desc, 10);
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
        $tags       = Tag::all();
        return view('admin.post.create', compact('categories','tags','admin'));
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
            "title"     => "required|unique:posts,title",
            "image"     => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "desc"      => "required",
            "category"  => "required",
            "tags"      => "array|required",
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $post               = new Post();
        $image              = $request->file('image');
        if($image){
            $image_path     = $image->store('images/blog', 'public');
            $post->image    = $image_path;
        }
        $post->title        = $request->title;
        $post->slug         = Str::slug($request->title);
        $post->admin_id      = Auth::user()->id;
        $post->category_id  = $request->category;
        $post->desc         = $request->desc;
        $post->keywords     = $request->keywords;
        $post->meta_desc    = $request->meta_desc;
        $post->save();

        $post->tags()->attach($request->tags);

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
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit',compact('post','categories','tags','admin'));
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
            "title"     => "required",
            "desc"      => "required",
            "category"  => "required",
            "tags"      => "array|required",
            "keywords"  => "required",
            "meta_desc" => "required",
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $post = Post::findOrFail($id);
        $new_image = $request->file('image');
        if($new_image){
            if($post->image && file_exists(storage_path('app/public/' . $post->image))){
                Storage::delete('public/'. $post->image);
            }
            $new_image_path = $new_image->store('images/blog', 'public');
            $post->image = $new_image_path;
        }

        $post->title        = $request->title;
        $post->slug         = $request->slug;
        $post->admin_id      = Auth::user()->id;
        $post->category_id  = $request->category;
        $post->desc         = $request->desc;
        $post->keywords     = $request->keywords;
        $post->meta_desc    = $request->meta_desc;
        $post->save();
        // dd($data);
        $post->tags()->sync($request->tags);
        return redirect()->back()->with('success','Data Sukses Telah Terupload');

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
        $data = Post::find($id);
        $data->delete();
        return response()->json(['text' => 'Data Berhasil dihapus'], 200);
    }
    public function trash(){
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $posts = Post::onlyTrashed()->get();
        return view('admin.post.trash', compact('posts','admin'));
    }
    public function jsontrash(Request $request,Post $posts)
    {
        if ($request->ajax()) {
            // $data = Student::latest()->get();
            $model = Post::onlyTrashed()->with('category');
                return DataTables::eloquent($model)
                ->addColumn('category', function (Post $posts) {
                    return $posts->category->name;
                })
                ->addColumn('Actions', function($posts) {
                $restore = '<form method="post" action="'.route('admin.post.restore',$posts->id).'"  class="d-inline">
                <input type="hidden" name="_token" value=" '.csrf_token().' ">
                <button type="submit" value="Restore" class="btn btn-success btn-sm">Restore</button>
                </form>
             <form method="post" action="'.route('admin.post.deletePermanent',$posts->id).'" class="d-inline delete">
                <input type="hidden" name="_token" value=" '.csrf_token().' ">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" value="Restore" class="btn btn-danger btn-sm" >Delete</button>
                </form> ';
                    return $restore;
                })
                ->editColumn('title', function ($posts) {
                    return Str::limit($posts->title, 20);
                })
                ->editColumn('desc', function ($posts) {
                    $desc = strip_tags($posts->desc);
                    return Str::limit($desc, 10);
                })
                // ->json();
                ->rawColumns(['Actions'])
                ->make(true);
        }
    }
    public function restore($id) {
        $post = Post::withTrashed()->findOrFail($id);

        if ($post->trashed()) {
            $post->restore();
            return redirect()->back()->with('success','Data successfully restored');
        }else {
            return redirect()->back()->with('error','Data is not in trash');
        }
    }

    public function deletePermanent($id){

        $post = Post::withTrashed()->findOrFail($id);

        if (!$post->trashed()) {

            return redirect()->back()->with('error','Data is not in trash');

        }else {
            $post->tags()->detach();
            if($post->image && file_exists(storage_path('app/public/' . $post->image))){
                Storage::delete('public/'. $post->image);
            }

        $post->forceDelete();

        return redirect()->back()->with('success', 'Data deleted successfully');
        }
    }
    public function uploadImage(Request $request) {
        if($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName.'_'.time().'.'.$extension;

                $request->file('upload')->move(public_path('images/'), $fileName);

                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('images/'.$fileName);
                $msg = 'Image uploaded successfully';
                $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

                @header('Content-type: text/html; charset=utf-8');
                echo $response;
            }
        }
}
