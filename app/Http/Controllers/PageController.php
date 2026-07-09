<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function management()
    {
        return view('management');
    }

public function gallery()
{
    return view('gallery');
}

    public function masa()
    {
        return view('masa');
    }
}
