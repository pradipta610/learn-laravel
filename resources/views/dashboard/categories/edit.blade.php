@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Category</h1>
  </div>
  <div class="col-lg-8">
    <form method="post" action="/dashboard/categories/{{ $categories->slug }}" class="mb-5" enctype="multipart/form-data">
    
      @method('put')
        @csrf
        {{-- title --}}
        <div class="mb-3">
          <label for="name" class="form-label">Categories Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name',$categories->name) }}" required autofocus>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        {{-- slug --}}
        <div class="mb-3">
          <label for="slug" class="form-label " >Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug',$categories->slug) }}" required>
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>


        {{-- gamabr --}}
        <div class="mb-3">
          <input type="hidden" name="oldImages" id="old-images" value="{{ $categories->image }}">
          <label for="image" class="form-label">Image</label>
          @if ($categories->image)
            <img src="{{ asset('storage/'.$categories->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
          @endif
          
          <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}" autofocus onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

      
        
        <button type="submit" class="btn btn-primary">Edit Categories</button>
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



//untuk preview gambar di edit
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