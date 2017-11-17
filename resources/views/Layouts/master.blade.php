<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}fonts/icomoon/style.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{URL::to('/')}}/style.css">

    <!--[if lt IE 9]>
    <script src="{{URL::to('/')}}/js/ie-support/html5.js"></script>
    <script src="{{URL::to('/')}}/js/ie-support/respond.js"></script>
    <![endif]-->

    <style>
        .paginate-box{
            margin: auto;
            width: 50%;
        }

        .zarovnanie{
             border: 1px solid #ccc;
             text-align: center;
         }

        .but01{
            margin:3px;
        }

        .img-thumbnail_01{
            display: inline-block;
            width: 330px;
            height: 310px;
            margin: 1px;
        }
        .odh {
            text-align: right;
        }

        .info
        {
            text-align: center;
            margin:  5% 10%;
        }

        .logo
        {
            height: 30%;
            width: 30%;
            margin-bottom: -4%;
        }

        .vyhladanie
        {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 135%;
        }

        .message
        {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 135%;
        }

        .fixed-bg {
            background-image: url("{{URL::to('/')}}/images/Green.jpg");
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>

</head>

<body class="fixed-bg">
<div class="container" style="background-color: white">
    <div class="page-header">
        @yield('header')
    </div>

    @yield('content')



<footer class="site-footer" style="background-color: whitesmoke">
    <p>Copyright &copy; 2017 Company Name. Designed by A-Team. All rights reserved</p>

    <div class="social-links">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
    </div>
</footer>

</div>
</body>

</html>