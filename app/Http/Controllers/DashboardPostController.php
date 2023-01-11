<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts'=> Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories'=> Category::all()
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
        $validatedData = [
            'title'=>'required|max:255',
            'slug'=>'required|unique:posts',
            'category_id'=>'required',
            'image'=>'image|file|max:1024',
            'body'=>'required'
        ];
        $pesan_validasi = [
            'title.required'=>'Title Harus Di Isi',
            'title.max'=>'Haksimal 255 Huruf',
            'slug.required'=>'Slug Di Butuhkan',
            'slug.unique'=>'Slug Harus Unik',
            'category_id.required'=>'Kategori Nya Apa?',
            'image.image'=>'Harus Gambar(jpg,png,jpeg, dsb)',
            'image.file'=>'Ukuran File',
            'image.max'=>'Ukuran Maksimal 1024kb',
            'body.required'=> 'Body Harus Di Isi'
        ];
        $rules=$request->validate($validatedData,$pesan_validasi);
        if($request->file('image')){
            $rules['image'] = $request->file('image')->store('post-images');
        }

        $rules['user_id'] = auth()->user()->id;
        $rules['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($rules);
        return redirect('/dashboard/posts')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'book'=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post'=>$post,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'=>'required|max:255',
            'category_id'=>'required',
            'image'=>'image|file|max:1024',
            'body'=>'required',
        ];
        $pesan_validasi = [
            'title.required'=>'Title Harus Di Isi',
            'title.max'=>'Haksimal 255 Huruf',
            'category_id.required'=>'Kategori Nya Apa?',
            'image.image'=>'Harus Gambar(jpg,png,jpeg, dsb)',
            'image.file'=>'Ukuran File',
            'image.max'=>'Ukuran Maksimal 1024kb',
            'body.required'=> 'Body Harus Di Isi'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug']= 'required|unique:posts';
        }
        $validatedData = $request->validate($rules,$pesan_validasi);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Post Has Been UPDATED!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('hapus', 'Post Telah Di Hapus');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}
