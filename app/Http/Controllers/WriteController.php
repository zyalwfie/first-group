<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteController extends Controller
{
    public function index()
    {
        return view('user.write.index');
    }
}
