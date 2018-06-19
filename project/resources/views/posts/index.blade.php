<!DOCTYPE html>
@extends ('layout.app')
@section ('content')

<style>

html, body {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 50%;
  background-image: url("http://ak4.picdn.net/shutterstock/videos/17609104/thumb/1.jpg");
  background-repeat:inherit;
  background-size: cover;
  background-position: center;
  font-family: 'Raleway', sans-serif;
  font-weight:  bold;

    height: 100vh;
    margin: 0;


}

</style>


<h1>Dessert Recipes</h1>
@if (count($posts)>0)

@foreach($posts as $post)


<div class="well">
     <h3> <a href= "/posts/{{$post->id}}">{{$post->title}}</a></h3>
     <a href="{{action('PostsController@edit', $post['id'])}}" class="btn btn-warning">Edit</a>

   <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
               @csrf
               <input name="_method" type="hidden" value="DELETE">
               <button class="btn btn-danger" type="submit">Delete</button>
             </form>


   <small> Written on {{$post->created_at}}</small>
  @endforeach
@else
<p> no posts</p>


@endif
@endsection
