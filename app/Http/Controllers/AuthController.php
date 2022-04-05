<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    // Redirect to View Login
    public function viewLogin()
    {
        return view('login');
    }

    public function viewRegister()
    {
        return view('register');
    }

    /**
     * Functional 
     */

    public function login(Request $request)
    {
        $request->validate([
            'kodeuser' => 'required',
            'pass' => 'required',
        ]);

        $credentials = $request->only(['kodeuser', 'pass']);
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return 'error';
    }

    public function register(Request $request)
    {
        $request->validate([
            'kodeuser' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'pass' => 'required|min:3'
        ]);

        $data = $request->except(['_token']);
        User::create([
            'kodeuser' => $data['kodeuser'],
            'nama' => $data['nama'],
            'status' => $data['status'],
            'pass' => $data['pass'],
            'ket' => $data['ket']
        ]);

        return redirect('/auth/login');
    }
}
