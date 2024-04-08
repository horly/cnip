@extends('base')
@section('title', __('home.about'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
    <div class="cs-hero cs-style8 cs-type1 cs-center text-center">
        <div class="container">
            <div class="cs-hero_text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.about') }}</b> {{ __('home.us') }}</h1>
                <a href="#service" class="cs-down_btn cs-accent_color cs-accent_color_2_hover cs-smoth_scroll"><i class="fas fa-angle-down"></i></a>
            </div>
        </div>
        <div class="cs-hero_blur_shape">
        <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start About -->
  <div id="service" class="cs-bg" data-src="{{ asset('assets/img/design-agency/icon-box-bg.jpg') }}">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-section_heading cs-style2 cs-size2">
            <div class="cs-section_subtitle">{{ __('home.who_are_we') }} ?</div>
        </div>
    </div>

    <!-- Start Portfolio -->
    <div class="container">
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="cs-frame_2_column">
            <div class="cs-frame_left">
                <img src="{{ asset('assets/img/design-agency/logo2.jpg') }}" class="border" alt="logo">
                <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
            <div class="cs-frame_right cs-space_left_100">
                <h2 class="cs-section_title">{{ __('home.our') }}
                    <b class="cs-accent_color cs-with_bar"> {{ __('home.story') }}
                        <svg width="208" height="11" viewBox="0 0 208 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="cs-accent_color_2">
                            <path d="M8.90002 10.1C72.2 10.6 135.6 10.7 198.9 10.5C200.8 10.5 200.8 7.49998 198.9 7.49998C135.6 7.79998 72.2 7.69998 8.90002 7.09998C6.90002 7.09998 6.90002 10.1 8.90002 10.1Z" fill="currentColor"/>
                            <path d="M1.90002 3.79999C69.9 3.79999 137.9 4.09999 205.9 4.89999C207.8 4.89999 207.8 1.89999 205.9 1.89999C137.9 1.19999 69.9 0.799988 1.90002 0.799988C-0.0999756 0.799988 -0.0999756 3.79999 1.90002 3.79999Z" fill="currentColor"/>
                        </svg>              
                    </b>
                </h2>
                <div>
                    <p> 
                        <b>{{ config('app.old_name') }}</b> {{ __('home.was_founded_in_2016_by') }} <b>{{ config('app.founder') }}</b>.
                        {{ __('home.after_a_while_the_business_will_come') }} <b>{{ config('app.name') }}</b>.
                    </p>

                    <p>
                        {{ __('home.we_are_a_company_under_congolese_law') }}. {{ __('home.we_we_are_passionate_innovation') }}.
                    </p>

                    <p>
                        {{ __('home.our_economic_model_is_based_on_a_network') }}.
                    </p>
                </div>
            </div>
        </div>

        <div class="cs-height_50 cs-height_lg_40"></div>

        <div class="cs-frame_2_column cs-mobile_reverse">
            <div class="cs-frame_right cs-space_right_100">
                <div class="cs-vertical_middle">
                    <div class="cs-vertical_middle_in">
                        <h2 class="cs-section_title">{{ __('home.our') }}
                            <b class="cs-accent_color cs-with_bar"> Concept
                                <svg width="208" height="11" viewBox="0 0 208 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="cs-accent_color_2">
                                    <path d="M8.90002 10.1C72.2 10.6 135.6 10.7 198.9 10.5C200.8 10.5 200.8 7.49998 198.9 7.49998C135.6 7.79998 72.2 7.69998 8.90002 7.09998C6.90002 7.09998 6.90002 10.1 8.90002 10.1Z" fill="currentColor"/>
                                    <path d="M1.90002 3.79999C69.9 3.79999 137.9 4.09999 205.9 4.89999C207.8 4.89999 207.8 1.89999 205.9 1.89999C137.9 1.19999 69.9 0.799988 1.90002 0.799988C-0.0999756 0.799988 -0.0999756 3.79999 1.90002 3.79999Z" fill="currentColor"/>
                                </svg>              
                            </b>
                        </h2>

                        <div>
                            <p> 
                                {{ __('home.our_concept_is_based_on_alliance') }}.
                            </p>

                            <p>
                                {{ __('home.by_drawing_in_our_values') }}.
                            </p>

                            <p>
                                {{ __('home.our_approach_combines_know_how') }}.
                            </p>

                            <p>
                                <b>{{ __('home.word_from_the_CEO') }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-frame_left">
                <img src="{{ asset('assets/img/design-agency/pdg-writing.jpg') }}" alt="Portfolio Image">
                <div class="cs-height_0 cs-height_lg_30"></div>
            </div>
        </div>
        <div class="cs-height_130 cs-height_lg_70"></div>
    </div>
    <!-- End Portfolio -->

    
  </div>
  <!-- End About -->

  

{{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}

@endsection