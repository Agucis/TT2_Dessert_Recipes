
@extends ('layout.app')
@section ('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Recipes</h2><br/>
      <form method="post" action="{{url('posts')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="title">Recipe name</label>
            <input type="text" class="form-control" name="title">
          </div>

          <div class="form-group col-md-4">
            <label for="body">Recipe</label>
            <input  type="text" class="form-control" name="body">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>


@endsection
