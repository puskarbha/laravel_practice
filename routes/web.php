<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/demo/{name}/{id?}',function($name,$id=null){
//    return view('demo');

// echo "Welcome ".$name."    ";
// echo $id;

$data = compact('name','id');
// print_r($data);
return view('demo')->with($data);
});

Route::any('/test',function(){
    echo"testing  the route";
});
*/

// Route:get('/{name}',function($name){
//     return view('home');
// // });
//  Route::get('/example',function(){
//      return view('welcome');
//  });

//  Route::get('/about',function(){
//     echo"<h1>Welcome to about us page.</h1>Know more about us";
//  });

// //  Route::get('/contact',function(){
// //      echo"<h2>Our contact details are given below. </h2> Mobile:9812348456";
// //  });

// //  Route::get('/post/{id}',function($id){
// //     echo"Well,our id is : ".$id;
// //  });

//  Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//      $url =route('admin.home');
//      return"this url is ".$url;
//  }));

//  Route::get('nepal/nawalprashi/basa',array('as'=>'puskar.home',function(){
//     $address=route('puskar.home');
//     return"puskar lives in".$address." municipality";
//  }));

// //  Route::get('admin/post/linkExample',array('as'=>'page.link',function(){
// //     <a href="route('page.link')">Click Here</a>
// //  }));

// // Route::get('post',[PostController::class,'index']);
// Route::get('contact',[PostController::class,'contact']);
// Route::get('post/{id}/{name}/{password}',[PostController::class,'postpage']);

// Route::get('/insert',function(){
//     DB::insert('insert into posts(title,content)  values(?,?)',['PHP with Laravel','Laravel is a interesting framework']);
// });

// Route::get('/read',function(){
//     $result=DB::select('select * from posts where id=?',[1]);
//     foreach($result as $post){
//         return $post->content;
//     }
// });


// Route::get('/update',function(){
//     $updated = DB::update('update posts set title="updated-title" where id=?',[1]);
//     return $updated;
// });

// Route::get('/delete',function(){
//     $deleted = DB::delete('delete from posts where id=?',[1]);
//     return $deleted;
// });

//extra○t all data
Route::get('/read',function(){
   
    $posts = Post::all();
    foreach($posts as $post){
        echo $post->title;
    }
});
//same as above
 Route::get('/data',function(){
    foreach (Post::all() as $post) {
        echo $post->title;
    }
 });
//to find the desired data
 Route::get('/find',function(){
    $post=post::find(2);
    return $post->title;
 });

 //inserting data
 Route::get('/basicinsert',function(){
    $post = new Post;
    $post->title="new eloquent title";
    $post->content="new eloquent content";
    $post->save();
 });

  //Updating data
  Route::get('/basicupdate',function(){
    $post =Post::find(3);
    $post->title="updated eloquent title";
    $post->content="updated eloquent content";
    $post->save();
 });

 Route::get('/create',function(){
    Post::create(['title'=>'the create method','content'=>'The create content']);
 });