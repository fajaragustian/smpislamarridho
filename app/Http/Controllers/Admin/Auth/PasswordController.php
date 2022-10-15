<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function showChangePasswordAdmin() {
        $admin=Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.auth.change-password',compact('admin'));
    }

    public function changePasswordStore(Request $request) {
        $request->validate([
            'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
          ]);
          $user = Auth::user();
          if (!Hash::check($request->current_password, $user->password)) {
              return back()->with('error', 'Current password does not match!');
          }
          $user->password = Hash::make($request->password);
          $user->save();
          return back()->with('success', 'Password successfully changed!');
      }
}
