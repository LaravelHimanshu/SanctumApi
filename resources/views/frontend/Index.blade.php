@extends('frontend.layouts.main')

@section('main-container')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section aria-label="section" class="banner-wrapper no-top no-bottom text-light"
                data-bgimage="url({{ asset('frontend/images/banner.jpg') }}) center"
                style="background: url('images/banner.jpg') center top / cover;">
                <div class="v-center" style="background-size: cover;">
                    <div class="container" style="background-size: cover;">
                        <div class="row align-items-center" style="background-size: cover;">
                            <div class="col-lg-6 wow fadeInRight animated" data-wow-delay=".5s"
                                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <div>
                                    <h2>Compare </h2>
                                    <h2>
                                        <span class="txt-rotate" data-period="2000"
                                            data-rotate='[ "Free.", "Fair.", "Fast." ]'></span>
                                    </h2>
                                </div>
                                <h1>Insurance Quotes.<br>
                                    No Obligation. </h1>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis
                                    anim sunt officia.
                                </p>
                                <div class="spacer-20" style="background-size: cover;"></div>
                                <a class="btn-custom invert" href="features.html">Get a Quote</a>
                                <a class="btn-custom ml-2" href="download.html">Learn More</a>
                                <div class="mb-sm-30" style="background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-highlight" class="relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <span class="p-title invert">Welcome</span><br>
                            <h2>
                                Learn more about<br>EasyInsuranceMatch
                            </h2>
                            <div class="small-border sm-left"></div>
                            <p>
                                Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis
                                anim sunt officia.
                            </p>
                            <p>
                                Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam
                                ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis.
                                Occaecat sit eu exercitation irure Lorem incididunt nostrud.
                            </p>
                            <p>
                                Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam
                                ad.
                            </p>
                            <div class="spacer-20" style="background-size: cover;"></div>
                            <a class="btn-custom mb-5 d-inline-block" href="features.html">Get a Quote</a>&nbsp;
                        </div>
                        <div class="col-lg-6  text-center" style="background-size: cover;">
                            <img class="relative img-fluid" src="{{ asset('frontend/images/3.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </section>

            <section data-bgcolor="#F2F6FE" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6 offset-sm-3" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <span class="p-title invert">Our Services</span><br>
                                <a href="Services.html">
                                    <h2>We Take Care of You</h2>
                                </a>
                                <div class="small-border" style="background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="icofont-group bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Life Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="icofont-home bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Home Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="icofont-car bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Auto Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-sm-30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="icofont-heart-beat bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Health Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-sm-30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="icofont-briefcase bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Business Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-sm-30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-circle" style="background-size: cover;">
                                <a href="Services-detail.html">
                                    <i class="fa fa-plane bg-color text-light"></i>
                                </a>
                                <div class="fb-text" style="background-size: cover;">
                                    <a href="Services-detail.html">
                                        <h4>Travel Insurance</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div style="background-size: cover;">
                        </div>
                    </div>
                </div>
            </section>
 
            <section aria-label="section" data-bgimage="url({{ asset('frontend/images/boy-fly.jpg') }} top"
                style="background: url(http://127.0.0.1:8000/frontend/images/boy-fly.jpg) center top / cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-md-5 col-lg-6" style="background-size: cover;"></div>

                        <div class="col-md-6 col-lg-5" style="background-size: cover;">
                            <span class="p-title invert">Why Choose Us</span><br>
                            <h2>Trushworthy Company</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> At vero eos et accusamus et
                            iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                            sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<p></p>
                        </div>
                    </div>

                </div>
            </section>

            <section id="section-steps">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="p-title invert text-light">Steps</span><br>
                                <h2>How Insurance Works</h2>
                                <div class="small-border"></div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                            <div class="feature-box style-4 text-center">
                                <a href="#"><i class="bg-color text-light i-boxed fa fa-pencil"></i></a>
                                <div class="text">
                                    <a href="#">
                                        <h4>Fill in Your Details</h4>
                                    </a>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <span class="wm">1</span>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                            <div class="feature-box style-4 text-center">
                                <a href="#"><i class="bg-color text-light i-boxed fa fa-check"></i></a>
                                <div class="text">
                                    <a href="#">
                                        <h4>Compare and Choose a Plan</h4>
                                    </a>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <span class="wm">2</span>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                            <div class="feature-box style-4 text-center">
                                <a href="#"><i class="bg-color text-light i-boxed fa fa-dollar"></i></a>
                                <div class="text">
                                    <a href="#">
                                        <h4>Make Payment and Sit Back</h4>
                                    </a>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <span class="wm">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-fun-facts" data-bgcolor="#F2F6FE" class="pt60 pb60">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title invert">Fun facts</span><br>
                            <h2>
                                Why you should compare insurance online
                            </h2>
                            <div class="small-border sm-left"></div>
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim
                                sunt.</p>
                        </div>

                        <div class="col-md-7">
                            <div class="spacer-30" style="background-size: cover;"></div>
                            <div class="row">
                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="0s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="4500" data-speed="3000">0</span></h3>
                                        <h5 class="id-color">Home Protected</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".25s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="16" data-speed="3000">0</span>k</h3>
                                        <h5 class="id-color">People Saved</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".4s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="4" data-speed="3000">0</span>m</h3>
                                        <h5 class="id-color">Money Saved</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".6s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="52" data-speed="3000">0</span>k</h3>
                                        <h5 class="id-color">Contract Signed</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay=".8s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="100" data-speed="3000">0</span>+</h3>
                                        <h5 class="id-color">Countries</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30" data-wow-delay="1s">
                                    <div class="de_count">
                                        <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                        <h5 class="id-color">Staff Member</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="p-title invert">Latest</span><br>
                                <h2>Customer Reviews</h2>
                                <div class="small-border"></div>
                            </div>
                            <div class="owl-carousel owl-theme" id="testimonial-carousel">
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Trustworthy insurance</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p1.jpg') }}"
                                                        alt=""></span><span class="text-dark">John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Quality insurance service</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p2.jpg') }}"
                                                        alt=""></span><span class="text-dark">Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Top companies listed</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p3.jpg') }}"
                                                        alt=""></span><span class="text-dark">Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Great services</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p4.jpg') }}"
                                                        alt=""></span><span class="text-dark">Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Easy to claim</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p5.jpg') }}"
                                                        alt=""></span><span class="text-dark">John, Pixar Studio</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Excellent support</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p6.jpg') }}"
                                                        alt=""></span><span class="text-dark">Sarah, Microsoft</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Reliable insurance</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p7.jpg') }}"
                                                        alt=""></span><span class="text-dark">Michael, Apple</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2 review">
                                        <blockquote>
                                            <i class="fa fa-quote-left id-color-secondary"></i>
                                            <h3>Five-star services</h3>
                                            <p>Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                nostrud.</p>
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p8.jpg') }}"
                                                        alt=""></span><span class="text-dark">Thomas, Samsung</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section data-bgcolor="#F2F6FE" style="background-size: cover;">
                <div class="container" style="background-size: cover;">

                    <div class="text-center" style="background-size: cover;">
                        <span class="p-title invert">EasyInsuranceMatch</span><br>
                        <h2>What Makes Us Different?</h2>
                        <div class="small-border" style="background-size: cover;"></div>
                    </div>

                    <div class="row mb-5" style="background-size: cover;">
                        <div class="col-lg-4 col-md-12" style="background-size: cover;">
                            <div class="feature-box f-boxed style-3" style="background-size: cover;">
                                <i class="bg-color i-boxed fa fa-user"></i>
                                <div class="text" style="background-size: cover;">
                                    <h4>Compare Yourself</h4>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <i class="wm fa fa-user"></i>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12" style="background-size: cover;">
                            <div class="feature-box f-boxed style-3" style="background-size: cover;">
                                <i class="bg-color i-boxed fa fa-money"></i>
                                <div class="text" style="background-size: cover;">
                                    <h4>Economical Pricing</h4>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <i class="wm fa fa-money"></i>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12" style="background-size: cover;">
                            <div class="feature-box f-boxed style-3" style="background-size: cover;">
                                <i class="bg-color i-boxed fa fa-heart-o "></i>
                                <div class="text" style="background-size: cover;">
                                    <h4>We Truly Care</h4>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem.
                                </div>
                                <i class="wm fa fa-heart-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-lg-12  text-center" style="background-size: cover;">
                            <h3 class="text-uppercase mb-2">Compare Insurance</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="col-md-12" style="background-size: cover;">
                            <div class="de-flex d-insureance-blocks" style="background-size: cover;">
                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="icofont-group"></i>
                                    <span>Life<br>Insurance</span>
                                </a>

                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="icofont-home"></i>
                                    <span>Home<br>Insurance</span>
                                </a>

                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="icofont-car"></i>
                                    <span>Auto<br>Insurance</span>
                                </a>

                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="icofont-heart-beat"></i>
                                    <span>Health<br>Insurance</span>
                                </a>

                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="icofont-briefcase"></i>
                                    <span>Business<br>Insurance</span>
                                </a>

                                <a href="Services-detail.html" class="icon-box s2 rounded">
                                    <i class="fa fa-plane"></i>
                                    <span>Travel<br>Insurance</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section id="section-news">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="p-title invert">Get Update</span><br>
                                <h2>Latest News Update </h2>
                                <div class="small-border"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <span class="p-tagline">Tips &amp; Tricks</span>
                                    <div class="post-image">
                                        <img alt="" src="{{ asset('frontend/images/n1.jpg') }}">
                                    </div>
                                    <div class="post-text">
                                        <h4><a href="Blogs-Details.html">Tips Buying Insurance For The First
                                                Time<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img alt="" src="{{ asset('frontend/images/n2.jpg') }}">
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Tips &amp; Tricks</span>
                                        <h4><a href="Blogs-Details.html">Tips For Homeowners Insurance<span></span></a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30">
                            <div class="bloglist item">
                                <div class="post-content">
                                    <div class="post-image">
                                        <img alt="" src="{{ asset('frontend/images/n3.jpg') }}">
                                    </div>
                                    <div class="post-text">
                                        <span class="p-tagline">Tips &amp; Tricks</span>
                                        <h4><a href="Blogs-Details.html">Understanding Your Insurance
                                                Policy<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex  mt-4">
                        <a class="btn-custom mx-auto" href="features.html">View more</a>&nbsp;
                    </div>
                </div>
            </section>

            <section data-bgimage="url({{ asset('frontend/images/family-bg.jpg') }}) top" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInRight" data-wow-delay=".2s">
                            <h2>Call us for further information. EasyInsuranceMatch customer care is here to help you
                                anytime.</h2>
                            <p class="lead id-color-secondary">We're available for 24 hours!</p>
                        </div>

                        <div class="col-md-6 text-lg-center text-sm-center wow fadeInRight" data-wow-delay=".4s">
                            <div class="phone-num-big">
                                <i class="fa fa-phone"></i>
                                <span class="pnb-text id-color-secondary">
                                    Call Us Now
                                </span>
                                <span class="pnb-num">
                                    1 200 333 800
                                </span>
                            </div>
                            <a href="#" class="btn-custom invert med">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-12 text-center" style="background-size: cover;">
                            <span class="p-title invert">Frequently</span><br>
                            <h2>Asked Qustions</h2>
                            <div class="small-border" style="background-size: cover;"></div>
                        </div>

                        <div class="col-md-12" style="background-size: cover;">
                            <!-- Accordion -->
                            <div id="accordion-1" class="accordion" style="background-size: cover;">

                                <!-- Accordion item 1 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-a1" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a1"
                                                aria-expanded="false" aria-controls="collapse-a1"
                                                class="d-block position-relative text-dark collapsible-link py-2">When
                                                is time to update my coverage?</a></h6>
                                    </div>
                                    <div id="collapse-a1" aria-labelledby="heading-a1" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 2 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-a2" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a2"
                                                aria-expanded="false" aria-controls="collapse-a2"
                                                class="d-block position-relative collapsed text-dark collapsible-link py-2">How
                                                often should I review my life insurance needs?</a></h6>
                                    </div>
                                    <div id="collapse-a2" aria-labelledby="heading-a2" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 3 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-a3" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-a3"
                                                aria-expanded="false" aria-controls="collapse-a3"
                                                class="d-block position-relative collapsed text-dark collapsible-link py-2">What
                                                happen to my insurance if I stop paying?</a></h6>
                                    </div>
                                    <div id="collapse-a3" aria-labelledby="heading-a3" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Accordion item 4 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-b1" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b1"
                                                aria-expanded="false" aria-controls="collapse-b1"
                                                class="d-block position-relative text-dark collapsible-link py-2">How
                                                much life insurance do i need?</a></h6>
                                    </div>
                                    <div id="collapse-b1" aria-labelledby="heading-b1" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 5 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-b2" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b2"
                                                aria-expanded="false" aria-controls="collapse-b2"
                                                class="d-block position-relative collapsed text-dark collapsible-link py-2">What
                                                makes this company different form other?</a></h6>
                                    </div>
                                    <div id="collapse-b2" aria-labelledby="heading-b2" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Accordion item 6 -->
                                <div class="card" style="background-size: cover;">
                                    <div id="heading-b3" class="card-header bg-white shadow-sm border-0"
                                        style="background-size: cover;">
                                        <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapse-b3"
                                                aria-expanded="false" aria-controls="collapse-b3"
                                                class="d-block position-relative collapsed text-dark collapsible-link py-2">Do
                                                I need a life insurance policy?</a></h6>
                                    </div>
                                    <div id="collapse-b3" aria-labelledby="heading-b3" data-parent="#accordion-1"
                                        class="collapse" style="background-size: cover;">
                                        <div class="card-body p-4" style="background-size: cover;">
                                            <p class="m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                                                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

@endsection       