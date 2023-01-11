@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 d-block">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
    @if (auth()->user()->is_admin)
    <h2 class="text-center">Developer</h2>
    <div class="text-center">
    <img src="{{ 'img/pasfoto.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
    <img src="{{ 'img/ade.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
    <img src="{{ 'img/audrelia.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
    <img src="{{ 'img/wijaya.jpg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
    <img src="{{ 'img/defan.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded">
    <img src="{{ 'img/dimas.jpeg' }}" alt="Developer" width=180 class="img-thumbnail rounded-circle mx-3 mb-3 rounded"><div class="d-inline">
    </div>
        <br>
        <img src="https://source.unsplash.com/1200x470?sea" class="rounded mx-auto d-block">
    </div>
    @else
        <img src="https://source.unsplash.com/1000x470?sea">
  @endif
@endsection
