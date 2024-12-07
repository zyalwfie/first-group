<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function blog()
    {
        return view('user.blog.index');
    }

    public function write()
    {
        return view('user.write.index');
    }

    public function profile()
    {
        return view('user.profile.index');
    }

}
