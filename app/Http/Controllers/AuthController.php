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

    /**
     * Login Function (Validate | Attempt)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'kodeuser' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->only('kodeuser');
        // $pass_verify = Hash::check($request->password,);

        $credentials =  $request->only(['kodeuser', 'password']);
        if (!Auth::attempt($credentials)) {
            return redirect('/auth/login');
        }

        return 'logged in';
    }

    /**
     * Registration Function (Validate | Bcrypt | Attempt)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'kodeuser' => 'required',
            'nama' => 'required',
            'status' => 'required',
            'password' => 'required|min:3'
        ]);

        $data = $request->except(['_token']);
        User::create([
            'kodeuser' => $data['kodeuser'],
            'nama' => $data['nama'],
            'status' => $data['status'],
            'password' => $data['password'],
            'ket' => $data['ket']
        ]);
        // return false;
        return redirect('/auth/login');
    }
}
