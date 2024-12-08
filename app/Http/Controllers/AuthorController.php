<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $user)
    {
        $title = 'Blogs by ' . $user->full_name;
        $blogs = $user->blogs;

        return view('blogs_by', compact('title', 'user', 'blogs'));
    }
}
