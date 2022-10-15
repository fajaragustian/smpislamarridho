<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EkskulController extends Controller
{
    //
    public function index()
    {
        $ekskul = Ekskul::first()->get();
        return view('frontend.ekskul.index', compact('ekskul'));
    }
    public function create()
    {
        //
        $user = User::all();
        $ekskul = Ekskul::all();
        return view('frontend.ekskul.register',compact('ekskul','user'));
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

        $validator = $request->validate([
            "name"     => "required|max:50",
            "email"     => "required|email|unique:users",
            "umur"  => "required|max:2",
            "telp"  => "required|max:13",
            "ekskuls"  => "required",
        ]);
        $show = User::create($validator);
        $show->save();
        // $data = $organitation;
        // dd($organitation);
        return redirect()->route('frontend.ekskul.register')->with('success','Register telah berhasil');
    }
}
