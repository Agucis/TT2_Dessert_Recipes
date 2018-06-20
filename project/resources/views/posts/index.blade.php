<!DOCTYPE html>
@extends ('layout.app')
@extends('inc.sidebar')
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





table
{
  margin-left: 200px;
  margin-top: 40px

}

</style>
<h1><center>Dessert Recipes</center></h1>
@if (count($posts)>0)

@foreach($posts as $post)


<table>
  <tr>Recipe name</tr>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <tr>
    <th><h3><a href= "/posts/{{$post->id}}">{{$post->title}} </a></h3></th>
    <th><a href="{{action('PostsController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></th>

      <th><form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
             @csrf
             <input name="_method" type="hidden" value="DELETE">
           <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </th>
</tr>


</table>

</body>
</html>




<!------------------------
     <h3><a href= "/posts/{{$post->id}}">{{$post->title}} </a></h3>
     <center><a href="{{action('PostsController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></center>

        <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
               @csrf
               <input name="_method" type="hidden" value="DELETE">
            <center> <button class="btn btn-danger" type="submit">Delete</button></center>
             </form>
--------------------->

  @endforeach
@else
<p> no posts</p>


@endif
@endsection
