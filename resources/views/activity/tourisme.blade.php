@extends('base')
@section('title', __('home.travel_and_tourism'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/tourisme.jpg') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.travel_and_tourism') }}</b></h2>
                  <div>{{ __('home.assistance_support_advice_visa') }} </div>
                  <div class="cs-height_45 cs-height_lg_15"></div>

                  <h4 class="m-0 cs-bold">{{ __('home.our_services') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.personalized_advice') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.creation_of_the_file') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.managing_the_project') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.support_for_administrative_procedures') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.emergency_service') }} </span></li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.customer_base') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.individuals') }} </span> : {{ __('home.students') }}, {{ __('home.tourists') }}, {{ __('home.foreign_workers') }}, {{ __('home.families') }}, etc. </li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.businesses') }} </span> : {{ __('home.expatriates') }}, {{ __('home.staff_on_international_mission') }}, etc.</li>
                  </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.benefits') }} :</h4>
                    <br>
                  <ul>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.saving_time_and_energy_for_the_customer') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.reduced_stress_and_risk_of_errors') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.increased_chances_of_obtaining_a_visa') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.access_to_a_network_of_visa_experts') }} </span></li>
                    <li><span class="cs-medium cs-accent_color">{{ __('home.quality_service_at_a_competitive_price') }} </span></li>
                  </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="cs-height_130 cs-height_lg_70"></div>

{{-- Start Footer --}}
    @include('footer.footer')
{{-- End Footer --}}

@endsection