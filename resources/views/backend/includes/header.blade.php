<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{  asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{  asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('backend/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{  asset('backend/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('backend/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('backend/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('backend/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{  asset('frontend/img/logo-png.ico') }}" />

    <link href="{{  asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
    @if (!empty($css))
        @foreach ($css as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('backend/css/customcss/'.$value) }}">
            @endif
        @endforeach
    @endif


    @if (!empty($plugincss))
        @foreach ($plugincss as $value)
            @if(!empty($value))
                <link rel="stylesheet" href="{{ asset('backend/'.$value) }}">
            @endif
        @endforeach
    @endif

    <script>
        var baseurl = "{{ asset('/') }}";
        var date_formate = "dd-M-yyyy";
        var decimal_point = "{{ Config::get('constants.DECIMAL_POINT') }}";
    </script>

    <style>
        .text-center{
            text-align: center !important;

        }
        .theme-color{
            background: #ED4742 !important;
            border: #ED4742;
        }

        .form-group label{
            color: black !important;
        }
    </style>
</head>
<!--end::Head-->
