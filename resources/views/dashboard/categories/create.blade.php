@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Categories</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
        @csrf
        {{-- title --}}
        <div class="mb-3">
          <label for="name" class="form-label">Categories Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        {{-- slug --}}
        <div class="mb-3">
          <label for="slug" class="form-label " >Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        {{-- gambar --}}
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}" autofocus onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        

      
        
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>  
  </div>
 
  <script>
    //untuk slug auto
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change',function(){
      fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });
    //


    document.addEventListener('trix-file-accept',function(e){
      e.preventDefault();
    });

//untuk preview gambar di create
    function previewImage(){
      const image = document.querySelector('#image');
      const previewImage = document.querySelector('.img-preview')

      previewImage.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREvent){
        previewImage.src = oFREvent.target.result;
      }
    }
  </script>
@endsection