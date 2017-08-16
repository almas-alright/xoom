<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="admin/assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/assets/lib/bootstrap/css/bootstrap.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/assets/lib/font-awesome/css/font-awesome.css') }}">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/assets/lib/metismenu/metisMenu.css') }}">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/assets/lib/onoffcanvas/onoffcanvas.css') }}">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{ asset('admin/assets/lib/animate.css/animate.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        @yield('content')
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            @if (Auth::guest())
            <li><a class="text-muted" href="{{ route('admin.login') }}" >Login</a></li>
            @endif
            <li><a class="text-muted" href="{{ route('admin.password.request') }}" >Forgot Password</a></li>
            <!-- <li><a class="text-muted" href="{{ route('register') }}" >Signup</a></li> -->
        </ul>
    </div>
  </div>


    <!--jQuery -->
    <script src="{{ asset('admin/assets/lib/jquery/jquery.js') }}"></script>

    <!--Bootstrap -->
    <script src="{{ asset('admin/assets/lib/bootstrap/js/bootstrap.js') }}"></script>


    <script type="text/javascript">
        // (function($) {
        //     $(document).ready(function() {
        //         $('.list-inline li > a').click(function() {
        //             var activeForm = $(this).attr('href') + ' > form';
        //             //console.log(activeForm);
        //             $(activeForm).addClass('animated fadeIn');
        //             //set timer to 1 seconds, after that, unload the animate animation
        //             setTimeout(function() {
        //                 $(activeForm).removeClass('animated fadeIn');
        //             }, 1000);
        //         });
        //     });
        // })(jQuery);
    </script>
</body>

</html>
