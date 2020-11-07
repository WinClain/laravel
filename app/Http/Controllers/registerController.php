<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Models\Users;

class registerController extends Controller
{
        public function submit(registerRequest $request){
           $user = new Users;
           $user->name = $request->input('name');
           $user->lastname = $request->input('lastname');
           $user->email = $request->input('email');
           $user->password = $request->input('password');

           $user->save();

           return redirect()->route('home-page');
        }
}
