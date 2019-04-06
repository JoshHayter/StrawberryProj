<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Shopify;

class PagesController extends Controller
{
    public function home(Shopify $shopify)
    {
      dd($shopify->getAllProducts());

      return view('welcome');
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
