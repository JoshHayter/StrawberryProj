<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tune;

class TunesController extends Controller
{
  public function index()
  {
    $tunes = Tune::all();


    return view('tunes.index')->withTunes($tunes);
  }
}
