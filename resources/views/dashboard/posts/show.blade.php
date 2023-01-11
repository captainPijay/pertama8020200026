@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $book->title }}</h2>
            <div class="mb-3">
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i> Back To All Of My Posts</a>
            <a href="/dashboard/posts/{{ $book->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
            <form class="d-inline" action="/dashboard/posts/{{ $book->slug }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Yakin Di Hapus?')"><i class="bi bi-bookmark-x-fill"></i></i>Delete</button>
            </form>
            </div>
            @if ($book->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$book->image) }}" alt="{{ $book->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $book->category->name }}" alt="{{ $book->category->name }}" class="img-fluid">
            @endif


            <article class="my-3 fs-5">
                {!! $book->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
