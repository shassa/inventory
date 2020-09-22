@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Document</title>
    @yield('meta')
    <script src="https://kit.fontawesome.com/6eecce316c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
   
#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  font-size:20px;
  margin-left: -250px;
  background: #37474F;

}
#header {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  margin-left: -250px;
  background-color: #263238;
  font-size: 40px;
  line-height: 80px;
  color:white;
  text-align: center;
}
ul{
  list-style:none;
  }

#one{
  font-size:40px;
  float:left;
  color:red;
  }
  #btn{
  text-align:left;
  height:120px;
}
  .col-4{
  background-color:;
  padding-left:20px;
  margin:10px;
}

.progress{
  height:7px;
  margin-bottom:-15px;
}
.navbar{
  height: 80px;
  }
  #reg{
    position:fixed;
    float:right;
    right:90px;
  }
 
</style>
</head>
<!--////////////-->
<body>
  <div id="header">
    <header>
      <b>Inventory  </b>          
      <button class="btn btn-danger" onclick="$('#sidebar').fadeToggle(1000)"><i class="fas fa-list"></i></button>
    </header>
    <ul id="sidebar">
      
    @auth
      <li>
        <a href="{{route('first.index')}}"><i class="fas fa-home">Dashboard</i></a>
        </li>
      <li>
        <a href="{{route('category.index')}}"><i class="fas fa-calendar"></i> Category</a>
      </li>
      @endauth
      <li>
        <a href="{{route('product.index')}}"> <i class="fas fa-shopping-cart"></i> Products</a>
      </li>
      @auth
      <li>
        <a href="{{route('store.index')}}"><i class="fas fa-link"></i> Store </a>
      </li>
      <li>
        <a href="{{route('branch.index')}}"><i class="fas fa-leaf"></i> Branches</a>
      </li>
      <li>
        <a href="{{route('bills.index')}}">
          <i class="fas fa-list-alt"></i>Bills</a>
      </li>
      @endauth
    </ul>
  </div>
  <!--////////////////////!-->
 @section('content')
@yield('contents')
  
@endsection

<script src="{{asset('js/app.js')}}"></script>


@yield('scripts')
   
</body>
</html>