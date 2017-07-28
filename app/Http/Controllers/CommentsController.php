<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

use App\Comments;

class CommentsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function store(Posts $post){
        $this->validate(request(), ['body'=>'required|min:2']);
        $post->addComment(request('body'));
        return back();
    }
}
