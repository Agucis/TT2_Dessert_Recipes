<!DOCTYPE html>
@include('inc.navbar')
<html lang="en">
    <head>
        <title>Posts</title>

        <!-- bootstrap minified css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- bootstrap minified js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- custom CSS -->
        <style>
        html, body {
          position: fixed;
          left: 0;
          top: 0;
          width: 100%;
          height: 50%;
          background-image: url("http://www.thefatherstable.com/wp-content/uploads/2014/02/slide4.jpg");
          background-repeat:inherit;
          background-size: cover;
          background-position: center;
          font-family: 'Raleway', sans-serif;
          font-weight:  bold;

            height: 100vh;
            margin: 0;


        }
        h1{font-size:23px;}
        .pull-left h2{margin-top:0;font-size:20px;}
        </style>
    </head>

    <body>
        <div class="container">
            <h1><center><b>Add your Recipe</b><center></h1>
            @yield('content')
        </div>
    </body>
</html>
