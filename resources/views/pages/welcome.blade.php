@extends('main')
@section('title', '| Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Hello! Welcome to The Food Blog!</h1>
                <p class="lead">Thank you for visiting. This food blog is all about the best recipes!</p>
                <a class="btn btn-primary btn-lg" href="/posts" role="button">See all posts!</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)
                <div class="post">
                <img src="{{ asset('images/' . $post->image) }}" height="400" width="100%" alt="Image not working."/>
                <hr>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

                <hr />

            @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Zoeken</h2>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <hr>
                <button class="form-control btn-spacing-top" type="submit">Search</button>
            </form>
        </div>
    </div>
    @endsection