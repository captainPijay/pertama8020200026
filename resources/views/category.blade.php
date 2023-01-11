@extends('layout.main')

@section('container')
<h1 class= "mb-5">{{ $title }}</h1>
@if ($posts->count()>0)
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posting/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted"> by <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} <strong>|</strong> </a> <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
        </p>

      <p class="card-text">{{ $posts[0]->excerpt }}.</p>

      <a href="/posting/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
  @else
  <p class="text-center fs-4">No Post Found</p>
@endif
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark p-3 py-2 " style="background-color: rgba(0,0,0,0.9)"><a href="/categories/{{ $item->category->slug }}" class="text-white text-decoration-none">{{ $item->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p>
                        <small class="text-muted"> by <a href="/author/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a>  {{ $item->created_at->diffForHumans() }}
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

@endsection
