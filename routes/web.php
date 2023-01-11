<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Auth;

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
    return view('awal', [
        "title" => "Home",
        'active'=>'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active'=>'about',
        "name" => "Muhammad Zahran",
        "email" => "muhammadzahran02@gmail.com",
        "image" => "img/pasfoto.jpeg"
    ]);
});
Route::get('/blog', [PostController::class, 'index']); //[classobject::class, method]

// halaman single post
Route::get('posting/{post:slug}',[PostController::class, 'show']);//mengarah ke find method

Route::get('/categories', function(){
    return view('categories',[
        'title'=>'Post Categories',
        'active'=>'categories',
        'categories'=> Category::all()
    ]);
});




// group middleware untuk membuat banyak route memiliki middleware dari parent nya
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',function(){
        return view('dashboard.index');
    });

    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
});

// Route::get('/categories/{category:slug}',function(Category $category){
//     return view('category',[
//         'title'=>"Post By Category : $category->name",
//         'active'=>'categories',
//         'posts'=> $category->posts->load('category','author'),
//     ]);
// });
// Route::get('/author/{author:username}',function(User $author){
//     return view('posts',[
//         'title'=>"Post by Author : $author->name",
//         'active'=>'',
//         'book'=> $author->posts->load('category','author'),

//     ]);
// });

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
