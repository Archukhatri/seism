<?php
use App\Country;
use App\Post;
use App\User;
use App\Role;
use App\Photo;
use App\Tag;
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
    // return view('welcome');

    return "welcome here";
});

// Route::get('/about', function () {
//     // return view('welcome');

//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     // return view('welcome');

//     return "hi I am contact";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     // return view('welcome');

//     return "This is post number". $id." " . $name;
// });



// Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
// 	$url = route('admin.home');
// 	return "this url is". $url;
// }));









// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware'=> ['web']], function(){

// });





// Route::get('/post', 'PostsController@index'); 





// Route::resource('posts', 'PostsController'); 









// practise

// Route::get('/contact','PostsController@contact');

// Route::get('posts/{id}/{name}/{password}','PostsController@show_post');



// ---------------------------------------------------------
// | DATABASE Raw SQL Queries
// |--------------------------------------------------------

// Route::get('/insert', function(){
// 	DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// });




// Route::get('/read', function(){
// 	$results = DB::select('select * from posts where id=?', [1]);

// 	// return var_dump($results);

// 	foreach($results as $post){
// 		return $post->title;
// 	}
	
// });



// Route::get('/update', function(){
// 	$updated = DB::update('update posts set title="update title" where id=?', [1]);

	
// 		return $updated;
	
	
// });



// Route::get('/delete',function(){
// 	$deleted = DB::delete('delete from posts where id=?', [1]);
// 	return $deleted; 
// });


// ---------------------------------------------------------
// |OBJECT RELATION MODEL ELOQUENT
// |--------------------------------------------------------



// Route::get('/read', function(){
// 		$posts=Post::all();

// 		foreach($posts as $post){
// 			return $post->title;
// 		}

// });







// Route::get('/find', function(){
// 		$post=Post::find(2);
// 		return $post->title;
		

// });



// Route::get('/findwhere', function(){
// 	$posts=Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
// 	return  $posts;
// });



// Route::get('/findmore', function(){
// 	// $posts=Post::findOrFail(2);
// 	// return  $posts;

// 	$posts=Post::where('users_count', '<', 50)->findOrFail();
// });



// Route::get('basicinsert', function(){
// 	$post = new Post;
// 	$post->title= 'New Eloquent title insert';
// 	$post->content= 'How Eloquent is really cool, look at this content';
// 	$post->save();
// });



// Route::get('basicinsert2', function(){
// 	$post = Post::find(2);
// 	$post->title= 'New Eloquent title insert 2';
// 	$post->content= 'How Eloquent is really cool, look at this content 2';
// 	$post->save();
// });




// Route::get('/create', function(){
// 	Post::create(['title'=>'the create method3', 'content'=>'WOW I\'am learning well with Edwin3']);
// });



// Route::get('/update', function(){
// 	Post::where('id', 3)->where('is_admin', 0)-> update(['title'=>'NEW PHP LARAVEL TITLE', 'content'=>'I Love my instructor']);
// });





// Route::get('/delete', function(){
// 	$post = Post::find(2);
// 	$post->delete();
// });


// Route::get('/delete2', function(){
// 	Post::destroy([4,5]);
// 	//can delete by query
// 	// Post::where('is_admin', 0)->delete();
// });




// Route::get('/softdelete', function(){
// 	Post::find(5)->delete();
// });


// Route::get('/readsoftdelete', function(){
// 	// $post = Post::find(4);
// 	// return $post;

// 	$post = Post::withTrashed()->where('is_admin',0)->get();
// 	return $post;


	// $post = Post::withTrashed()->where('id',4)->get();
	// return $post;

	// $post = Post::onlyTrashed()->where('id', 4)->get();
	// return $post;
// });


//to restore the deleted posts or any data
// Route::get('/restore', function(){
// 	Post::withTrashed()->where('is_admin', 0)->restore();
// })




//to delete a restore premanently

// Route::get('/forcedelete', function(){
// 	Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
// });






// ---------------------------------------------------------
// | ELOQUENT
// |--------------------------------------------------------


// //one to one reationship
// Route::get('/user/{id}/post', function($id){
// 	return User::find($id)->post->content;
// });



// Route::get('/post/{id}/user', function($id){
// 	return Post::find($id)->user->name;
// });




//one to many relationship
// Route::get('/posts', function(){
// 	$user = User::find(1);
// 	foreach($user->posts as $post){
// 		return $post->content;
// 	}
// });


// //many to many relationship
// Route::get('/user/{id}/role', function($id){
// 	$user=User::find($id)->roles()->orderBy('id', 'desc')->get();

// 	return $user;
// 	// foreach($user->roles as $role){
// 	// 	return $role->name;
// 	// }
// });





// //accessing intermediate table / pivot table
// Route::get('user/pivot', function(){
// 	$user = User::find(1);
// 	foreach($user->roles as $role){
// 		echo $role->pivot->created_at;
// 			// return $role->pivot;
// 	}
// });





// Route::get('/user/country', function(){
// 	$country = Country::find(1);
// 	foreach($country->posts as $post){
// 		return $post->title;
// 	}
// });







// //polymorphic relation
// Route::get('user/photos', function(){
// 	$user = User::find(1);
// 	foreach($user->photos as $photo){
// 		return $photo;
// 	}
// });


// Route::get('post/{id}/photos', function($id){
// 	$post = Post::find($id);
// 	foreach($post->photos as $photo){
// 		echo $photo->path;
// 	}
// });




// Route::get('photo/{id}/post', function($id){
// 	$photo = Photo::findOrFail($id);
// 	return $photo->imageable;
// });


// polymorphic many to many
// Route::get('/post/tag', function(){s
// 	$post = Post::find(1);
// 	foreach($post->tags as $tag){
// 		echo $tag->name;
// 	}
// });



Route::get('/tag/post', function(){
	$tag = Tag::find(2);
	// return $tag->posts;
	foreach($tag->posts as $post){
		echo $post->title;
	}
});




?>