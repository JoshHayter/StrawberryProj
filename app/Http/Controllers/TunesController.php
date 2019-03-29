<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TunesController extends Controller
{
  public function index()
  {
    $tunes = \App\Tune::all();


    return view('tunes.index')->withTunes($tunes);
  }
}
