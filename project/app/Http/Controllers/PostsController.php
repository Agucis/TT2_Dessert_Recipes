<?php

namespace App\Http\Controllers;
use \App\Http\Controllers\PostsController;


use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{

/**
  public function __construct()
    {
      echo("test");
      die;
         $this->middleware('auth')->except(['index', 'show']);
         $this->authorizeResource('post');
    }
**/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts =   Post::all();
        return view ('posts.index') ->with('posts' , $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        return redirect('posts')->with('success');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post= Post::find($id);
        return view ('posts.show')-> with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post= Post::find($id);
     return view ('posts.edit',compact('post','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $post = Post::find($request['id']);
      $post->title=$request->get('title');
      $post->body=$request->get('body');
      $post->save();
      return redirect('posts')->with('success');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect('posts')->with('success','Post Has Been Deleted');
    }
}
