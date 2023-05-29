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
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Are You Ready to Accelerate Your Business?</h3>
                    <p>Our expert in-house team utilizes cutting-edge technologies and platforms like WordPress, Joomla,
                        Drupal, Laravel, Magento, Core PHP, Angular, React JS, Node JS, React Native, WooCommerce, and
                        more to complement your business objectives and goals. Being an eminent web development company
                        with many years of experience, our professionals are committed to providing innovative web
                        development solutions, ranging from brand research to conceptualization, crafting UX/UI design,
                        and overall marketing plan.</p>
                    <P>We are industry-leading experts and will be working with you throughout the process of converting
                        your vision into reality and establishing a profitable business.</P>
                    <P>We keep our process simple, transparent, and customer-focused. We avoid buzzwords and bullshit –
                        we spend our energy instead focused on creating best-in-class user experiences that translate
                        into the things that matter.</P>
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
                    <form method="post" class="contact__form"
                          action="https://duruthemes.com/demo/html/cappa/demo1-light/mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your
                                    message was sent successfully.
                                </div>
                            </div>
                        </div>
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
