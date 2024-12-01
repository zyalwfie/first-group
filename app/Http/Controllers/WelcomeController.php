<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function blogs()
    {
        return view('blogs');
    }

    public function detail()
    {
        return view('detail');
    }

}
