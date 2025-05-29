<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
           'nama' => 'required|string|max:255',
           'jenis_kelamin' => 'required',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string|max:20',

        ]);

        $pembeli = Pembeli::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);


        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        if( Pembeli::where('nama', $request->nama)->exists()) {

            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->with('error', 'User not found. Please register first.');

        }
    }


    public function logout()
    {
        $user = Auth::user();
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
