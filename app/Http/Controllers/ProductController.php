<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #fetch all the products that belongs to authendicated user
        //$products = Product::where("user_id", auth()->user()->id)->latest()->get();

        #User and Product has OneToMany Relationship
        $products = auth()->user()->products()->latest()->get();

        #Call the products.index and pass the products collection
        return view("products.index", ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        #Call the view
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Image uploading
        $storedPath = $request->file('image')->store('public/products');

        $newProduct = [
                        'user_id' => auth()->user()->id,
                        'title' => $request->title,
                        'body' => $request->body,
                        'price' => $request->price,
                        'category' => $request->category,
                        'image_path' => $storedPath
                    ];
        #Create a new Product            
        Product::create($newProduct);

        #Return back to list page
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$product = Product::find($id)    
        #Call the products.show along with the $product variable     
        return view('products.show', ['product' => $product] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        #Call the products.edit along with the $product variable     
        return view('products.edit', ['product' => $product] );   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request->image != NULL) {
            #Image uploading
            $storedPath = $request->file('image')->store('public/products');    
        }
      
        
        #Update the current product
        $product->update([
            'title' => $request->title,
            'body' => $request->body,
            'price' => auth()->user()->id == $product->user_id ? $request->price : $product->price,
            'category' => $request->category,
            'image_path' => $request->image != NULL ? $storedPath : $product->image_path,
            'status' => $request->status
        ]);

        #Return back to list page
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        #Delete the current product
        $product->delete();
        
        #Return back to the list page
        return redirect('/products');
    }
}
