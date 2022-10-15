<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ekskul;
use App\Models\Galeri;
use App\Models\Organitation;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    //
    public function index()
    {
        $galeri = Galeri::first()->take(1)->get();
        $posts = Post::latest()->take(3)->get();
        $organitations = Organitation::first()->get();
        return view('home', compact('organitations','posts','galeri'));
    }
    // public function organitions()
    // {
    //     $organitations = Organitation::first()->get(4);
    //     return view('guest', compact('$organitations'));
    // }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.post.show', compact('post'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->latest()->get();
        return view ('welcome',compact('category','posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->latest()->get();
        return view ('welcome',compact('tag','posts'));
    }
}
