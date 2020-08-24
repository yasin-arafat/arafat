<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PricingPageController extends Controller
{
    public function index()
    {
    	return view('front.pricing');
    }
}
