<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public static function index()
    {
        return view('forms.register.register');
    }

    public static function create(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'email' => 'required',
            'password' => 'required'
        ]);

        $validData = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );

        $user = User::create($validData);
        auth()->login($user);
        return redirect('/')->with('success', 'Hooray, Register successful!');
    }
}
