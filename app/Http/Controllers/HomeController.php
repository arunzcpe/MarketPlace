<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       #All user can login this page     
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Fetch all the products
        //$products = Product::latest()->paginate(8);
        $products = Product::query();

        #Check whether request has a category
        if(request()->has('category')) {
            # If request has a category, append the where condn
            $products = $products->where('category', request()->category);
        }

        $products = $products->latest()->paginate(6);    
        //Send to view welcome
        return view('welcome', ['products' => $products]);

    }
}
