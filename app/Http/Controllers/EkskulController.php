<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ekskul;
use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ekskul = Ekskul::paginate(6);
        return view('frontend.ekskul.index', compact('ekskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $ekskul = Ekskul::all();
        return view('frontend.ekskul.register', compact('ekskul', 'user'));
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

        $users->save();
        // $data = $organitation;
        // dd($organitation);

        $users->notify(new WelcomeEmailNotification($users));
        return redirect()->back()->with('success', 'Register telah berhasil');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
