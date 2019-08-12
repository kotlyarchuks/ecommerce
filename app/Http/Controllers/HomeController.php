<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_count = config('shop.products_on_home_page');
        $products = Product::featured($products_count)->get();

        return view('home', compact('products'));
    }
}
