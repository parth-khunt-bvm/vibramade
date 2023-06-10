@extends('frontend.layout.app')


@section('content')

    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>About</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-60">
                    <p>Welcome to Vibramade. A full-service digital agency. · We create bespoke digital designs, platforms, and products in Various technologies.</p>
                    <h4>Our specialties include the following:</h4>
                    <ul>
                        <li>Digital Strategy and Technology Consulting</li>
                        <li> Accelerating go-to-market strategies with rapid application development frameworks.</li>
                        <li> Cloud & Managed Services</li>
                    </ul>
                    <p>We follow good coding standards and follow strict coding patterns as this would reflect into growth of our employees as well as the company. We have good work environment and a great team.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>{{ Config::get( 'constants.PROJECT_NAME' ) }}</p> <a
                                href="tel:855-100-4444">{{ Config::get( 'constants.PHONE' ) }}</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a
                                href="mailto:info@luxuryhotel.com">{{ Config::get( 'constants.EMAIL' ) }}</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> {{ Config::get( 'constants.ADDRESS_LINE1' ) }}
                            <br>{{ Config::get( 'constants.ADDRESS_LINE2' ) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form action="{{ route('save-contact-details') }}" method="post" class="contact__form" id="form-vibramade">
                    @csrf
                        @if(Session::has('success'))
                            <div class="alert alert-primary mt-2 successMessage">
                                <p class="mb-0">{{Session::get('success')}}</p>
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger mt-2 successMessage">
                                <p class="mb-0">{{Session::get('error')}}</p>
                            </div>
                        @endif
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                          required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
