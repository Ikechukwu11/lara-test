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
    <span><i class="fas fa-clock" style="color:teal"></i> {{date('Y-m-d', $post->date)}}</span><br>
    {{$post->excerpt}}
    <div>
    </article>
</div>
    @endforeach
    @endsection