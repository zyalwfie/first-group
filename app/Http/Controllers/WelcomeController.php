<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Team;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $headBlog = Blog::latest()->limit(1)->get();
        $previewBlogs = Blog::offset(1)->limit(4)->latest()->get();

        return view('welcome', compact('headBlog', 'previewBlogs'));
    }

    public function teams()
    {
        $teams = Team::all();

        return view('teams', compact('teams'));
    }

    public function contact()
    {
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }
}
