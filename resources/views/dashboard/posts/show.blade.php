@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-lg-9">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="corner-down-left"></span> Kembali Ke Dashboard</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
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