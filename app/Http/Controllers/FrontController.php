<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Http\Requests;



class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
public function fruits()
{
    return view('front.fruits');
}

    public function vegetable()
    {
        $vegetable=product::all();
        return view('front.vegetable',compact('vegetable'));
    }
    public function art()
{
    return view('front.art');
}
    public function dairy()
    {
        return view('front.dairy');
    }

    public function meat()
    {
        return view('front.meat');
    }
    public function sub()
    {
        return view('front.sub');
    }
    public function contact()
    {
        return view('front.contact');
    }

        public function vendorratepage()
    {
        return view('front.vendorratepage');
    }
    public function handicraft()
    {
        return view('front.handicraft');
    }

}
