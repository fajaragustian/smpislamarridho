<?php

namespace App\Http\Controllers;

use App\Models\Organitation;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {

        $organisasi = Organitation::first()->get();
        return view('frontend.profile.index', compact('organisasi'));
    }
}
