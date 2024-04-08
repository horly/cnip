@extends('base')
@section('title', __('home.information_technology'))
@section('content')

    @include('navbar.navbar')

    <div class="cs-height_120 cs-height_lg_60"></div>
        <div class="container">
            <div class="cs-frame_2_column">
                <div class="cs-frame_left">
                  <img src="{{ asset('assets/img/design-agency/it-solution.png') }}" alt="Portfolio Image">
                  <div class="cs-height_0 cs-height_lg_30"></div>
                </div>
                <div class="cs-frame_right cs-space_left_100">
                  <h2><b class="cs-bold cs-accent_color">{{ __('home.information_technology') }}</b></h2>

                  <h4 class="m-0 cs-bold">{{ __('home.our_offer') }} :</h4>
                    <br>
                    <ul>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.customized_it_solutions') }} </span> : {{ __('home.we_design_and_develop_software') }} </li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.complete_support') }} </span> : {{ __('home.from_analyzing_your_needs_to_implementing') }}</li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.technical_expertise') }} </span> : {{ __('home.our_team_of_experts_masters') }} </li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.flexibility_and_adaptability') }} </span> : {{ __('home.we_listen_to_your_needs') }} </li>
                    </ul>

                  <h4 class="m-0 cs-bold">{{ __('home.our_areas_of_intervention') }} :</h4>
                    <br>
                    <ul>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.development_of_business_software') }} </span> : CRM, ERP, GPAO, etc. </li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.creation_of_web_and_mobile_applications') }} </span> : {{ __('home.websites_e_commerce_applications_etc') }}</li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.systems_integration') }} </span> : {{ __('home.interconnection_of_your_differente_software') }} </li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.outsourcing') }} </span> : {{ __('home.maintenance_and_support_of_your_computer_system') }} </li>
                        <li><span class="cs-medium cs-accent_color">Cloud computing </span> : {{ __('home.public_private_or_hybrid_cloud_solutions') }} </li>
                        <li><span class="cs-medium cs-accent_color">{{ __('home.cybersecurity') }} </span> : {{ __('home.protection_of_your_data_and_systems') }} </li>
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