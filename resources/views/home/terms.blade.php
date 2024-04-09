@extends('base')
@section('title', __('home.terms'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
  <div class="cs-hero cs-style8 cs-type1 cs-center text-center" data-src="{{ asset('assets/img/design-agency/icon-box-bg2.jpg') }}">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.terms_and_conditions') }} </b></h1>
        <a href="#next_section" class="cs-down_btn cs-accent_color cs-accent_color_2_hover cs-smoth_scroll"><i class="fas fa-angle-down"></i></a>
      </div>
    </div>
    <div class="cs-hero_blur_shape">
      <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
    </div>
  </div>
  <!-- End Hero -->

    <!-- Start Portfolio -->
    <div id="next_section">
        <div class="container">
            <div class="cs-height_110 cs-height_lg_50"></div>

            <div>1. <span class="cs-medium cs-accent_color">{{ __('home.article') }} 1 - {{ __('home.object') }} </span></div>
            <br>
            <p>
                {{ __('home.the_purpose_of_these_general_condition') }}.
            </p>

            <div>2. <span class="cs-medium cs-accent_color">{{ __('home.article') }} 1 - {{ __('home.object') }} </span></div>
            <br>
            <p>
                {{ __('home.the_purpose_of_these_general_condition') }}.
            </p>
    
        </div>
        <div class="cs-height_110 cs-height_lg_50"></div>
      </div>
      <!-- End Portfolio -->


{{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}


@endsection