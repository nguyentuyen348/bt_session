
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
