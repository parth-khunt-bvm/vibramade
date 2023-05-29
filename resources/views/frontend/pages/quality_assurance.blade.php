@extends('frontend.layout.app')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/quality-assurance.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Quality Assurance</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Quality Assurance</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">As a well-experienced software testing company, we at Vibramade strive to
                        rapidly improve the performance of applications across platforms, combining the latest
                        technology with flawless processes to testing and quality assurance. Our approach is aligned to
                        the needs of the end-user, making sure that the application validates user friendly-processes
                        and is free from defects.</p>
                    <p class="mb-30">We are performance-driven and offer our services to cater across digital platforms.
                        We have rich experience in serving a large variety of domains namely digital media, Insurance,
                        e-commerce, chatbots, content management, micro-services, emergency medical services, education,
                        human resources, and recruitment.
                    </p>
                    <p>We provide a whole range of software testing outsourcing and quality assurance services across
                        industry verticals.</p>

                    <div class="row">
                        <div class="col-md-12">
                            <h6>Quality Assurance</h6>
                            <p>Managing a quality of a product or a service involves planning, fulfilling, and
                                monitoring activities. Quality assurance comes under monitoring facet of that
                                discipline. It’s process or act of confirming whether a firm’s quality requirements met
                                or not. An alternate definition is it’s a part of a quality management, which focuses on
                                a fulfilling the quality requirements. Quality assurance is the twofold process that
                                supports a management internally and customers’ confidence and also company credibility
                                externally.</p>
                            <p>QA strives to deliver the consistent results through a set of standardized processes and
                                procedures that systematically monitors various aspects of a product or a service. By a
                                regular audits and other forms of assessments, QA detects and fixes a problems or
                                variances that fall outside of an organized standards or requirements.The concept of a
                                quality assurance was first started in manufacturing domain and later spread to most of
                                industries, including software development.</p>
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
                    <div class="section-title">Quality Assurance</div>
                </div>
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">What is a QA in software testing?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Quality Assurance (QA) in a software testing is explained as a
                                        procedure to ensure quality of a product or service meeting a specifications set
                                        by the organization. QA enhances a software development process and makes it
                                        efficient and effective as per quality standards are defined for a software
                                        products. Quality Assurance is also called the Quality Assurance Testing.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Importance of Quality Assurance</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The quality of a product is the only thing that matters in a
                                        today’s software world. It helps companies to create the products and services
                                        that fulfill a customer’s expectations. Also, it yields a high-quality product
                                        offerings that build trust and loyalty with the customers. Implementing a some
                                        standard software quality assurance practices will take a Quality Assurance a
                                        long way:
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
