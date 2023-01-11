@extends('dashboard.layout.main')
@section('container')

<form method="post" action="/dashboard/categories/{{ $categories->slug }}" class="mb-3 mt-5">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name" class="form-label">Edit Category</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $categories->name) }}" placeholder="Category Baru">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" readonly class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('title', $categories->slug) }}" placeholder="Slug">
        @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>

<script>
const title = document.querySelector('#name');
const slug = document.querySelector('#slug');


title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' +title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
});

document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
})
</script>

@endsection
