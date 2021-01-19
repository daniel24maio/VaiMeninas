<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('create_at', 'DESC')->limit(3)->get();

        return view('front.home', ['posts' => $posts]);
    }

    public function vaimeninas()
    {
        return view('front.vaimeninas');
    }

    public function blog()
    {
        $posts = Post::orderBy('create_at', 'DESC')->get();

        return view('front.blog', ['posts' => $posts]);
    }

    public function article($uri)
    {
        $post = Post::where('uri',$uri)->first();

        return view('front.article', ['post' => $post]);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function sendMail(Request $request)
    {
        $data = [
            'reply_name' => $request->first_name." ".$request->last_name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        //var_dump(env('MAIL_FROM_NAME'),env('MAIL_FROM_ADDRESS'));
        //return new Contact($data);
        Mail::send(new Contact($data));

        return redirect()->route('contact');
    }

}
