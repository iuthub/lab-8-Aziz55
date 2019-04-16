@extends('layouts.admin')
@section('content')
	<a href="/admin/create"class='btn btn-info'>New posts</a>
<hr>
@foreach($posts as $post)
	<p>{{$post->title}} <a href="/admin/edit/{{ $post->id }}">Edit</a></p>
@endforeach

@endsection