@extends('layouts.blog')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <p>Published on {{ $post->published }}</p>
                <p>Author: {{ $post->user->name }}</p>
                <hr>
            </div>
        @endforeach
    </div>
@endsection
