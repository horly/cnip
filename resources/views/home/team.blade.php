@extends('base')
@section('title', __('home.our_team'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
    <div class="cs-hero cs-style8 cs-type1 cs-center text-center">
        <div class="container">
            <div class="cs-hero_text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.our') }}</b> {{ __('home.team') }}</h1>
                <a href="#service" class="cs-down_btn cs-accent_color cs-accent_color_2_hover cs-smoth_scroll"><i class="fas fa-angle-down"></i></a>
            </div>
        </div>
        <div class="cs-hero_blur_shape">
        <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
        </div>
    </div>
    <!-- End Hero -->

     <!-- Start Team Member -->
  <div class="cs-height_140 cs-height_lg_80"></div>
  <div class="container">
    <div class="row cs-gap_70">

        <img src="{{ asset('assets/img/design-agency/all-team1.jpg') }}" class="img-fluid" alt="...">

        <h4 class="mt-3 text-center">
            {{ __('home.we_are_proud_of_our_talented') }}.
        </h4>

    </div>
  </div>
  <div class="cs-height_175 cs-height_lg_70"></div>
  <!-- End Team Member -->

  {{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}

@endsection
