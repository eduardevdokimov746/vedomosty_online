<?php

namespace App\Http\Controllers;

class InfoController extends Controller
{
    public function about()
    {
        return view('info/about');
    }

    public function faq(string $slug = null)
    {
        return view('info/faq');
    }
}
