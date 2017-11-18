<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }

    public function about()
    {
        $data = array(
            'title' => 'About page',
            'skills' => ['fornt-end', 'back-end', 'deployment'],
        );

        return view('pages.about')->with($data);
    }

    public function posts()
    {
        return view('pages.posts');
    }
}
