<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Mail;

class PagesController extends Controller {

    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout()
    {
        $first = 'Alco';
        $last = 'van Spengen';
        $fullname = $first . " " . $last;
        $email = 'alco.vanspengen@gmail.com';
        return view('pages.about')->with("fullname", $fullname)->withEmail($email);
    }
    public function getContact()
    {
        return view('pages.contact');
    }
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data) 
        {
            $message->from($data['email']);
            $message->to('2c2b56b921-728889@inbox.mailtrap.io');
            $message->subject($data['subject']);
        });
    }
}