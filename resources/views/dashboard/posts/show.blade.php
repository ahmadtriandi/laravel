@extends('dashboard.layouts.main')
@section('container')

<div class="container my-5">
    <div class="row ">
        <div class="col-lg-8">
            
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back To All My Post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                
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