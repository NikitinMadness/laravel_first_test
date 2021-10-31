<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $showpost = new posts();
        return view('home', ['posts' => $showpost->all()]);
    }

    public function about(){
        return view('about');
    }

    public function posts(){
        return view('posts');
    }

    public function article(){
        $showpost = new posts();
        return view('article', ['posts' => $showpost]);
    }

    //sign-up-check

    public function sign_check(Request $request){
        $valid = $request->validate([
            'usrMail' => 'required|min:3|max:100',
            'usrName' => 'required|min:2|max:10',
            'usrPass' => 'required|min:5|max:15'

        ]);
    }

    //posts-check

    public function posts_check(Request $request){
        $valid = $request->validate([
            'title' => 'required|min:3|max:250',
            'content' => 'required'


        ]);
        $cpost = new posts();
        $cpost->title = $request->input('title');
        $cpost->content = $request->input('content');
        $cpost->save();
    
        return redirect()->route('home');
    }
   


}

//uri controller