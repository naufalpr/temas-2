@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Berita</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/dashboard/news/{{ $news->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $news->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>      
        <div class="mb-3">
            <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $news->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $news->image }}">
            @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">
            @else
                <img src="" class="img-preview img-fluid mb-3 col-sm-5" alt="">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>      
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
                <br><small class="text-danger">{{ $message }}</small>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $news->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>      
        <button type="submit" class="btn btn-primary">Ubah Berita</button>
      </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/news/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    // prevents attachments:
    document.addEventListener("trix-file-accept", function(event) {
        event.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
  </script>
@endsection