@extends('frontend.layout.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/Vibramade12.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Mobile Application Development</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Mobile Application Development</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">For more than a decade, we have been creating high-performance, feature-packed web
                        and mobile applications for all major platforms including Android and iOS.As an expert in
                        software development, Vibramade can create an app that will meet all your business and
                        industry needs by combining technical proficiency with ease of use. </p>

                    <p class="mb-30">In order to decide whether to build an Android app or iOS app, first, our expert
                        mobile app developers consider 5 main factors - your audience, product timeline, required app
                        features, the budget of the app, maintenance of the app, and your revenue goals. Once the first
                        version of the app is established and successfully launched then we can go ahead with the next
                        mobile app platform.</p>

                    <div class="row">
                        <div class="col-md-12">
                            <h6>About iOS</h6>
                            <p>iOS application development makes mobile applications for Apple hardware, including
                                iPhone, iPad and iPod Touch. The software is written in the Swift programming language
                                or Objective-C and then deployed to the App Store for users to download.</p>
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
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Modules</h6>
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Core iOS </a></li>
                                    <li><a href="#"> Advance iOS</a></li>
                                    <li><a href="#"> Android</a></li>
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
                    <div class="section-title">Mobile Application Development</div>
                </div>
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">What does Mobile App Development Require?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Mobile app development involves the creation of software
                                        applications that run on various types of mobile devices. To develop a mobile
                                        app, you need to contract with a firm that has experience with all types of
                                        mobile apps and employs a proven development approach.
                                    </div>
                                    <div class="text">Mobile app developers generate a detailed development plan, create
                                        a user-friendly interface, construct all necessary installable software bundles,
                                        and implement appropriate backend services to support the app. The app itself is
                                        rigorously tested throughout the development process.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What Are the Different Types of Mobile Apps You Can Develop?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Mobile apps can be developed for both Android and iOS phones and
                                        tablets. Consumers, employees, and vendors can target apps for use.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Can You Build Apps for Both iOS and Android?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">At Vibramade, we build apps that support both iOS and Android
                                        platforms.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What Platform Should We Target to Launch Our Application: Android or
                                iOS?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">In years past, companies may have chosen to develop apps that
                                        support only a single platform. Today, both Android and iOS platforms have a
                                        significant market share, so most companies choose to develop apps that work on
                                        both platforms.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Can You Work With Us if We Don’t Have a Fully Formed Idea for Our App?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The developers at Vibramade are used to working with
                                        companies whose app ideas are at different stages of development. We work with
                                        you to convert your ideas into fully functional mobile apps.
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
