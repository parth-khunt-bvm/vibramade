@extends('frontend.layout.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@section('content')

    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            @foreach($silder as $key => $value)
                <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ $value['image']}}">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h4>{{ $value['line1'] }}</h4>
                                    <h1>{{ $value['line2'] }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <!-- slider reservation -->
        <div class="reservation">
            <a href="#">
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="flaticon-call"></i>
                </div>
                <div class="call"><span>{{ Config::get( 'constants.PHONE' ) }}</span>
                    <br>{{ Config::get( 'constants.PROJECT_NAME' ) }}</div>
            </a>
        </div>
    </header>

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">WE ARE VIBRAMADE</div>
                    <div class="section-title">Web Development Company</div>
                    <p>Vibramade is a globally accepted IT Solutions Provider in the forefront of Digital Transformation
                        & Emerging Technologies.</p>
                    <p>Vibramade has empowered both the public and private sectors with innovative IT Solutions and has
                        gathered a team of experts from all walks of applied sciences to work together delivering
                        organizational intelligence.</p>
                    <p>Vibramade vision is focused on innovating technology and enriching it with user-friendly
                        experiences. We firmly believe in integrating our skills with our client’s needs to achieve the
                        best results</p>
                    <p>Our services include: IT Consulting, System Integration Services, Software Development,
                        E-Governance Solutions, Mobility Solutions and more.</p>
                    <p>Performance matters, and with a proprietary performance measurement platform, Vibramade works to
                        give you the lead in your competition by providing solutions covering you from top to
                        bottom.</p>
                    <!-- call -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>{{ Config::get( 'constants.PROJECT_NAME' ) }}</p> <a
                                href="#">{{ Config::get( 'constants.PHONE' ) }}</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <img src="frontend/img/Vibramade4.png" alt="" class="mt-175 mb-30">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>VIBRAMADE</span></div>
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">We are a leading software development company that offers top-rated Software
                        Development Services due to our vast experience, team of skilled professionals, key business
                        insights, and a dedicated working process</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a
                                href="#">{{ Config::get( 'constants.PHONE' ) }}</a>
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

    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Services</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class=""><i class='fa fa-code'></i></span>
                        <h5>Web Development</h5>
                        <p>We are creating elite and responsive websites with a cost-effective and flexible approach with our excellent technology.</p>
                        <div class="facility-shape"><span class="flaticon-world"></span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class=""><i class='fa fa-wordpress'></i></span>
                        <h5>WordPress Development</h5>
                        <p>We specializing in custom themes, plugins, support, security, Multisite, BuddyPress, and other feature of WP</p>
                        <div class="facility-shape"><span class="flaticon-swimming"></span></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-paper-plane"></span>
                        <h5>Apps Development</h5>
                        <p>For industry-leading Android app development services that align with your business purposes excellent mobile apps development.</p>
                        <div class="facility-shape"><span class="flaticon-bed"></span></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class=""><i class='fa fa-etsy'></i></span>
                        <h5>E-Commerece Develoment</h5>
                        <p>Deliver users an enjoyable and secure online shopping experience with our E-commerce solutions.</p>
                        <div class="facility-shape"><span class="flaticon-car"></span></div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class=""><i class='fa fa-external-link'></i></span>
                        <h5>Website Maintenance</h5>
                        <p>Website maintenance is the act of regularly checking your website for issues and mistakes and keeping it updated.</p>
                        <div class="facility-shape"><span class="flaticon-wifi"></span></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>SEO Optimization</h5>
                        <p>With over 5 years of SEO experience, we have the knowledge and tools to increase your site’s organic rankings.</p>
                        <div class="facility-shape"><span class="flaticon-breakfast"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="frontend/img/img1.jpg"
             data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <h5>As a leading web development firm, we provide experienced consultants, designers, and
                            developers to take your online presence to the next level. </h5>
                        <h5>In addition to creating robust, scalable, and secure enterprise web-based experiences,
                            Vibramade can also help organizations with migrations, upgrades, and integration.</h5>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h4>Get Started</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="{{ route('save-contact-details') }}" method="post"
                                      class="form1 clearfix">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Name:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input" name="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Email:</label>
                                                <div class="input1_inner">
                                                    <input type="email" class="form-control input" name="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Phone:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input" name="phone" placeholder="Phone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Subject:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input" name="subject" placeholder="Subject" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Message:</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input" name="message" placeholder="Message" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
