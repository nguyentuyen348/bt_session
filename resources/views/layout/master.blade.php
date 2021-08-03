<!DOCTYPE HTML>
<html>
<head>
    <title> Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>

    <script src="{{asset('js/my.js')}}"></script>
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


    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    </script>
    <!----webfonts--->
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
            <a href=""><img width="100" height="100" src="{{asset('storage/imgs/shoes3.jpg')}}"/></a>
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
                    <ul class="unstyled-list list-inline">{{\Illuminate\Support\Facades\Auth::user()}}</ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div>
            <p>{{ trans('messages.welcome') }}</p>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <!----//top-header---->
    <!---top-header-nav---->
    <div class="top-header-nav">
        <!----start-top-nav---->
        <nav class="top-nav main-menu">
            <ul class="top-nav">
                <li><a href="{{route('products.list')}}">PRODUCTS </a><span> </span></li>
                <li><a href="">CAMPAINGS</a><span> </span></li>
                <li><a href="">SERVICES</a><span> </span></li>
                <li><a href="">BRANDS</a><span> </span></li>
                <li><a href="">ABOUT US</a></li>

                <div class="clearfix"></div>
            </ul>
            <a href="#" id="pull"><img src="images/nav-icon.png" title="menu"/></a>
        </nav>
        <!----End-top-nav---->
        <!---top-header-search-box--->
        <div class="top-header-search-box">
            <form>
                <input type="text" placeholder="Search" required maxlength="22">
                <input type="submit" value=" ">
            </form>
        </div>
        <!---top-header-search-box--->
        <div class="clearfix"></div>
    </div>
</div>

<div class="content">
    <div class="container">
        <!---top-row--->
        <div class="">
            <div class="col-xs-4">
                <div class="top-row-col1 text-center">
                    <h2>WOMAN</h2>
                    <img class="r-img text-center" src="images/img-w.jpg" title="name"/>
                    <span><img src="images/obj1.png" title="name"/></span>
                    <h4>TOTAL</h4>
                    <label>357 PRODUCTS</label>
                    <a class="r-list-w" href="single-page.html"><img src="images/list-icon.png" title="list"/></a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="top-row-col1 text-center">
                    <h2>MAN</h2>
                    <img class="r-img text-center" src="images/man-r-img.jpg" title="name"/>
                    <span><img src="images/obj2.png" title="name"/></span>
                    <h4>TOTAL</h4>
                    <label>357 PRODUCTS</label>
                    <a class="r-list-w" href="single-page.html"><img src="images/list-icon.png" title="list"/></a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="top-row-col1 text-center">
                    <h2>KIDS</h2>
                    <img class="r-img text-center" src="images/kid-r-img.jpg" title="name"/>
                    <span><img src="images/obj3.png" title="name"/></span>
                    <h4>TOTAL</h4>
                    <label>357 PRODUCTS</label>
                    <a class="r-list-w" href="single-page.html"><img src="images/list-icon.png" title="list"/></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!---top-row--->
        <div class="container">
            <!----products---->
            <div class="special-products">
                <div class="s-products-head">

                        <h3>PRODUCTS</h3>


                    <div class="s-products-head-right">
                        <a href="products.html">view all products</a>
                    </div>
                    @yield('content')
                    <div class="clearfix"></div>
                </div>
                <!----products-grids---->
            {{--   @foreach($products as $product)--}}

            <!----content---->
                <!----footer--->
                <div class="footer">
                    <div class="container">
                        <div class="col-md-3 footer-logo">
                            <a href="index.html"><img src="images/flogo.png" title="brand-logo"/></a>
                        </div>
                        <div class="col-md-7 footer-links">
                            <ul class="unstyled-list list-inline">
                                <li><a href="#"> Faq</a> <span> </span></li>
                                <li><a href="#"> Terms and Conditions</a> <span> </span></li>
                                <li><a href="#"> Secure Payments</a> <span> </span></li>
                                <li><a href="#"> Shipping</a> <span> </span></li>
                                <li><a href="contact.html"> Contact</a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="col-md-2 footer-social">
                            <ul class="unstyled-list list-inline">
                                <li><a class="pin" href="#"><span> </span></a></li>
                                <li><a class="twitter" href="#"><span> </span></a></li>
                                <li><a class="facebook" href="#"><span> </span></a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!---//footer--->
                <!---copy-right--->
                <div class="copy-right">
                    <div class="container">
                        <p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

                                $().UItoTop({easingType: 'easeOutQuart'});

                            });
                        </script>
                        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover"
                                                                              style="opacity: 1;"> </span></a>
                    </div>
                </div>
                <!--//copy-right--->
            </div>
            <!----container---->
        </div>
    </div>
</div>
</body>
</html>

<!----start-slider-script---->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!----//End-slider-script---->

<!----start-top-nav-script---->
<script>
    $(function () {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();
        $(pull).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
        });
        $(window).resize(function () {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
</script>
<!----//End-top-nav-script---->
