<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<<head>
<div>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</div>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>COVID19 MONITORING SYSTEM</title>

  <!-- Bootstrap 3.3.6 ok-->
  <!-- <link href='{{ asset("bootstrap/css/bootstrap.min.css") }}' rel="stylesheet" type="text/css" /> -->

<!-- Ionicons -->
<link href = '{{ asset("css/ionicons.min.css") }}' rel="stylesheet" />

  <!-- Theme style ok -->
  <link href = '{{ asset("dist/css/AdminLTE.min.css")}}' rel="stylesheet" type="text/css" />

  <link href = '{{ asset("dist/css/skins/skin-red-light.min.css") }}' rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <!-- <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>


<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-danger" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand"> <a href="#">COVID19 MONITORING SYSTEM</a>
            <div id="close-sidebar"> <i class="fas fa-times-circle" style="color:white"></i>
            </div>
        </div>

      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>


<div class="sidebar-menu">
    <ul>
      <li class="header-menu">
        <span>Please Click Item Below</span>
      </li>
          
      <li>
          <a href="{{ url('/home') }}"><i class="fa fa-home" style="color:orange"></i>Dashboard</a>
      </li>

      <li>
          <a href="{{ url('/newEntry') }}"><i class="fa fa-home" style="color:orange"></i>New Entry</a>
      </li>
      
    </ul>
</div>
           



</nav>


</body>

</html>