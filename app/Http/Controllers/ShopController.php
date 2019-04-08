<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Shopify;

class ShopController extends Controller
{
  public function index()
  {
    return view('shop.index');
  }
  public function checkout($checkoutId, Shopify $shopify)
  {
    // if($shopify->validCheckout($checkoutId)){
    //   return view('shop.checkout')->with('checkoutId', $checkoutId);
    // }
    // abort(404);

    return view('shop.checkout')->with('checkoutId', $checkoutId);
  }
}
