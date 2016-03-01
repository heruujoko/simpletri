<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SimpleTRI - @yield('title')</title>

	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/bootstrap/bootstrap.css" />

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/app/app.v1.css" />
    <style>
      .navigation ul li ul li a {
        color: #bebebe;
      }
      .navigation ul li ul li a:hover {
        color: white;
      }
      .navigation ul li ul li.active a {
          border-left: 5px solid #ff404b;
          color: #ffffff;
      }
      .parsley-required {
        color: red;
        list-style: none;
      }
      .parsley-type {
        color: red;
        list-style: none;
      }
    </style>
    @yield('css')
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- Preloader -->
    <div class="loading-container">
      <div class="loading">
        <div class="l1">
          <div></div>
        </div>
        <div class="l2">
          <div></div>
        </div>
        <div class="l3">
          <div></div>
        </div>
        <div class="l4">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->

	<aside class="left-panel">

            <div class="user text-center">
                  <img src="{{ URL::to('/') }}/assets/images/avtar/user.png" class="img-circle" alt="...">
                  <h4 class="user-name">Akshay Kumar</h4>

                  <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
                    <i class="fa fa-circle status-icon available"></i> Available <i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon signout"></i> Sign out</a></li>
                  </ul>
                  </div>
            </div>

            <!--  NAV -->
            @include('nav')

    </aside>

    <section class="content">

        <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <form role="search" class="navbar-left app-search pull-left hidden-xs">
              <input type="text" placeholder="Enter keywords..." class="form-control form-control-circle">
         	</form>

            <nav class=" navbar-default hidden-xs" role="navigation">
                <ul class="nav navbar-nav">
                </ul>
            </nav>

            <ul class="nav pull-right">
              <li><a href="{{ URL::to('/') }}/signout"><i class="fa fa-sign-out"></i> Signout</a></li>
            </ul>
        </header>
        <!-- Header Ends -->


        <div class="warper container-fluid">
            @yield('content')
        </div>
        <!-- Warper Ends Here (working area) -->


        <footer class="container-fluid footer">

        </footer>


    </section>
    <!-- Content Block Ends Here (right box)-->



    <!-- JQuery v1.9.1 -->
	  <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::to('/') }}/bower_components/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('/') }}/assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Globalize -->
    <script src="{{ URL::to('/') }}/assets/js/globalize/globalize.min.js"></script>

    <!-- NanoScroll -->
    <script src="{{ URL::to('/') }}/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>




    <!-- Custom JQuery -->
	  <script src="{{ URL::to('/') }}/assets/js/app/custom.js" type="text/javascript"></script>
    @yield('js')
</body>
</html>
