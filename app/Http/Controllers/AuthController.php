<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function showAdmin(){
        return view('adminLogin');
    }

    public function admin(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Sorry, incorrect credentials'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
