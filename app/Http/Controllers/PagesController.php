<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Shopify;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function about(Shopify $shopify)
    {
      dd($shopify->getAllProducts());
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }
}
