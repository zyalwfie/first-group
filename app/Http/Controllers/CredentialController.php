<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CredentialController extends Controller
{
    public function index(){
        return view('user.signin');
    }
}
