<!-- Footer Section -->
<footer class="cs-footer cs-style3 cs-bg" data-src="{{ asset('assets/img/design-agency/footer-bg.jpg') }}">
    <div class="cs-footer_bg"></div>
    <div class="container">
      <div class="cs-height_115 cs-height_lg_75"></div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item cs-text_widgert">
            <div class="cs-text_widgert_content">
              <img src="{{ asset('assets/img/design-agency/logo-no-border.png') }}" width="100" alt="Logo">
            </div>
          </div>
          <div class="cs-footer_item cs-address_widgert">
            <ul>
              <li><i class="fas fa-envelope-open"></i>{{ config('app.email') }}</li>
              <li><i class="fas fa-address-book"></i>{{ config('app.phone_number') }}</li>
              <li><i class="fas fa-map-marker-alt"></i>{{ config('app.address_office') }} <br>Kinshasa-Gombe</li>
            </ul>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item widget_nav_menu">
            <h2 class="cs-widget_title">Services</h2>
            <ul class="menu">
              <li><a href="{{ route('app_agriculture') }}">{{ __('home.agriculture') }}</a></li>
              <li><a href="{{ route('app_transport') }}">{{ __('home.transportation') }}</a></li>
              <li><a href="{{ route('app_immobilier') }}">{{ __('home.real_estate') }}</a></li>
              <li><a href="{{ route('app_tourisme') }}">{{ __('home.travel_and_tourism') }}</a></li>
              <li><a href="{{ route('app_general_trade') }}">{{ __('home.general_trade') }}</a></li>
              <li><a href="{{ route('app_it') }}">{{ __('home.information_technology') }}</a></li>
            </ul>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item widget_nav_menu">
            <h2 class="cs-widget_title">{{ __('home.company') }}</h2>
            <ul class="menu">
              <li><a href="{{ route('app_about') }}">{{ __('home.about_us') }}</a></li>
              <li><a href="{{ route('app_projects') }}">{{ __('home.projects') }}</a></li>
              <li><a href="{{ route('app_team') }}">{{ __('home.team') }}</a></li>
              <li><a href="#">{{ __('home.privacy_policy') }}</a></li>
              <li><a href="#">{{ __('home.terms') }}</a></li>
            </ul>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3 col-md-6">
          <div class="cs-footer_item cs-address_widgert">
            <h2 class="cs-widget_title">{{ config('app.name') }}</h2>
            <div class="cs-footer_newsletter cs-style1">
            </div>
          </div>
          <div class="cs-footer_item">
            <div class="cs-social_btns cs-style1">
              <a href="{{ config('app.facebook_link') }}"><i class="fab fa-facebook-f"></i></a>
              <a href="{{ config('app.instagram_link') }}"><i class="fab fa-instagram"></i></a>
              <a href="{{ config('app.twitter_link') }}"><i class="fab fa-twitter"></i></a>
              <a href="{{ config('app.linkedin_link') }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <br>
            <div>Copyright &copy; {{ date('Y') }}</div>
          </div>
        </div><!-- .col -->
      </div>
      <div class="cs-height_90 cs-height_lg_50"></div>
    </div>
  </footer>
  <!-- Footer Section -->