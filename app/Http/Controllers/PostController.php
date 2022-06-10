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
        return view('contact');
    }
    public function postpage($id,$name,$password){
        // return view('mypost')->with('id',$id);
        return view('mypost',compact('id','name','password'));
    }
}