

@extends('layouts.main')
@section('container')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>by. <a class="text-decoration-none" href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in</a> <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                {{-- <h5>{{ $post->excerpt }}</h5> --}}

                <img class="img-fluid my-2" src="{{ asset('img/web1.jpg') }}" class="card-img-top" alt="...">
                
                
                <article class="my-4 fs-4">
                <p>{!! $post->body !!}</p>
                
                </article>
                
                <a href="\blog">Kembali ke blog</a>
        </div>
    </div>
</div>



@endsection

