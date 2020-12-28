<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class RProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = Product::all();
        //$product = Product::orderBy('created_at','desc')->get();
        $product =  Product::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.Products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.Products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'Name'=>'required',
            'CategoryID'=>'required|integer',
            'Price'=>'required|integer',
            'Description'=>'required',
            'Image' => 'required|mimes:jpeg,png,bmp,jpg',
        ]);

        $product = new Product();
        $product->Name = $request->Name;
        $product->CategoryID = $request->CategoryID;
        $product->Price = $request->Price;
        $product->Description = $request->Description;
        $ProductImage = $request->file('Image');
        $fileName = time().'.'.$ProductImage->extension();
        $ProductImage->move('Product_images',$fileName);
        $product->Image = $fileName;
        $product->save();
        return redirect()->route('dashboard.Products.index')->with('success','Product Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('dashboard.Products.edit',compact('product','categories'));
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
        $product->Name = $request->Name;
        $product->CategoryID = $request->CategoryID;
        $product->Price = $request->price;
        $product->Description = $request->Description;
        $product->save();
        return redirect()->route('dashboard.Products.index')->with('success','Product Created Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.Products.index');
    }
}
