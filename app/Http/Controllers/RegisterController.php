<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('registro');
    }

    public function store(Request $request){
        //dd($request);
        $this->validate($request, [
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email'=> $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email','password'));
        return (redirect()->route('post.index'));

    }
}



