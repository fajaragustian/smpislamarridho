<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        $galeri = Galeri::paginate(6);
        return view('frontend.galeri.show', compact('galeri','category'));
    }
}
