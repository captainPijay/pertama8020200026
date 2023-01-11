<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
class PostController extends Controller
{

    public function index(){

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title= ' in '. $category->name;

        }
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author->name;
        }

        return view('posts', [
            "title" => "All Post" . $title,
            'active'=>'posts',
            "book" => Post::latest()->filter(request(['search', 'category', 'author']))
                ->paginate(7)->withQueryString()
                ]
            );
    }
    public function show(Post $post){
        return view('post', [
            "title"=> "single post",
            'active'=>'posts',
            "book" => $post
        ]);
    }
}
