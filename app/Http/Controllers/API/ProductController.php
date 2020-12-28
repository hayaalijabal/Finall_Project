<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Validator;
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
        $products = Product::select('Name','CategoryID','Price')->where('Price','>',100)->get();
        $count = count($products);
        return response([
                'status' => 'success',
                'count'  => $count,
                 'data'  => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ([
            'Name'=>'required',
            'CategoryID'=>'required|integer',
            'Price'=>'required|integer',
        ]);

        $messages = ([
           'Name.required' => 'The product name field should be entered',
           'CategoryID.required' => 'CategoryID field should be entered',
           'CategoryID.integer' => 'CategoryID field should be integer',
           'Price.required' => 'Price field should be entered',
           'Price.integer' => 'Price field should be integer',
        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $product = Product::create([
            'Name' => $request->Name,
            'CategoryID' => $request->CategoryID,
            'Price' => $request->Price,
        ]);
        return response([
            'status' => 'Product created successfully',
            'Product' => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response([
            'status' => 'success',
            'data'  => $product
        ]);
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
        $rules = ([
            'Name'=>'required',
            'CategoryID'=>'required|integer',
            'Price'=>'required|integer',
        ]);

        $messages = ([
            'Name.required' => 'The product name field should be entered',
            'CategoryID.required' => 'CategoryID field should be entered',
            'CategoryID.integer' => 'CategoryID field should be integer',
            'Price.required' => 'Price field should be entered',
            'Price.integer' => 'Price field should be integer',
        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $product->Name = $request->Name;
        $product->CategoryID = $request->CategoryID;
        $product->Price = $request->Price;

        $product->save();

        return response([
            'status' => 'Product updated successfully',
            'data' => $product
        ]);
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
       return response([
           'status' => 'Product delete successfully',
           'data' => $product
       ]);
    }
}
