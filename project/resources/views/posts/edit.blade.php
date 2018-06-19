<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Update Recipes</h2><br  />
        <form method="post" action="{{action('PostsController@update', $post->id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
          </div>
          <div class="form-group col-md-4">
            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" value="{{$post->body}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
