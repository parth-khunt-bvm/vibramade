@extends('frontend.layout.app')


@section('content')

    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="frontend/img/course/contact-us.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-60">
                    <h3>Let’s give your business what it needs to grow.</h3>
                    <p>As a leading web development firm, we provide experienced consultants, designers, and developers to take your online presence to the next level. </p>
                    <p>As a leading web development firm, we provide experienced consultants, designers, and developers to take your online presence to the next level.
                        In addition to creating robust, scalable, and secure enterprise web-based experiences, Vibramade can also help organizations with migrations, upgrades, and integration. Lastly, we offer a full-service Managed Services offering that includes 24x7 support and maintenance that is able to handle even the most
                        extreme and complex cases swiftly and easily.</p>
                    <p></p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>{{ Config::get( 'constants.PROJECT_NAME' ) }}</p> <a href="tel:855-100-4444">{{ Config::get( 'constants.PHONE' ) }}</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:info@luxuryhotel.com">{{ Config::get( 'constants.EMAIL' ) }}</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> {{ Config::get( 'constants.ADDRESS_LINE3' ) }}
                            <br>{{ Config::get( 'constants.ADDRESS_LINE4' ) }} <br><br>
                            {{ Config::get( 'constants.ADDRESS_LINE1' ) }}
                            <br>{{ Config::get( 'constants.ADDRESS_LINE2' ) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form action="{{ route('save-contact-details') }}" method="post" class="contact_form" id="form-vibramade">
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
                                <input name="name" type="text" placeholder="Your Name *">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *">
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row map_size">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.274196716918!2d72.82055951744384!3d21.18126380000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409794731bd7aacb%3A0xf376382e55bcceb2!2sVIBRAMADE!5e0!3m2!1sen!2sin!4v1685517261000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
