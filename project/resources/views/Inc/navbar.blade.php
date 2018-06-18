<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;

    padding: 0;
    overflow: hidden;
    background-color: #333;
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
  
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;

}

li a:hover:not(.active) {
    background-color: #42f4b3;
}

.active {
    background-color: #4CAF50;
}
.right {
    float: right;

}
.left{
	float: left;

}
</style>
</head>
<body>


  <ul>
          <li><a href="{{ url('/home') }}" class = "left">Home</a><li>
          <li><a href="{{ url('/recipes') }}" class = "left">Recipes</a><li>

          @if(!Auth::check())
          <li><a  href="{{ route('login') }}" class = "right">Login</a></li>
          <li> <a href="{{ route('register') }}"class = "right">Register</a></li>
          @endif

          @if(Auth::check())
          <li><a class="right" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        @endif
  </ul>
</body>
</html>
