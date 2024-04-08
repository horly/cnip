@extends('base')
@section('title', __('home.transportation'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/transport.jpg') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.transportation') }}</b></h2>
                  <div>{{ __('home.we_offer_our_customer_reliable') }} </div>
                  <div class="cs-height_45 cs-height_lg_15"></div>

                  <h4 class="m-0 cs-bold">{{ __('home.transportation') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.transport_of_goods_and_people') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.express_delivery') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.moving') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.charter') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.vehicle_sales') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.new_and_used_vehicles') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.wide_choice_of_brands_and_models') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.financing_and_leasing') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.vehicles_rental') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.short_and_long_term_rental') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.wide_choice_of_brands_and_models') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.passenger_and_utility_vehicles') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.our_engagement') }} </h4>

                  <div>{{ __('home.we_are_commited_to_providing_our_clients')}}</div>

                </div>
            </div>
        </div>
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>

{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection