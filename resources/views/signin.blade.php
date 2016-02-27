<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Brio Web App - Bootstrap Admin Template</title>

	<meta name="description" content="">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/bootstrap/bootstrap.css" />

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


    <div class="container">
    	<div class="row">
    	<div class="col-lg-4 col-lg-offset-4">
        	<h3 class="text-center">SimpleTRI<br><small>Sistem Pelayanan Administrasi</small></h3>
            <!-- <p class="text-center">Sign in to get in touch</p> -->
            <hr class="clean">
            @if(Session::has('error'))
               <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong>Oops!</strong> {{ Session::get('error') }} 
               </div> 
            @elseif(Session::has('info'))
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <strong></strong> {{ Session::get('info') }} 
               </div> 
            @else
            @endif
        	<form role="form" method="post" action="{{ URL::to('/') }}/signin">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">  
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input name="nik" type="text" class="form-control"  placeholder="NIK">
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" name="password" class="form-control"  placeholder="Password">
              </div>
              <div class="form-group">
                <label class="cr-styled">
                    <input type="checkbox" ng-model="todo.done">
                    <i class="fa"></i>
                </label>
                Remember me
              </div>
        	  <button type="submit" class="btn btn-purple btn-block">Sign in</button>
            </form>
            <hr>
        </div>
        </div>
    </div>

    <!-- JQuery v1.9.1 -->
	  <script src="{{ URL::to('/') }}/assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="{{ URL::to('/') }}/assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('/') }}/assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Globalize -->
    <script src="{{ URL::to('/') }}/assets/js/globalize/globalize.min.js"></script>

    <!-- NanoScroll -->
    <script src="{{ URL::to('/') }}/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>




    <!-- Custom JQuery -->
	<script src="{{ URL::to('/') }}/assets/js/app/custom.js" type="text/javascript"></script>



	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');

    </script>
</body>
</html>
