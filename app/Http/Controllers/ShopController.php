<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


class ShopController extends Controller
{
    public function index(Products $products)
    {
        $products = Products::all();
        return view('shop.index', ['products' => $products]);
    }
}
