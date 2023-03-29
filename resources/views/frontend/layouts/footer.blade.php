 <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-3">
                        <div class="widget">
                            <h5>Our Company</h5>
                            <ul>
                                <li><a href="Index.html">Home<span></span></a></li>
                                <li><a href="About.html">About Us</a></li>
                                <li><a href="Services.html">Services</a></li>
                                <li><a href="Blogs.html">Blogs</a></li>
                                <li><a href="Quote-Detail.html">Get a Quote</a></li>
                                <li><a href="Privacy-Policy.html">Privacy and Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget">
                            <h5>Insurance</h5>
                            <ul>
                                <li><a href="Services-detail.html">Life Insurance</a></li>
                                <li><a href="Services-detail.html">Home Insurance</a></li>
                                <li><a href="Services-detail.html">Auto Insurance</a></li>
                                <li><a href="Services-detail.html">Health Insurance</a></li>
                                <li><a href="Services-detail.html">Business Insurance</a></li>
                                <li><a href="Services-detail.html">Travel Insurance</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget">
                            <h5>Get In Touch</h5>
                            We're here to listen:
                            <address class="s1">
                                <span><i class="fa fa-map-marker fa-lg"></i>08 W 36th St,<br> New York, NY 10001</span>
                                <span><i class="fa fa-phone fa-lg"></i>+1 200 300 9000</span>
                                <span><i class="fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:contact@example.com">contact@example.com</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="widget">
                            <h5>Newsletter</h5>

                            <p>Signup for our newsletter to get the latest news, updates and special offers in your
                                inbox.</p>
                            <form action="blank.php" class="row" id="form_subscribe" method="post"
                                name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="name_1" name="name_1" placeholder="enter your email"
                                        type="text" /> <a href="#" id="btn-submit"><i
                                            class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    &copy; Copyright 2023 - EasyInsuranceMatch
                                </div>

                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->


    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jpreLoader.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/easing.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/enquire.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script> 
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

     <script>

        $(document).ready(function () {
            var base_color = "#bbbbbb";
            var active_color = "rgb(255, 101, 76)";

            var child = 1;
            var length = $(".quotes-wrapper section").length - 1;
            $("#prev").addClass("disabled");
            $("#submit").addClass("disabled");

            $(".quotes-wrapper section")
                .not(".quotes-wrapper section:nth-of-type(1)")
                .hide();
            $(".quotes-wrapper section")
                .not(".quotes-wrapper section:nth-of-type(1)")
                .css("transform", "translateX(100px)");

            var svgWidth = length * 200 + 24;
            $("#svg_wrap").html(
                '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
                svgWidth +
                ' 24" xml:space="preserve"></svg>'
            );

            function makeSVG(tag, attrs) {
                var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
                for (var k in attrs) el.setAttribute(k, attrs[k]);
                return el;
            }

            for (i = 0; i < length; i++) {
                var positionX = 12 + i * 200;
                var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
                document.getElementById("svg_form_time").appendChild(rect);
                // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
                var circle = makeSVG("circle", {
                    cx: positionX,
                    cy: 12,
                    r: 12,
                    width: positionX,
                    height: 6
                });
                document.getElementById("svg_form_time").appendChild(circle);
            }

            var circle = makeSVG("circle", {
                cx: positionX + 200,
                cy: 12,
                r: 12,
                width: positionX,
                height: 6
            });
            document.getElementById("svg_form_time").appendChild(circle);

            $("#svg_form_time rect").css("fill", base_color);
            $("#svg_form_time circle").css("fill", base_color);
            $("circle:nth-of-type(1)").css("fill", active_color);

            $(".btn-custom").click(function () {
                $("#svg_form_time rect").css("fill", active_color);
                $("#svg_form_time circle").css("fill", active_color);
                var id = $(this).attr("id");
                if (id == "next") {
                    $("#prev").removeClass("disabled");
                    if (child >= length) {
                        $(this).addClass("disabled");
                        $("#submit").removeClass("disabled");
                    }
                    if (child <= length) {
                        child++;
                    }
                } else if (id == "prev") {
                    $("#next").removeClass("disabled");
                    $("#submit").addClass("disabled");
                    if (child <= 2) {
                        $(this).addClass("disabled");
                    }
                    if (child > 1) {
                        child--;
                    }
                }
                var circle_child = child + 1;
                $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
                    "fill",
                    base_color
                );
                $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
                    "fill",
                    base_color
                );
                var currentSection = $(
                    ".quotes-wrapper section:nth-of-type(" + child + ")"
                );
                currentSection.fadeIn();
                currentSection.css("transform", "translateX(0)");
                currentSection
                    .prevAll(".quotes-wrapper section")
                    .css("transform", "translateX(-100px)");
                currentSection
                    .nextAll(".quotes-wrapper section")
                    .css("transform", "translateX(100px)");
                $(".quotes-wrapper section")
                    .not(currentSection)
                    .hide();
            });
        });
    </script>
</body>

</html>