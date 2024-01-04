
@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>


{{-- Fitur Search --}}
<div class="row justify-content-center">
  <div class="col-md-6">
    <form action="/blog">
      <div class="input-group mb-3 pb-3">
        @if (request('category'))
          <input type="hidden" name='category' value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name='author' value="{{ request('author') }}">
          @endif


        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <div class="input-group-append">
          <button class="btn btn-danger px-5 py-2 mx-3" type="submit">Search</button>
        </div>
      </div>
    </form>
  </div>
</div>



@if ($posts->count())
<div class="card mb-3 text-center">
    <img src="{{ asset('img/web1.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{ $posts[0]->title }}</h3>
      <p class="card-text"><small class="text-body-secondary">Di buat oleh <a class="text-decoration-none" href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }} </a> di <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> pada {{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->id }}">Read More</a>
    </div>
  </div>
    




<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
      

<div class="card"  style="width: 18rem;">
  <div class="position-absolute bg-dark px-2 py-2 text-white bg-opacity-10"><a class="text-decoration-none link-light" href="/blog?category={{ $posts[1]->category->slug }}">{{ $post->category->name }}</a></div>
  <img src="{{ asset('img/web1.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a class="text-decoration-none" href="/blog?author={{ $post->id }}">{{ $post->title }} </a></h5>
    <p class="card-text">by. <a class="text-decoration-none" href="blog?author= {{ $post->author->username }}">{{ $post->author->name }} </a> pada {{ $posts[0]->created_at->diffForHumans() }}</p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More</a>
  </div>
</div>


</div>
@endforeach
  </div>
</div>



@else
<p class="text-center fs-4"> No found Post</p>    
@endif
<div class=" p-2 d-flex justify-content-center">
{{ $posts->links() }}
</div>
@endsection

    