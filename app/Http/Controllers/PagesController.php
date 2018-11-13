<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller {

    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout(){
        $first = 'Alco';
        $last = 'van Spengen';
        $fullname = $first . " " . $last;
        $email = 'alco.vanspengen@gmail.com';
        return view('pages.about')->with("fullname", $fullname)->withEmail($email);
    }
    public function getContact(){
        return view('pages.contact');
    }
}