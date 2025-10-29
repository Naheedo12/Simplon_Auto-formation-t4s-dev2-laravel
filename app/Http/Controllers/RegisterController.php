<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showForm()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function handleForm(RegisterRequest $request)
{
    // $validated = $request->validate([
    //     'name' => 'required|min:3',
    //     'email' => 'required|email|unique:users,email',
    //     'password' => 'required|min:7|confirmed'
    // ]);

    // User::create([
    //     'name' => $validated['name'],
    //     'email' => $validated['email'],
    //     'password' => $validated['password']
    // ]);
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);


    return redirect()->back()->with('success', 'Inscription réussie !');

    }
}
