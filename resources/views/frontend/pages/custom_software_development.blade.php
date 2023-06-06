@extends('frontend.layout.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/softwa.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Custom Software Development</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Custom Software Development</div>
                </div>
                <div class="col-md-8">
                    <p>We offer custom software development across industry verticals..</p>
                    <p class="mb-30">At Vibramade, we utilize our decades of experience in custom software
                        development to develop and deploy complex technology solutions to our customers worldwide. Our
                        agile development methodology, combined with our design thinking and strategic consulting,
                        enables customers to solve their critical digital challenges on time, and within their
                        budget.</p>

                    <p class="mb-30">Our custom software development team is well-experienced in a wide array of
                        technologies and tools.
                        We also upgrade ourselves constantly to keep pace with the changing technology landscape.</p>
                    <p>In today's highly volatile and competitive market landscape, custom software development helps
                        you to achieve the desired business proficiency. Vibramade is a custom software development
                        company that delivers you just the right software tailored to your business needs.</p>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Why are We the Most Trusted Custom Software Development Company?</h6>
                            <h6>Quality product</h6>
                            <p>At Vibramade, we first build an MVP to test the efficiency of your product. Based on
                                the initial feedback, we keep making iterations in the product till it exactly aligns
                                with what you had desired.</p>
                            <h6>Quick development</h6>
                            <p>Our team with its rich expertise and diverse experience optimizes all processes and
                                employs the best agile practices, leading to a reduction in custom software application
                                development time by approximately 50%.</p>
                            <h6>Latest technology stack</h6>
                            <p>We cover the complete range of technologies and programming languages that you may need
                                for your project from system architecture to frontend and backend development and
                                post-delivery maintenance.</p>
                            <h6>Custom software development services</h6>
                            <p>Selecting a company to create a software application for your business can be a
                                challenge. You’ll need to find acceptable candidates and hire a company or professional
                                that promises the right price and service level. </p>
                            <p>Typically, you’ll meet with prospective software development partners to ensure
                                everyone’s on the same page about what’s needed and the total amount of work that’s
                                required to create the custom solution. Next, your candidates will submit bids based on
                                development time and costs. Bids aren’t set in stone; some projects will engender
                                additional time and expenses. </p>
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
                    <div class="section-title">Custom Software Development</div>
                </div>
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">Why is custom software development important?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Custom software development is important because it helps meet
                                        unique requirements at a cost competitive with purchasing, maintaining and
                                        modifying commercial software.
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
