@extends('layout')
@section('title')
Blog Posts
@endsection

@section('content')
@foreach ($posts as $post )
<div class="col-12 my-5">
  <article>
  <h1>
    <a href="posts/{{$post->slug}}">
      {{$post->title}}
    </a>
  </h1>
  <div>
    {{$post->excerpt}}
    <div>
    </article>
</div>
    @endforeach
    @endsection