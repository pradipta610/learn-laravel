@extends('layout.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>
                <small class="text-muted">
            Author By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> Category 
                </small>
            </p>
            @if ($post->image)
            <img src="/storage/{{ $post->image }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-4 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/posts" class="text-decoration-none btn btn-primary my-4">Back to Posts</a>
        </div>
    </div>
</div>


@endsection

