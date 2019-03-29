<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $tunes = [
        'tune1'
      ];
        return view('welcome')->withTunes($tunes);
    }

    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }
}
