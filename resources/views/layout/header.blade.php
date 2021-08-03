<!DOCTYPE HTML>
<html>
<head>
    <title> Home</title>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    </script>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <!---//webfonts--->

</head>
<body>
<!----container---->
<div class="container">
    <!----top-header---->
    <div class="top-header">
        <div class="logo">
            <a href="{{route('page.index')}}"><img width="100" height="100" src="{{asset('storage/imgs/shoes3.jpg')}}" title="barndlogo"/></a>
        </div>
        <div class="top-header-info">
            <div class="top-contact-info">
                <ul class="unstyled-list list-inline">
                    <li><span class="phone"> </span>090 -888 66 66</li>
                    <li><span class="mail"> </span><a href="#">khicodonenhoai@gmail.com</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="cart-details">
                <div class="add-to-cart">

                    <ul class="unstyled-list list-inline">
                        <a href="{{route('cart.detail')}}"><span class="cart" ></span>
                            <div style="color: red;"> <span style="">({{count((array)session('cart'))}})</span> </div> </a>
                    </ul>
                </div>
                <div class="login-rigister">
                    <ul class="unstyled-list list-inline">
                        <li><a class="login" href="{{route('users.login')}}">LOGIN</a></li>
                        <li><a class="logout" href="{{route('users.logout')}}">LOGOUT</a></li>
                        <li><a class="rigister" href="{{route('users.create')}}">REGISTER <span> </span></a></li>
                        <div class="clearfix"></div>
                    </ul>
                    <ul class="unstyled-list list-inline"> <p>{{\Illuminate\Support\Facades\Auth::user()}}</p> </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
@yield('content')

