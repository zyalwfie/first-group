<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $title = 'Blogs with Tag ' . $tag->name;
        $blogs = $tag->blogs;

        return view('blogs_with', compact('title', 'tag', 'blogs'));
    }
}
