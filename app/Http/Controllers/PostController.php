<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
    {
        echo "This is page 1";
    }
    public function contact(){
        $people=['ram','shyam','hari','gopal'];
        return view('contact',compact('people'));
    }
    public function postpage($id,$name,$password){
        // return view('mypost')->with('id',$id);
        return view('mypost',compact('id','name','password'));
    }
}