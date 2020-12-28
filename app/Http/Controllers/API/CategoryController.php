<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('id','Name')->get();
        $count = count($categories);
        return response([
            'status' => 'success',
            'count'  => $count,
            'data'  => $categories
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ([

            'id'=>'required|integer',
            'Name'=>'required',
        ]);

        $messages = ([

            'id.required' => 'id field should be entered',
            'id.integer' => 'id field should be integer',
            'Name.required' => 'The category name field should be entered',

        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $category = Category::create([
            'id' => $request->id,
            'Name' => $request->Name,
        ]);
        return response([
            'status' => 'Category created successfully',
            'Category' => $category
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categories = Category::select('id','Name')->get();
        $count = count($categories);
        return response([
            'status' => 'success',
            'count'  => $count,
            'data'  => $categories
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = ([

            'id'=>'required|integer',
            'Name'=>'required',
        ]);

        $messages = ([

            'id.required' => 'id field should be entered',
            'id.integer' => 'id field should be integer',
            'Name.required' => 'The category name field should be entered',

        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $category = Category::create([
            'id' => $request->id,
            'Name' => $request->Name,
        ]);

        $category->Name = $request->Name;
        $category->id = $request->id;
        $category->save();

        return response([
            'status' => 'Category created successfully',
            'Category' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response([
            'status' => 'Category delete successfully',
            'data' => $category
        ]);
    }
}
