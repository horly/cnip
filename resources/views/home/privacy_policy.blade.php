@extends('base')
@section('title', __('home.privacy_policy'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
  <div class="cs-hero cs-style8 cs-type1 cs-center text-center" data-src="{{ asset('assets/img/design-agency/icon-box-bg2.jpg') }}">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.privacy_policy') }} </b></h1>
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
            <div>1. <span class="cs-medium cs-accent_color">Introduction </span></div>
            <br>
            <p>
                <b>{{ config('app.name') }}</b> {{ __('home.is_commited_to_protectecting_your_data') }}.
            </p>

            <div>2. <span class="cs-medium cs-accent_color">{{ __('home.information_we_collect') }} </span></div>
            <br>
            <div>{{ __('home.we_may_collect_the_following_information_from_you') }} :</div>
            <ul>
                <li><span class="cs-medium cs-accent_color">{{ __('home.information_you_provide_to_us') }} </span> : {{ __('home.this_includes_information_you_provide') }}. </li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.navigation_information') }} </span> : {{ __('home.when_you_visit_our_website') }}.</li>
            </ul>

            <div>3. <span class="cs-medium cs-accent_color">{{ __('home.use_of_your_information') }} </span></div>
            <br>
            <div>{{ __('home.we_use_your_information_to') }} :</div>
            <ul>
                <li><span class="cs-medium cs-accent_color">{{ __('home.providing_our_services_to_you') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.improve_our_website') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.contact_you_to_provide_you') }} </span></li>
                <li><span class="cs-medium cs-accent_color">{{ __('home.protect_our_rights') }} </span></li>
            </ul>

            <div>4. <span class="cs-medium cs-accent_color">{{ __('home.security_of_your_information') }} </span></div>
            <br>
            <p>
                {{ __('home.we_take_reasonable') }}.
            </p>

            <div>5. <span class="cs-medium cs-accent_color">Contact </span></div>
            <br>
            <p>
                {{ __('home.if_you_have_any_questions_about') }} <b class="cs-medium cs-accent_color">{{ config('app.email') }}</b>.
            </p>

        </div>
        <div class="cs-height_110 cs-height_lg_50"></div>
      </div>
      <!-- End Portfolio -->


{{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}


@endsection
