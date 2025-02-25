<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.portfolio.home');
    }

    public function about()
    {
        return view('pages.portfolio.about');
    }

    public function certi()
    {
        return view('pages.portfolio.certi');
    }

    public function project()
    {
        return view('pages.portfolio.project');
    }

    public function contact()
    {
        return view('pages.portfolio.contact');
    }

}
