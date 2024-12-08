<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = 'All Blogs';
        $newestBlogs = Blog::latest()->limit(5)->get();
        $tags = Tag::all();

        return view('blogs', compact('title', 'newestBlogs', 'tags'));
    }

    public function show(Blog $blog)
    {
        return view('blog', compact('blog'));
    }
}
