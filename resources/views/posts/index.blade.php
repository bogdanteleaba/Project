@extends('layouts.app')

@section('content')
    <h1 style="color:black; padding-bottom:30px; text-align:center;  text-transform: uppercase; font-weight: bold;">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px; background-color:white; border-radius:0px;">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ $post->cover_image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 style="font-weight: bold; color:black; font-size:22px; color:black; text-decoration:none; text-transform: uppercase;"><a href="/laravel/public/posts/{{ $post->id }}" style="color:black;">{{ $post->title }}</h3>
                        <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
    <br><br>
@endsection 