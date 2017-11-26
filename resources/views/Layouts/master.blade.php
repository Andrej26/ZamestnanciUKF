<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::to('/')}}fonts/icomoon/style.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/style.css">

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

            .site-footer
            {
                text-align: center;
                background-color: whitesmoke;
                border-radius:  6px 6px 0px 0px
            }

            .fixed-bg {
                background-image: url("{{URL::to('/')}}/images/Green.jpg");
                min-height: 500px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .nadpis_fakult
            {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 300%;
                color: #4a4a4a;
                text-align: center;
                text-shadow: 3px 2px #d0d0d0;
            }

            .nadpis_fakult01
            {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 300%;
                color: black;
                text-align: center;
            }

            .border_links01
            {
                background-image: url("{{URL::to('/')}}/images/bluebackground.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                border: 3px solid #59c1d1;
                border-radius: 30px;
                margin-left: 10%;
                padding-left: 10%;
                text-align: center;
            }

            .border_text01
            {
               background-image: url("{{URL::to('/')}}/images/textbackground.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                text-align: center;
                color: black;
                padding-left: 2%;
                padding-right: 2%;
                padding-top: 2%;
                margin-left: -2.5%;
                margin-top: -3%;
                font-size: 115%;
            }

            .oddelovacia_ciara
            {
                margin-top: 2%;
                margin-bottom: -2%
            }
</style>
</head>

<body class="fixed-bg">
<div class="container" style="background-color: white; border-radius: 0px 0px 6px 6px">
    <div class="page-header">
        @yield('header')
    </div>

    @yield('content')


<footer class="site-footer">
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