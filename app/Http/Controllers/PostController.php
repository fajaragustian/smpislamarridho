<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category, Tag, Post};
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        // $posts = Post::with('category', 'tags')->paginate(5);
        // $posts = Post::latest()->get();
        $posts = Post::paginate(5);
        return view('frontend.post.index', compact('posts'));
    }

    public function show($slug)
    {
        $tags = Tag::all();
        $category = Category::all();
        $recent = Post::latest()->take(5)->get();
        $post = Post::where('slug', $slug)->first();
        return view('frontend.post.details', compact('post','tags','category','recent'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->latest()->get();
        return view ('frontend.post.slug',compact('category','posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->latest()->get();
        return view ('frontend.post.slug',compact('tag','posts'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the title and body columns from the posts table
        $data = Post::paginate(5);
        $post = DB::table('posts')
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->get();
        // Return the search view with the resluts compacted
        return view('frontend.post.search',compact('post','data'));
    }

}
