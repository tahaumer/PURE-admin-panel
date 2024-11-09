<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    public function index(){
        if (Auth::guard('admin')->check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function admin_login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->with('alert', [
                'message' => 'Success',
                'detail' => 'You have been logged in successfully.'
            ]);
        }
        
        return back()->with('alert', [
            'message' => 'Error',
            'detail' => 'Provided credentials didn\'t match our records'
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return view('auth.login')->with('alert', [
            'message' => 'Success',
            'detail' => 'You have been logged out successfully.'
        ]);
    }
}
