<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getAdminLogin() {

        if (auth()->guard('admin')->user()) {
            return redirect()->route('dashboard');
        }

        return view('admin.auth.login');
    }

    public function adminAuth(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors("Your username or password are wrong.");
        }
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('/admin/login');
    }
}
