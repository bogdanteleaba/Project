@extends('layouts.app')

@section('content')
<a href="/laravel/public/posts" class="btn btn-default" style="background-color: #5B8D09; color:white; border: 1px solid #5B8D09;">Go Back</a>
<div id="plm" style="text-align:center;">   
<h1 style="color:black; padding-bottom:20px;  text-transform: uppercase; font-weight: bold;">{{ $post->title }}</h1>
    <img style="width:50%;"src="/laravel/public/storage/cover_images/{{ $post->cover_image }}">
    <br>
    <br>
    <div style="padding-top:20px; font-size:18px; color:black;">
        {{ $post->body }}
    </div>
    <hr>
    <small >Written on {{ $post->created_at}}</small>
    <hr>
</div>
        @if(!Auth::guest())
             @if(Auth::user()->id == $post->user_id)
                <a href="/laravel/public/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!!Form::close() !!}
             @endif
        @endif
    @endsection 