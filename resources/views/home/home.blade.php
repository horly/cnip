@extends('base')
@section('title', __('home.home'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
  <div class="cs-hero cs-style8 cs-center">
    <div class="container">
      <div class="cs-hero_text wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="cs-hero_subtitle">{{ __('home.multi_sector_company') }}</div>
        <h1 class="cs-hero_title">{{ __('home.your') }} <b class="cs-accent_color cs-with_bar">
          {{ __('home.partner') }}
          <svg width="296" height="13" viewBox="0 0 296 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="cs-accent_color_2">
            <path d="M2.2 5.1C78 5.5 153.8 5.1 229.6 4.1C251.1 3.8 272.6 3.4 294.2 3C296.1 3 296.1 0 294.2 0C218.4 1.4 142.5 2.2 66.7 2.2C45.2 2.2 23.7 2.2 2.1 2.1C0.199996 2.1 0.199996 5.1 2.2 5.1Z" fill="currentColor"/>
            <path d="M22.8 11.8C106.4 11.8 189.9 12.1 273.5 12.9C275.4 12.9 275.4 9.89999 273.5 9.89999C189.9 9.09999 106.4 8.79999 22.8 8.79999C20.9 8.79999 20.9 11.8 22.8 11.8Z" fill="currentColor"/>
          </svg>            
        </b> <br/>{{ __('home.sustainable') }} <br/><b>{{ __('home.and_prosperous_future') }}.</b></h1>
        <div class="cs-hero_btns">
          <a href="{{ route('app_about') }}" class="cs-btn cs-style6 cs-btn_lg cs-rounded text-uppercase cs-medium cs-accent_border cs-accent_bg cs-white cs-accent_10_bg_hover cs-accent_40_border_hover">
            <span class="cs-btn_text">{{ __('home.about_us') }}</span>
          </a>
          <svg width="82" height="113" viewBox="0 0 82 113" fill="none" xmlns="http://www.w3.org/2000/svg" class="cs-accent_color_2">
            <path d="M54.9 3.09999C78.1 13.7 86.8 48.2 70.6 68.5C63.1 78 51.2 84.8 40.6 90.3C29.4 96.2 17.4 100.4 4.99998 103.2C3.09998 103.6 3.89998 106.5 5.79998 106.1C19.8 103 33.3 97.9 45.8 90.9C56.8 84.7 70 76.9 76.1 65.4C88.1 43.1 79.8 11.3 56.2 0.499987C54.6 -0.300013 53.1 2.29999 54.9 3.09999Z" fill="currentColor"/>
            <path d="M4.89999 95.9C3.69999 99.1 2.19999 102.1 0.29999 105C-0.30001 105.8 0.29999 106.9 1.19999 107.2C5.89999 108.8 10.6 110.4 15.3 112.2C17.1 112.9 17.9 110 16.1 109.3C11.5 107.5 6.79999 105.8 1.99999 104.3C2.29999 105 2.59999 105.8 2.89999 106.5C4.99999 103.4 6.59999 100.2 7.79999 96.7C8.39999 94.9 5.49999 94.1 4.89999 95.9Z" fill="currentColor"/>
            </svg>            
        </div>
      </div>
    </div>
    <div class="cs-hero_blur_shape wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
      <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
    </div>
    <div class="cs-hero_img">
      <div><img src="{{ __('assets/img/design-agency/hero-img2.png') }}" width="800" alt=""></div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Start About -->
    @include('home.our-service')
  <!-- End About -->

  {{-- Start partner --}}
    @include('home.partner')
  {{-- End partner --}}

  {{-- Start partner --}}
   @include('home.project')
  {{-- End partner --}}

  {{-- Start team --}}
  @include('home.team-member')
  {{-- End team --}}

  {{-- Start contact --}}
  @include('home.contact-form')
  {{-- End contact --}}



  {{-- Start Footer --}}
    @include('footer.footer')
  {{-- End Footer --}}

@endsection