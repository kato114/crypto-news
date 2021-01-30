<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
    }

    public function index() {
        return view('frontend\home');
    }

    public function news() {
        return view('frontend\news');
    }

    public function mining() {
        return view('frontend\mining');
    }

    public function shop() {
        return view('frontend\shop');
    }

    public function exchange() {
        return view('frontend\exchange');
    }

    public function wallet() {
        return view('frontend\wallet');
    }

    public function contact() {
        return view('frontend\contact');
    }
}
