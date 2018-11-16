@extends('main')
@section('title', '| About')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>About Me</h1>
            <p>Hello! My name is {{ $fullname }} and I built this Blog website from scratch with Laravel to inform you about the best recipes!</p>

            <p>Feel free to try out some of the best recipes on the web!

           <div class="about-image"></div>
        </div>
    </div>
@endsection
        
   
