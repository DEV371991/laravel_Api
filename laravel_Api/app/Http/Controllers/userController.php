<?php

namespace App\Http\Controllers;

use App\Models\usermodel;
use Illuminate\Http\Request;


class userController extends Controller
{
   
    public function index()
    {
        //
        $user= usermodel::latest()->paginate(10);
        dd($user);
        return [
            "status" => 1,
            "data" => $user
        ];

    }

   
    public function create()
    {
        //
    }

   
    
    public function store(Request $request)
    {
        //
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $user = usermodel::create($request->all());
        
        return [
            "status" => 1,
            "data" => $user
        ];

    }

   
    public function show(request $user)
    {
        //
        dd($user);
         return [
            "status" => 1,
            "data" =>$user
        ];

    }

    
    public function edit($id)
    {
        //
    }


    public function update(Request $request, request $user)
    {
        //
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $user->update($request->all());
 
        return [
            "status" => 1,
            "data" => $user,
            "msg" => 'user updated successfully'
        ];
    }

    
    public function destroy(request $id )
    {
        //
         $id->delete();
        return [
            "status" => 1,
            "data" => $id,
            "msg" => "Blog deleted successfully"
        ];
    }
}
