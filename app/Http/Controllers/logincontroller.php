<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login_index(){
        return view("index");
    }
    public function test_jquery(){
        return view("jquery");
    }
}
