@extends('main')
@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Hello! Welcome to My Blog!</h1>
                <p class="lead">Thank you for visiting. This is my blog built with Laravel.</p>
                <a class="btn btn-primary btn-lg" href="/posts" role="button">See all posts!</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

                <hr />

            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
            <p>Lorem Ipsum Lorem IpsumLorem IpsumLorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>
        </div>
    </div>
    @endsection