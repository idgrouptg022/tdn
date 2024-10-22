<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('guest.pages.news.index');
    }

    public function show()
    {
        return view('guest.pages.news.show');
    }
}
