<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredentialController extends Controller
{
    public function signin(){
        return view('signin');
    }

    public function signup(){
        return view('signup');
    }
}
