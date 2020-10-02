<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome($name="Guest"){
        $posts= new Post();
        $data=$posts;
        return view('welcome',compact('data'));
    }
}
