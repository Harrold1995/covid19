<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COVID 19 MONITORING SYSTEM</title>

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
        <!-- Fonts -->
        <link href = '{{ asset("css/Family-Nunito.css") }}' rel="stylesheet" />

        <link href = '{{ asset("css/style.css") }}' rel="stylesheet" />
        <script src='{{ asset ("js/jquery.js") }}' type="text/javascript"></script>

        
        <link href = '{{ asset("css/bootstrap-3.4.1.min.css") }}' rel="stylesheet" />
        <script src='{{ asset ("js/jquery-3.5.1.min.js") }}' type="text/javascript"></script>
        <script src='{{ asset ("js/bootstrap-3.4.1.min.js") }}' type="text/javascript"></script>

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<div class="content">
    <div class="title m-b-md">
           COVID 19 MONITORING SYSTEM
    </div>
    
    <div class="container">
        <section class="content">
<div class="row">

<div class="col-lg-3 col-xs-6">
       <div class="small-box bg-red">
          <div class="inner"> <p>ALL QUARANTINED</p> </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
       <div class="small-box bg-aqua">
          <div class="inner"> <p>BARANGAY ISOLATION UNIT</p> </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

 
    <div class="col-lg-3 col-xs-6">
     <div class="small-box bg-green">
      <div class="inner"><p>SPECIAL CARE FACILITY</p></div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

  
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner"><p>HOME QUARANTINE</p> </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
</div>
</section>
</div>

            </div>
        </div>
    </body>
</html>
