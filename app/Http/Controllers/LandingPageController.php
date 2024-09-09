<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $domain, $path, $lang, $curr, $query_string)
    {
        request()->validate([
            'favicon' => ['required'],
            'pageLogo' => ['required'],
            'pageTitle' => ['required'],
            'ctaLink' => ['required'],
            'bgIMG' => ['required']
        ]);

        // Extracts the url's parameters
        $domain = $request->route('domain');
        $path = $request->route('path');
        $lang = $request->route('lang');
        $curr = $request->route('curr');
        $query_string = $request->route('query_string');


        // TODO create a view single or along with components (FE part)
        return view('', compact('domain', 'path', 'lang', 'curr', 'query_string'));
    }
}
