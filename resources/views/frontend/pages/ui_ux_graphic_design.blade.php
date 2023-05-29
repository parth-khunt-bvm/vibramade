@extends('frontend.layout.app')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/ui.avif">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>UI/UX/Graphic Design</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">UI/UX/Graphic Design</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">Our designers know the effective use of visual elements, colors, and graphics while
                        creating a design for your organization. Are you looking for a modernist logo or design that
                        communicates the brand message? Choose us for designing to get set ready to be quickly and
                        easily recognize your business through our quality design solution.</p>

                    <p class="mb-30">At Vibramade, we have proven experience in delivering UX strategies and
                        designs that are tightly integrated with our customer’s business objectives and technology
                        platforms. We focus on simplifying complexity through custom, human-centered digital solutions
                        that enhance the user’s experience and provide measurable improvement in conversions.</p>

                    <div class="row">
                        <div class="col-md-12">
                            <h6>UI/UX Designer</h6>
                            <p>UI/UX Designer responsibilities include gathering user requirements, designing graphic
                                elements and building navigation components. To be successful in this role, you should
                                have experience with design software and wireframe tools. If you also have a portfolio
                                of professional design projects that includes work with web/mobile applications, we’d
                                like to meet you.</p>
                            <p>Ultimately, you’ll create both functional and appealing features that address our clients’ needs and help us grow our customer base.</p>
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
                                    <li><a href="#">UI/UX: Website & Application Designing</a></li>
                                    <li><a href="#"> Graphics Designing</a></li>
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
                    <div class="section-title">UI/UX/Graphic Design</div>
                </div>
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">What does a Ui Ux Designer do?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The UI UX Designer helps create products with a good user
                                        experience. They are responsible for understanding what users want from their
                                        device and then designing it so they can find all of its features easily without
                                        any hassle. They also make sure everything works properly when combined in one
                                        package.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What are the duties and responsibilities of a Ui Ux Designer?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">UI UX designers create the user interface for an app, website, or
                                        other interactive media. Their work includes collaborating with product managers
                                        and engineers to gather requirements from users before designing ideas that can
                                        be communicated using storyboards. They also process flows or sitemaps. They'll
                                        then use their creativity while applying color palettes based on what best fits
                                        into a particular design conceptually.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What makes a Good Ui Ux Designer?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Good communication skills are essential for a UI UX Designer. They
                                        need the ability to ask others what they think about designs or projects before
                                        even starting work on them. They also use empathy to understand their users,
                                        develop solutions that solve their problems, and listen effectively.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Who does a Ui Ux Designer work with?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The UI UX Designer gathers and evaluates user requirements in
                                        collaboration with Product Managers. They use their skills to illustrate design
                                        ideas using storyboards, process flows, or sitemaps. They also design graphic
                                        user interface elements like menus tab widgets.
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
