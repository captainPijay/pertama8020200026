@extends('layout.main')
@section('container')
<h1 class="mb-3 text-center">{{ $title  }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-6">
        <form action="/blog" method="get">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @elseif (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Button</button>
              </div>
        </form>
    </div>
</div>

@if ($book->count()>0)
<div class="card mb-3">
    @if ($book[0]->image)
            <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('storage/'.$book[0]->image) }}" alt="{{ $book[0]->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $book[0]->category->name }}" class="card-img-top" alt="{{ $book[0]->category->name }}">
            @endif

    <div class="card-body text-center text-dark">
      <h3 class="card-title"><a href="/posting/{{ $book[0]->slug }}" class="text-decoration-none text-dark">{{ $book[0]->title }}</a></h3>
      <p>
        <small class="text-muted"> by <a href="/blog?author={{ $book[0]->author->username }}" class="text-decoration-none">{{ $book[0]->author->name }} <strong>|</strong> </a> <a href="/blog?category={{ $book[0]->category->slug }}" class="text-decoration-none">{{ $book[0]->category->name }}</a> {{ $book[0]->created_at->diffForHumans() }}
        </small>
        </p>

      <p class="card-text">{{ $book[0]->excerpt }}.</p>

      <a href="/posting/{{ $book[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>

<div class="container">
    <div class="row">
        @foreach ($book->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card text-dark">
                    <div class="position-absolute bg-dark p-3 py-2 " style="background-color: rgba(0,0,0,0.7)"><a href="/blog?category={{ $item->category->slug }}" class="text-white text-decoration-none">{{ $item->category->name }}</a></div>
                    @if ($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->category->name }}" class="img-fluid">
                        @else
                        <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                        @endif
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p>
                        <small class="text-muted"> by <a href="/blog?author={{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a>  {{ $item->created_at->diffForHumans() }}
                        </small>
                        </p>
                    <p class="card-text">{{ $item->excerpt }}</p>
                    <a href="/posting/{{ $item->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-center">
    {{ $book->links() }}
</div>
@endsection
