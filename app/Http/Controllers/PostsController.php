<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Images;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::latest()->get();
        $archive = Posts::archives();
        return view('postsview',compact('posts','archive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return request()->all();
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
        ]);
         Posts::create([
           'user_id'=>auth()->id(),
           'title'=>request('title'),
           'body'=>request('body')
        ]); 
        $post  = Posts::latest()->first();
        if(request()->hasFile('images')){
             foreach(request()->file('images') as $file )
       {
           $filename= $file->getClientOriginalName();
           $img = new Images;
           $img->posts_id = $post->id;
           $img->img_name=$filename;
           $img->save();
           $file->storeAs('public/upload',$filename);
       }
        }
     /*   auth()->user()->publish(
            new Posts(request(['title','body']))
        ); */
       return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        return view('post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}