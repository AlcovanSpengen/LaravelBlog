@extends('main')

@section('title', "| $post->title")
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <img src="{{ asset('images/' . $post->image) }}" height="400" width="100%" alt="Image not working."/>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <p>Posted in: {{ $post->category->name }}</p>
    </div>
</div>

<div class="row">
    <div class="comment-form" class="col-md-8 col-md-offset-2">
        {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', "Name:") }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-12">
                    {{ Form::label('comment', "Comment:") }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5' ]) }}

                    {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block btn-spacing-top']) }}
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@endsection