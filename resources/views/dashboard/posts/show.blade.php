@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-lg-9">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p class="d-inline">
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="corner-down-left"></span> Kembali Ke Dashboard</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0 " id="btn" onclick="return confirm('are you sure?')" ><span data-feather="x-circle"></span>Delete</button>
                  </form>
            </p>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-4 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/dashboard/posts" class="text-decoration-none btn btn-primary my-4">Back to Posts</a>
        </div>
    </div>
</div>
@endsection