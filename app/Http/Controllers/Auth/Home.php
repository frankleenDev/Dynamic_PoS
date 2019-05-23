<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class Home extends Controller
{
    //

    public function dashboard(){

    	return view('dashboard');

    }

     protected function create(Request $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function view_users(){


    	$get_users = User::all();

    	return view('users')->with(['users'=>$get_users]);
    }
}
