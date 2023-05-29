@extends('frontend.layout.app')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/web.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Website Development</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Website Development</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">All our web design projects are directly handled by the senior creative team. The
                        team includes the Art Director, Creative Director, and Copywriter – all of whom have over 10
                        years of expertise in building world-class websites. Our custom web development services include
                        both front-end and back-end development. Whether it is enhancing an existing application or
                        architecting an enterprise application, our developers are up for the challenge.</p>

                    <p class="mb-30">Regular and timely maintenance of websites is a critical task that many ignore. Not
                        when you have a website maintenance agreement with us. We make sure your website is updated with
                        the latest content and your search engine ranking stays on top.</p>

                    <div class="row">
                        <div class="col-md-12">
                            <h6>Web Development</h6>
                            <p>Web development is the phase after web designing; even after the design of your business
                                website is ready, still, If your business needs a digital platform, you must develop a
                                website. Some developers create it and make this website functional. In a concise form,
                                web development and web designing rely on each other, which is equally crucial for your
                                successful business. This course can be done by anyone from standard 10th pass out to
                                postgraduate degree holders and those who are graduating in the field of media for them,
                                and it is likely to be a very important subject. For this field, there are lots of
                                opportunities in software companies.</p>
                        </div>
                        <div class="col-md-12">
                            <p>In web development, every website function is developed according to its task, which can
                                then be used in surfing the web. The web developer needs to be a website owner, so there
                                is a high demand for web developers in this decade and the future. Thus this course can
                                also be considered a canonical skill enhancement that allows students to increase their
                                technical skills. We are also offering a web design course you can get more details on
                                our website.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"><a href="{{route('contact')}}"><span>CONTACT</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="news2-sidebar row">
                        <div class="col-md-12">
                            <div class="widget search">
                                <form>
                                    <input type="text" name="search" placeholder="Type here ...">
                                    <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Modules</h6>
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Web Front end Coding</a></li>
                                    <li><a href="#">Master in Web Back end Developing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">We are a leading software development company that offers top-rated Software
                        Development Services due to our vast experience, team of skilled professionals, key business
                        insights, and a dedicated working process</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a
                                href="tel:855-100-4444">{{ Config::get( 'constants.PHONE' ) }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        @foreach($course as $key => $value)
                            <div class="pricing-card">
                                <img src="{{$value['image']}}" alt="full-stack" style="height: 196px;">
                                <div class="desc">
                                    <div class="name">{{$value['name']}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">F.A.Qs</div>
                    <div class="section-title">Website Development</div>
                </div>
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">What kinds of clients do you work with?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We focus on small to mid-market companies as well as non-profits
                                        but can deliver good value to organizations of just about any size. We have the
                                        experience and expertise to work with large enterprises but can also deliver
                                        world-class services at price points affordable by small companies.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How do you know that my new website is working as required?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We perform a number of pre-launch tests and other procedures to
                                        make sure that your website is performing as promised and meets industry
                                        standards. Among other things we test to make sure that your site renders
                                        properly in all the major browsers, loads within acceptable limits and works
                                        properly with all plugins and 3rd party integrations.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What if there’s a problem with my website? Will you fix it?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Certainly! If it’s within our twelve month support agreement. And
                                        often, even past that period. It’s a matter of pride! Our only exception to this
                                        is if the website has been altered in any way by persons not employed or
                                        authorized by us.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
