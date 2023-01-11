@extends("layout.main")

@section("container")

<div class="container">
    <div class="row justify-content-left my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $book->title }}</h2>
            <p>by <a href="/blog?author={{ $book->author->username }}" class="text-decoration-none">{{ $book->author->name }} <strong>| </strong></a><a href="/blog?category={{ $book->category->slug }}" class="text-decoration-none">{{ $book->category->name }}</a></p>
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

        <a href="/blog" class="d-block mt-3">Back To Posts</a>
        </div>
    </div>
</div>

@endsection
