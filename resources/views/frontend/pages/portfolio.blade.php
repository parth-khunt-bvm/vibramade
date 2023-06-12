@extends('frontend.layout.app')




@section('content')

    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3"
         data-background="frontend/img/course/port.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Portfolio</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">Portfolio</div>
                </div>
            </div>
            <div class="row">
                @foreach($portfolio as $key => $value)
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ $value['image'] }}" alt="{{ $value['alt'] }}"> </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
