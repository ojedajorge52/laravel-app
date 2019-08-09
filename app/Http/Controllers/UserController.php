<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function newUser(){
        return view('nuevo');
    }
    function showUsers(){
        return view('users');
    }
}
