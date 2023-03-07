@extends('layout')
@section('title')
{{$post->title}}
@endsection

@section('content')
<div class="col-12">
  <article>
  <h1>{{$post->title}}></h1>
  <div>
    {{$post->body}}
  </div>
  <a href="/posts">Go Back</a>
</article>
</div>
@endsection