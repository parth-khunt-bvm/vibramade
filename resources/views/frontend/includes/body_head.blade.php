<!-- Preloader -->
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader"> <span></span> </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-md">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{route('home')}}"> <img src="{{asset('frontend/img/logo-home.png')}}" class="logo-img" alt="Vibramade-logo"> </a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Services<i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('website-development')}}" class="dropdown-item"><span>Website Development</span></a></li>
                        <li><a href="{{route("mobile-application-development")}}" class="dropdown-item"><span>Mobile Application Development</span></a></li>
                        <li><a href="{{route("ui-ux-graphic-design")}}" class="dropdown-item"><span>UI/UX/Graphic Design</span></a></li>
                        <li><a href="{{route("custom-software-development")}}" class="dropdown-item"><span>Custom Software Development</span></a></li>
                        <li><a href="{{route("quality-assurance")}}" class="dropdown-item"><span>Quality Assurance</span></a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{route("portfolio")}}">Portfolio</a></li> --}}
{{--                <li class="nav-item"><a class="nav-link" href="{{route("blog")}}">Blog</a></li>--}}
                <li class="nav-item"><a class="nav-link" href="{{route("about")}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route("contact")}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

