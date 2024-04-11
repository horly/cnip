@extends('base')
@section('title', __('home.real_estate'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/Immobilier.jpg') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.real_estate') }}</b></h2>
                  <div>{{ __('home.we_provide_our_client_with_an_exceptional_real_estate') }} </div>
                  <div class="cs-height_45 cs-height_lg_15"></div>

                  <h4 class="m-0 cs-bold">{{ __('home.our_services') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.purchase_sales_rental_house') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.purchase_location_house') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.renovation_and_construction') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.real_estate_expertise') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.rental_management') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.our_values') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.professionalism') }} </span> : {{ __('home.we_offer_superior_quality') }} </li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.commitment') }} </span> : {{ __('home.we_are_dedicated_to_the_needs') }}</li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.transparency') }} </span> : {{ __('home.we_communicate_clearly') }} </li>
                    <li><span class="cs-medium cs-accent_color">Respect </span> : {{ __('home.we_treat_our_customers_with_respect') }} </li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.our_team') }} </h4>

                  <div>{{ __('home.our_team_is_made_up')}}</div>

                </div>
            </div>
        </div>
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>

{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection