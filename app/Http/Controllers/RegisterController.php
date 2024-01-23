<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'login'
        ]);
    }

    public function store(Request $request)
    {
        // Validate and store the blog post...
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
            'username' => 'required|unique:users|min:4',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

            
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        // session()->flash('success', 'Registrasi berhasil !! Silahkan Login');
        return redirect('/login')->with('success', 'Registrasi berhasil !! Silahkan Login');
    }
}
