@extends('frontend.layouts.main')

@section('main-container')

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url({{ asset('frontend/images/subheader2.jpg)') }} top"
                style="background: url(&quot;images/subheader2.jpg&quot;) center top / cover;">
                <div class="center-y relative text-center" style="background-size: cover;">
                    <div class="container" style="background-size: cover;">
                        <div class="row" style="background-size: cover;">
                            <div class="col text-center" style="background-size: cover;">
                                <div class="spacer-single" style="background-size: cover;"></div>
                                <h1>Latest News</h1>
                                <p>Anim pariatur cliche reprehenderit </p>
                            </div>
                            <div class="clearfix" style="background-size: cover;"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n1.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
                                        <span class="p-tagline">Tips &amp; Tricks</span>
                                        <h4><a href="Blogs-Details.html">Tips Buying Insurance For The First
                                                Time<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n2.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
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

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n3.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
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

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n4.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
                                        <span class="p-tagline">Company</span>
                                        <h4><a href="Blogs-Details.html">The Top 5 Insurance Companies<span></span></a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n5.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
                                        <span class="p-tagline">Company</span>
                                        <h4><a href="Blogs-Details.html">Revolutionizing Customer's
                                                Insurance<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30" style="background-size: cover;">
                            <div class="bloglist item" style="background-size: cover;">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="post-image" style="background-size: cover;">
                                        <img alt="" src="{{ asset('frontend/images/n6.jpg') }}">
                                    </div>
                                    <div class="post-text" style="background-size: cover;">
                                        <span class="p-tagline">Company</span>
                                        <h4><a href="Blogs-Details.html">What's Ahead for European Health
                                                Insurance<span></span></a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <span class="p-date">October 28, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-single" style="background-size: cover;"></div>

                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>

                    </div>
                </div>
            </section>

           

          
            <section data-bgimage="url({{ asset('frontend/images/family-bg.jpg')}}) top" class="text-light">
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