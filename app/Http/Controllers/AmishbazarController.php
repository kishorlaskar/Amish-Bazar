<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmishbazarController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function single_product()
    {
        return view('frontend.single_product');
    }
    public function single_blog()
    {
        return view('frontend.single_blog');
    }
}
