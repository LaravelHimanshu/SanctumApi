<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>EasyInsuranceMatch </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="EasyInsuranceMatch - Insurance Company Website Template" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('frontend/css/jpreloader.css') }}" rel="stylesheet" type="text/css">
    <link id="bootstrap" href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- color scheme -->
    <link href="{{ asset('frontend/css/coloring.css') }}" rel="stylesheet" type="text/css" />

</head>
 
<body>
    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{ url('/')}}">
                                        <img alt="" class="logo" src="{{ asset('frontend/images/logo.png') }}" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li>
                                        <a href="{{ url('/')}}">Home<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about')}}">About Us<span></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Insurances<span></span></a>
                                        <ul>
                                            <li><a href="{{url('/lifeinsurance')}}">Life Insurance</a></li>
                                            <li><a href="{{url('/homeinsurance')}}">Home Insurance</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/blog')}}">Blogs<span></span></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact')}}">Contact Us<span></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="h-phone"><span>Need&nbsp;Help?</span><i
                                        class="fa fa-phone id-color-secondary"></i> 1 200 300 9000</div>
                                <span id="menu-btn"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->