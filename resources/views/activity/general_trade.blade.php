@extends('base')
@section('title', __('home.agriculture'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/commerce-general.jpg') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.general_trade') }}</b></h2>
                  <div>{{ __('home.we_offer_a_wide_range') }} </div>
                  <div class="cs-height_45 cs-height_lg_15"></div>

                  <h4 class="m-0 cs-bold">{{ __('home.products_and_services') }} :</h4>
                
                    <div>{{ __('home.our_products_and_services_include') }} :</div>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.import_and_export_of_cuonsumer') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.distribution_and_wholesale') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.international_trading_and_representation') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.support_for_administrative_procedures') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.logistics_and_transport_services') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.customer_base') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.businesses') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.industries') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.wholesalers_and_distributors') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.retailers') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.individuals') }} </span></li>
                  </ul>

                </div>
            </div>

            <div class="cs-height_80 cs-height_lg_40"></div>
            <div class="cs-video_block cs-style3 position-relative">
                <video width="1170" height="600" class="border" controls>
                    <source src="{{ asset('assets/img/design-agency/video-commerce-general.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>

{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection