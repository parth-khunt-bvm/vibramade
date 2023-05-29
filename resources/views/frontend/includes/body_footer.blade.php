<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">About Hotel</h3>
                        <p class="footer-about-text">We keep our process simple, transparent, and customer-focused. We
                            avoid buzzwords and bullshit – we spend our energy instead focused on creating best-in-class
                            user experiences that translate into the things that matter.</p>

{{--                        <div class="footer-language"><i class="lni ti-world"></i>--}}
{{--                            <select onchange="location = this.value;">--}}
{{--                                <option value="http://duruthemes.com/">English</option>--}}
{{--                                <option value="http://duruthemes.com/">German</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="{{route("portfolio")}}">Portfolio</a></li>
                            <li><a href="{{route("blog")}}">Blog</a></li>
                            <li><a href="{{route("about")}}">About</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">{{ Config::get( 'constants.ADDRESS_LINE1' ) }}<br>{{ Config::get( 'constants.ADDRESS_LINE2' ) }}</p>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-call"></span> {{ Config::get( 'constants.PHONE' ) }}</p>
                            <p class="footer-contact-mail">{{ Config::get( 'constants.EMAIL' ) }}</p>
                        </div>
                        <div class="footer-about-social-list">
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-youtube"></i></a>
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright 2023 by <a href="#">{{ Config::get( 'constants.EMAIL' ) }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
