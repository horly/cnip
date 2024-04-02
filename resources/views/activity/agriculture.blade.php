@extends('base')
@section('title', __('home.agriculture'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/agriculture.jpg') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.agriculture') }}</b></h2>
                  <div>{{ __('home.we_are_specialized_in_the_production_and_sales_of_agricultural_products') }} </div>
                  <div class="cs-height_45 cs-height_lg_15"></div>

                  <h4 class="m-0 cs-bold">{{ __('home.products_and_services') }} </h4>

                  <div>{{ __('home.we_offer_a_wide_range_of_agricultural_products_including')}} </div>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.fresh_fruits_and_vegetables') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.dairy_products') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.meats') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.cereals_products') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.plants_and_flowers') }} </span></li>
                  </ul>

                  <div>{{ __('home.we_also_offer_a_variety_of_services_such_as') }}</div>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.home_delivery') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.farmers_markets') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.educational_visits_to_the_farm') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.target_market') }} </h4>

                  <div>{{ __('home.our_customers_are')}}</div>

                </div>
            </div>
        </div>
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>


{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection