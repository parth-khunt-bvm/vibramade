<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">About Vibramade</h3>
                        <p class="footer-about-text">Web Development, App Development, IT Services, React Native, ReactJs, Android, IOS, Python, QA, Ruby on Rails, NodeJs, and .net</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Pages</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="{{route("portfolio")}}">Portfolio</a></li>
{{--                            <li><a href="{{route("blog")}}">Blog</a></li>--}}
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
                            <a href="https://www.linkedin.com/company/vibramade/?viewAsMember=true"><i class="ti-linkedIN"></i></a>
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
