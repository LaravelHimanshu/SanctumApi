@extends('frontend.layouts.main')

@section('main-container')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section id="subheader" class="text-light" data-bgimage="url({{ asset('frontend/images/subheader3.jpg') }} ) top">
                
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">

                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>About Us</h1>
                                <p>This is how our company began.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" data-bgcolor="#ffffff">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <span class="p-title invert">Welcome</span><br>
                            <h2>Your partner for insurance</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> At vero eos et accusamus et
                            iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                            sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>

                        <div class="col-md-6 offset-md-1">
                            <div class="de-images">
                                <img class="di-small-2" src="images/d2.jpg" alt="" />
                                <img class="di-big img-fluid" src="{{ asset('frontend/images/d1.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-size: cover;" class="about-probile pt-0">
                <div class="container" style="background-size: cover;">
                    <div class="row align-items-center" style="background-size: cover;">
                        <div class="col-lg-6 d-none d-lg-block d-xl-block text-center" style="background-size: cover;">
                            <img class="relative img-fluid" src="{{ asset('frontend/images/3.jpg') }}" alt="">
                        </div>

                        <div class="col-lg-5 offset-md-1 " style="background-size: cover;">
                            <span class="p-title invert text-light">Profile</span><br>
                            <h2>
                                With EasyInsuranceMatch, no more hassles &amp; no more worries
                            </h2>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                        role="tab" aria-controls="pills-home" aria-selected="true">Online Payment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">Quick Claims</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">14-day
                                        Guarantee</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent" style="background-size: cover;">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" style="background-size: cover;">
                                    <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est
                                        duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud
                                        exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa
                                        eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
                                        minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation
                                        irure Lorem incididunt nostrud.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" style="background-size: cover;">
                                    <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit
                                        ex. Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do.
                                        Aliquip ex eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui
                                        minim sit magna Lorem id et dolore velit Lorem amet exercitation duis deserunt.
                                        Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor
                                        duis.</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" style="background-size: cover;">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip
                                        dolor aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt
                                        reprehenderit laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure
                                        ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
                                        aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit
                                        cupidatat esse irure officia elit do ipsum ullamco Lorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="section-highlight" style="background-size: cover;" data-bgcolor="#e8e8f1">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6" style="background-size: cover;">
                            <span class="p-title invert text-light">About</span><br>
                            <h2>
                                Save time and money on <br>your auto insurance
                            </h2>
                        </div>
                        <div class="col-md-6" style="background-size: cover;">
                            <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim
                                sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation
                                proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit
                                cupidatat in veniam ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat
                                culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt nostrud.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-size: cover; ">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6 offset-sm-3" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <span class="p-title invert">Our Services</span><br>
                                <h2>We Take Care of You</h2>
                                <div class="small-border" style="background-size: cover;"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="f-box f-border f-icon-left f-icon-rounded f-box-s1"
                                style="background-size: cover;">
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
                            <div class="row" style="background-size: cover;">
                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay="0s"
                                    style="background-size: cover; visibility: visible; animation-delay: 0s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="4500" data-speed="3000">4500</span></h3>
                                        <h5 class="id-color">Home Protected</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay=".25s"
                                    style="background-size: cover; visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="16" data-speed="3000">16</span>k</h3>
                                        <h5 class="id-color">People Saved</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay=".4s"
                                    style="background-size: cover; visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="4" data-speed="3000">4</span>m</h3>
                                        <h5 class="id-color">Money Saved</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay=".6s"
                                    style="background-size: cover; visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="52" data-speed="3000">52</span>k</h3>
                                        <h5 class="id-color">Contract Signed</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay=".8s"
                                    style="background-size: cover; visibility: visible; animation-delay: 0.8s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="100" data-speed="3000">100</span>+</h3>
                                        <h5 class="id-color">Countries</h5>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4 col-md-6 wow fadeInRight mb30 animated" data-wow-delay="1s"
                                    style="background-size: cover; visibility: visible; animation-delay: 1s; animation-name: fadeInRight;">
                                    <div class="de_count" style="background-size: cover;">
                                        <h3><span class="timer" data-to="2" data-speed="3000">2</span>k</h3>
                                        <h5 class="id-color">Staff Member</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="bg-color text-light" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6" style="background-size: cover;">
                            <h2 class="call-us-title"><span class="id-color-secondary">Call us</span>
                                <span>
                                    for further information. EasyInsuranceMatchcustomer care is here to help you
                                </span> <span class="id-color-secondary">anytime</span>.
                            </h2>
                            <p class="lead">We're available for 24 hours!</p>
                        </div>

                        <div class="col-md-6 text-lg-center text-sm-center" style="background-size: cover;">
                            <div class="phone-num-big mb-5" style="background-size: cover;">
                                <i class="fa fa-phone id-color-secondary"></i>
                                <span class="pnb-text">
                                    Call Us Now
                                </span>
                                <span class="pnb-num">
                                    1 200 333 800
                                </span>
                            </div>
                            <a href="#" class="btn-custom invert  ">Contact Us</a>
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
                                        <img alt="" src="{{ asset('frontend/images/n1.jpg') }}


                                        ">
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

            <section data-bgimage="url({{ asset('frontend/images/family-bg.jpg) top" class="text-light') }}">
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