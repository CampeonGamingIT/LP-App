<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            $lp_domain = 'lp_domain' => ['required', 'url' => 'url:https'],
            $favicon = 'favicon' => ['required', 'url' => 'url:https'],
            $page_logo = 'page_logo' => ['required', 'url' => 'url:https'],
            $page_title = 'page_title' => ['required', 'string']
        ]);

        return view('landing-page', ['lp_domain' => $lp_domain, 'favicon' => $favicon, 'page_logo' => $page_logo, 'page_title' => $page_title]);
    }
}
