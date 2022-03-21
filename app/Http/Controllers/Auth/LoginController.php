<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        return view('admin.auth.login');
    }

    public function handle(LoginRequest $request) 
    {
        $credentials = $request->only(['email', 'password']);

        if(auth()->attempt($credentials)){
           return redirect()->route('dashboard.index'); 
        }

        return back()->with('error', 'Wrong email or password');
    }

    public function logout() 
    {
        auth()->logout();

        return redirect()->route('login.index');
    }
}
