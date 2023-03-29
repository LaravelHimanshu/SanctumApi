@extends('frontend.layouts.main')

@section('main-container')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section aria-label="section" class="banner-wrapper quote_banner no-top no-bottom  "
                data-bgimage="url({{ asset('frontend/images/formal.jpg')}}) top right"
                style="background: url('images/formal.jpg') right top / cover;">
                <div class="v-center" style="background-size: cover;">
                    <div class="container" style="background-size: cover;">
                        <div class="row align-items-center" style="background-size: cover;">
                            <div class="col-lg-5 offset-md-7 wow fadeInRight animated" data-wow-delay=".5s"
                                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <div class="box-rounded img-shadow" data-bgcolor="rgba(255,255,255,.9)"
                                    style="background-color: rgba(255, 255, 255, 0.9); background-size: cover;">
                                    <div class="spacer-10" style="background-size: cover;"></div>
                                    <h2>
                                        Get Quote for Insurance
                                    </h2>

                                    <div class="quotes-wrapper">
                                        <div id="svg_wrap"></div>
                                        <section class="steps_wrapper">
                                            <p>What's Your Zip Code?</p>
                                            <input type="text" placeholder=" Zip Code " />
                                        </section>

                                        <section class="steps_wrapper">
                                            <p>Tell us about yourself<br>
                                                Select all that apply to you
                                            </p>

                                            <ul>
                                                <li>
                                                    <input type="radio" id="f-option" name="selector">
                                                    <label for="f-option">I want to cover burial expenses</label>

                                                    <div class="check"></div>
                                                </li>

                                                <li>
                                                    <input type="radio" id="s-option" name="selector">
                                                    <label for="s-option">I want to leave a legacy</label>

                                                    <div class="check">
                                                        <div class="inside"></div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <input type="radio" id="t-option" name="selector">
                                                    <label for="t-option">I want to invest my money</label>

                                                    <div class="check">
                                                        <div class="inside"></div>
                                                    </div>
                                                </li>
                                            </ul>

                                        </section>

                                        <section class="steps_wrapper">
                                            <p>What's Your Estimated Desired Coverage?
                                            </p>

                                            <select data-label="Please select">
                                                <option disabled="disabled" selected="selected" value="">Please select
                                                </option>
                                                <option value="$5,000">$5,000</option>
                                                <option value="$10,000">$10,000</option>
                                                <option value="$15,000">$15,000</option>
                                                <option value="$20,000">$20,000</option>
                                                <option value="$30,000">$30,000</option>
                                                <option value="$40,000">$40,000</option>
                                                <option value="$50,000">$50,000</option>
                                                <option value="$60,000">$60,000</option>
                                                <option value="$70,000">$70,000</option>
                                                <option value="$80,000">$80,000</option>
                                                <option value="$90,000">$90,000</option>
                                                <option value="$100,000+">$100,000+</option>
                                            </select>

                                        </section>

                                        <section class="steps_wrapper">
                                            <p>What's Your Street Address?
                                            </p>
                                            <input type="text" placeholder=" Street Address " />
                                        </section>

                                        <section class="steps_wrapper">
                                            <p>What's Your Full Name?
                                            </p>

                                            <input type="text" placeholder=" First Name " />
                                            <input type="text" placeholder=" Last Name " />

                                        </section>

                                        <div class="d-flex justify-content-center mt-4">
                                            <button class="btn btn-custom" id="prev">&larr; Previous</button>
                                            <button class="btn btn-custom" id="next">Next &rarr;</button>
                                            <button class="btn button btn-custom invert" id="submit">Submit</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-highlight" class="relative" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6" style="background-size: cover;">
                            <span class="p-title invert">Welcome</span><br>
                            <h2>
                                Learn more about<br>Insurance Quotes
                            </h2>
                            <div class="small-border sm-left" style="background-size: cover;"></div>
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
                            <p>
                                Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam
                                ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa excepteur quis.
                                Occaecat sit eu exercitation irure Lorem incididunt nostrud.
                            </p>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block d-xl-block text-center" style="background-size: cover;">
                            <img class="relative img-fluid" src="{{ asset('frontend/images/3.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
            </section>

            <section id="section-about-us-2" class="no-padding" data-bgcolor="#F2F6FE"
                style="background-color: rgb(242, 246, 254); background-size: cover;">
                <div class="image-container col-md-6 pull-left" data-bgimage="url({{ asset('frontend/images/home.jpg') }}) center"
                    style="background: url(&quot;images/home.jpg&quot;) center center / cover;"></div>

                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="inner-padding" style="background-size: cover;">
                            <div class="col-md-6 offset-md-7" data-animation="fadeInRight" data-delay="200"
                                style="background-size: cover;">
                                <span class="p-title invert">EasyInsuranceMatch </span><br>
                                <h2>
                                    Plan for the future<br>and live your life now
                                </h2>
                                <div class="small-border sm-left" style="background-size: cover;"></div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="background-size: cover;"></div>

            </section>

            <section id="section-about-us-2" class="no-padding" data-bgcolor="#F2F6FE"
                style="background-color: rgb(242, 246, 254); background-size: cover;">
                <div class="image-container col-md-6 pos-right" data-bgimage="url({{ asset('frontend/images/mother.jpg') }} ) center"
                    style="background: url(&quot;images/mother.jpg&quot;) center center / cover;"></div>

                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="inner-padding pos-left" style="background-size: cover;">
                            <div class="col-md-6" data-animation="fadeInRight" data-delay="200"
                                style="background-size: cover;">
                                <span class="p-title invert">EasyInsuranceMatch </span><br>
                                <h2>
                                    Protection you<br>and your family
                                </h2>
                                <div class="small-border sm-left" style="background-size: cover;"></div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea
                                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum
                                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="background-size: cover;"></div>

            </section>

            <section style="background-size: cover; ">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-6 offset-sm-3" style="background-size: cover;">
                            <div class="text-center" style="background-size: cover;">
                                <span class="p-title invert">Check Other Services</span><br>
                                <a href="Services-detail.html">
                                    <h2>We Take Care of You</h2>
                                </a>
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

            <section id="section-testimonial" data-bgcolor="#F2F6FE">
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p1.jpg') }}" alt=""></span><span
                                                    class="text-dark">John, Pixar Studio</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p2.jpg') }}" alt=""></span><span
                                                    class="text-dark">Sarah, Microsoft</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p3.jpg') }}" alt=""></span><span
                                                    class="text-dark">Michael, Apple</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p4.jpg') }}" alt=""></span><span
                                                    class="text-dark">Thomas, Samsung</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p5.jpg') }}" alt=""></span><span
                                                    class="text-dark">John, Pixar Studio</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p6.jpg') }}" alt=""></span><span
                                                    class="text-dark">Sarah, Microsoft</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p7.jpg') }}" alt=""></span><span
                                                    class="text-dark">Michael, Apple</span>
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
                                            <div class="de_testi_by"><span><img src="{{ asset('frontend/images/p8.jpg') }}" alt=""></span><span
                                                    class="text-dark">Thomas, Samsung</span>
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