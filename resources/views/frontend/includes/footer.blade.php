<!-- jQuery -->
<script src="frontend/js/jquery-3.6.3.min.js"></script>
<script src="frontend/js/jquery-migrate-3.0.0.min.js"></script>
<script src="frontend/js/modernizr-2.6.2.min.js"></script>
<script src="frontend/js/imagesloaded.pkgd.min.js"></script>
<script src="frontend/js/jquery.isotope.v3.0.2.js"></script>
<script src="frontend/js/pace.js"></script>
<script src="frontend/js/popper.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/scrollIt.min.js"></script>
<script src="frontend/js/jquery.waypoints.min.js"></script>
<script src="frontend/js/owl.carousel.min.js"></script>
<script src="frontend/js/jquery.stellar.min.js"></script>
<script src="frontend/js/jquery.magnific-popup.js"></script>
<script src="frontend/js/YouTubePopUp.js"></script>
<script src="frontend/js/select2.js"></script>
<script src="frontend/js/datepicker.js"></script>
<script src="frontend/js/smooth-scroll.min.js"></script>
<script src="frontend/js/custom.js"></script>

<script src="{{  asset('backend/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{  asset('backend/js/scripts.bundle.js') }}"></script>


@if (!empty($pluginjs))
    @foreach ($pluginjs as $value)
        <script src="{{ asset('backend/js/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

@if (!empty($js))
    @foreach ($js as $value)
        <script src="{{ asset('backend/js/customjs/'.$value) }}" type="text/javascript"></script>
    @endforeach
@endif

<script>
    jQuery(document).ready(function () {
        @if (!empty($funinit))
            @foreach ($funinit as $value)
            {{  $value }}
            @endforeach
            @endif
    });
</script>
