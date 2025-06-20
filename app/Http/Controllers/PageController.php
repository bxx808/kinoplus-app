<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;


class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function categories()
    {
        return view('pages.categories');
    }

    public function movie()
    {
        return view('pages.movie');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('adminPanel.post.create', [
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function edit()
    {
        return view('adminPanel.post.edit');
    }

    public function tags()
    {
        return view('adminPanel.tag.create', [
            'tags' => Tag::all(),
        ]);
    }
}
