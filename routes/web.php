<?php

use App\Models\country;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;

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
// Route::get('post/{id}/{name}/{password}',[PostController::class,'postPage']);

// Route::get('/insert',function(){
//     DB::insert('insert into posts(title,content)  values(?,?)',['PHP with Laravel','Laravel is an interesting framework']);
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
// Route::get('/read',function(){

//     $posts = Post::all();
//     foreach($posts as $post){
//         echo $post->title;
//     }
// });
// //same as above
//  Route::get('/data',function(){
//     foreach (Post::all() as $post) {
//         echo $post->title;
//     }
//  });
// //to find the desired data
//  Route::get('/find',function(){
//     $post=post::find(2);
//     return $post->title;
//  });

//  //inserting data
//  Route::get('/basicInsert',function(){
//     $post = new Post;
//     $post->title="new eloquent title";
//     $post->content="new eloquent content";
//     $post->save();

//  });

//   //Updating data
//   Route::get('/basicUpdate',function(){
//     $post =Post::find(3);
//     $post->title="updated eloquent title";
//     $post->content="updated eloquent content";
//     $post->save();
//  });

//  Route::get('/create',function(){
//     Post::create(['title'=>'the create method','content'=>'The create content']);
//  });

//  Route::get('/update',function(){
//     Post::where('id',2)->where('is_integer',0)->update(['title'=>'new updated title','content'=>'new updated content']);
//  });

//  //deleting a single data by find method
//   Route::get('/delete1',function(){
//     $post=Post::find(2);
//     $post->delete();
//   });

//   //deleting by destroy method
//   Route::get('/delete2',function(){

//     //deleting a single data if we know the key
//     Post::destroy(2);

//     //deleting multiple data if we know the key
//     Post::destroy([4,5]);

//     //deleting a single data  by where method

//     Post::where('is_integer',0)->delete();
//   });

//   Route::get('/softDelete',function(){
//     $post=Post::find(4)->delete();
//   });

//One to One relationships
  Route::get('/user/{id}/post',function($id){
      return User::find($id)->post;
  });
  //One-to-many relationship
Route::get('user/posts',function(){
        $users = User::find(1);
        foreach($users->posts as $post){
            echo $post->title."<br>";
        }
  });

Route::get('user/{id}/role',function ($id){
 $users= User::find($id);
 foreach($users->roles as $role){
     echo $role->name;
 }

});

Route::get('user/pivot',function(){

    $user=User::find(1);
    foreach ($user->roles as $role){
        return $role->pivot->created_at;
    }

});

Route::get('country/post',function (){
   $country= Country:: find(1);

   foreach ($country->posts as $post){
       return $post->title;
   }
});

//polymorphic relation
Route::get('user/photos',function(){
    $user=User::find(1);
  foreach($user->photos as $photo){
      return $photo->path;
  }
});

Route::get('post/photos',function(){
    $post=Post::find(1);
    foreach($post->photos as $photo){
        echo $photo->path . "<br>";
    }
});
