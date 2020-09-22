<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
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
#sidebar header {
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
  text-align:left;}
</style>
</head>
<!--////////////-->
<body>
  <div id="sidebar">
    <header>
      <b>Inventory</b><br>
    </header>

    <ul >
      <li><br></li>
        <li>
        <a href="#"><i class="fas fa-home">Dashboard</i></a></li><li><br></li>
      
        <li>
        <a href="#"><i class="fas fa-link"></i> Store </a><li><br></li>
        </li>
         <li>
        <a href="#"><i class="fas fa-leaf"></i> Branches</a><li><br></li>
         </li>
        <li>
        <a href="#"><i class="fas fa-calendar"></i> Category</a><li><br></li>
       </li>
      <li>
        <a href="#"> <i class="fas fa-shopping-cart"></i> Products</a><li><br></li>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-list-alt"></i>Bills</a><li></li>
      </li>
      
    </ul>
  </div>
  <!--////////////////////!-->
  <div class="navbar bg-dark"style="color:white">
<h1>log in</h1>
</div>

@yield('content')

<script src="{{asset('js/app.js')}}"></script>
   
</body>
</html>