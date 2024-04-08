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

                  <div>{{ __('home.in_the_agricultural_sector_we_offer')}} :</div>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.development_of_agricultural_and_support_projects') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.tractor_rental') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.sale_of_parts_and_accessories_for_agriculture') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.wholesale_sale_of_agricultural_inputs') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.sales_and_assistance_in_the_mechienery') }} </span></li>
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

    <br>
    
    <div class="container">
      <img src="{{ asset('assets/img/design-agency/agri-tractor.jpg') }}" class="img-fluid" alt="...">
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>


{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection