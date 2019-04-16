@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p><a href="/">Back to posts...</a></p>
        </div>
    </div>
    <hr>
 @endsection