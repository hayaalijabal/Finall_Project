<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('name','email','password')->get();
        $count = count($users);
        return response([
            'status' => 'success',
            'count'  => $count,
            'data'  => $users
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $messages = ([
            'name.required' => 'The user name field should be entered',
            'email.required' => 'email field should be entered',
            'email.email' => 'email field should be email',
            'password.required' => 'password field should be entered',
        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        $user= Product::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return response([
            'status' => 'Product created successfully',
            'User' => $user
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response([
            'status' => 'success',
            'data'  => $user
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = ([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $messages = ([
            'name.required' => 'The user name field should be entered',
            'email.required' => 'email field should be entered',
            'email.email' => 'email field should be email',
            'password.required' => 'password field should be entered',
        ]);

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response([
            'status' => 'User created successfully',
            'User' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response([
            'status' => 'user delete successfully',
            'data' => $user
        ]);
    }
}
