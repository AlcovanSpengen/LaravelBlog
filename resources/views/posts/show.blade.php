@extends('main')

@section('title', '| View Post')

@section('content')

<div class="row">
    <div class="col-md-8">
        <img src="{{ asset('images/'.$post->image) }}" height="400" width="100%" alt="Image not working." />
        <hr>
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body  }}</p>
        <hr>
        <div class="tags">
            @foreach ($post->tags as $tag)
                <button>{{ $tag->name }}</button>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Url Slug<dt>
                <dd><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
            </dl>
            <dl class="dl-horizontal">
                <label>Category</label>
                <p>{{ $post->category->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label>Created At:</label>
                <p>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label>Last Updated:</label>
                <p>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</p>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Html::linkRoute('posts.index', 'See all Posts', [], ['class' => 'btn btn-secondary btn-block btn-h1-spacing']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection