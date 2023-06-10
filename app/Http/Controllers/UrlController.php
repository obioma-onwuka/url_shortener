<?php

namespace App\Http\Controllers;


use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('shortener');

    }


    /**
     * Show the form for creating a new resource.
     */
    public function shorten(Request $request)
    {
        
        $request->validate([
            'url' => ['required', 'url']
        ]);

        $url = $request->input('url');

        // Generate a unique short code
        $shortCode = Str::random(6);

        // Save the URL record
        Url::create([
            'url' => $url,
            'short_code' => $shortCode,
            'hits' => 0,
        ]);

        $shortUrl = route('redirect', $shortCode);

        return view('shortenedurl', compact('shortUrl'));

    }

    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();

        // Increment the hit count
        $url->increment('hits');

        return Redirect::away($url->url);
    }
}
