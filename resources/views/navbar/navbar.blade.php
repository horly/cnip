<header class="cs-site_header cs-style1 cs-type3 cs-sticky-header">
    <div class="cs-main_header">
      <div class="container">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <a class="cs-site_branding h6 fw-bold cs-accent_color" href="{{ route('app_home') }}"><img src="{{ asset('assets/img/design-agency/logo.png') }}" alt=""> {{ config('app.name') }}</a>
          </div>
          <div class="cs-main_header_center">
            <div class="cs-nav">
              <ul class="cs-nav_list">
                <li class="@if (Request::route()->getName() == 'app_home') current-menu-item @endif"><a href="{{ route('app_home') }}">{{ __('home.home') }}</a></li>
                <li class="@if (Request::route()->getName() == 'app_about') current-menu-item @endif"><a href="{{ route('app_about') }}">{{ __('home.about') }}</a></li>
                <li class="menu-item-has-children 
                  @if (Request::route()->getName() == 'app_agriculture' ||
                        Request::route()->getName() == 'app_transport')  
                    current-menu-item @endif
                  "><a href="#">{{ __('home.sectors') }}</a>
                  <ul>
                    <li><a href="{{ route('app_agriculture') }}">{{ __('home.agriculture') }}</a></li>
                    <li><a href="{{ route('app_transport') }}">{{ __('home.transportation') }}</a></li>
                    <li><a href="{{ route('app_immobilier') }}">{{ __('home.real_estate') }}</a></li>
                    <li><a href="{{ route('app_tourisme') }}">{{ __('home.travel_and_tourism') }}</a></li>
                    <li><a href="{{ route('app_general_trade') }}">{{ __('home.general_trade') }}</a></li>
                    <li><a href="{{ route('app_it') }}">{{ __('home.information_technology') }}</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="cs-main_header_right">
            <div class="cs-toolbox">
              @if (Config::get('app.locale') == 'en')
                <a href="{{ route('app_language', ['lang' => 'fr']) }}" class="cs-toolbox_btn cs-accent_bg_2 cs-primary_color cs-accent_bg_hover cs-white_hover cs-rounded text-uppercase">
                  <i class="flag-icon flag-icon-fr rounded"></i> <span>{{ config('languages.fr') }}</span>
                </a>
              @else
                <a href="{{ route('app_language', ['lang' => 'en']) }}" class="cs-toolbox_btn cs-accent_bg_2 cs-primary_color cs-accent_bg_hover cs-white_hover cs-rounded text-uppercase">
                    <i class="flag-icon flag-icon-gb rounded"></i> <span>{{ config('languages.en') }}</span>
                </a>
              @endif
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->