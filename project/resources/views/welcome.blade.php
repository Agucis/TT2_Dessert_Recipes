<!doctype html>
@extends('layout.app')

@section('content')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dessert Recipes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
              position: fixed;
              left: 0;
              top: 0;
              width: 100%;
              height: 50%;
              background-image:  url("http://digtoknow.com/wp-content/uploads/2016/01/Dessert.jpg");
              background-repeat:inherit;
              background-size: cover;
              background-position: center;
              font-family: 'Raleway', sans-serif;
              font-weight:  bold;

                height: 100vh;
                margin: 0;


            }
              p {

                font-family: 'Raleway', sans-serif;
                font-weight:  bold;
                font-size: 23pt;
              }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h3 {
                  font-size: 60pt;
                  font-weight: 600;
                  position: center;
                  margin-top: 420px; 
            }
        </style>
    </head>

    <body>

  <h3><center> Dessert Recipes</center></h3>

    </body>
</html>
@endsection
