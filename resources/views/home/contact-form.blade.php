<!-- Start Contact -->
<div id="next_section">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="cs-contact cs-style2 cs-white_bg">
        <div class="cs-contact_left cs-accent_bg position-relative">
          <div class="cs-contact_info_wrap">
            <h4 class="cs-contact_title cs-semi_bold cs-white">{{ __('home.contact_information') }} </h4>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <ul class="cs-contact_info cs-mp0 cs-white">
              <li><i class="fas fa-phone-alt"></i>{{ config('app.phone_number') }} </li>
              <li><i class="far fa-address-book"></i>{{ config('app.email') }}</li>
              {{--<li><i class="fas fa-fax"></i>+1 323 555 1234</li>--}}
              <li><i class="fas fa-map-marker-alt"></i>{{ config('app.address_office') }} <br>Kinshasa-Gombe</li>
            </ul>
          </div>
          <br>
          <div style="width: 100%">
              <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=16eme%20Niveau%20de%20l%E2%80%99immeuble%20nouvelle%20galerie%20pr%C3%A9sidentielle,%20appartement%20C%20Kinshasa-Gombe+(GROUPE%20CNIP%20COMPANY)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              <a href="https://www.gps.ie/">gps vehicle tracker</a>
          </iframe></div>

          <div class="cs-social_btns_wrap">
            <div class="cs-social_btns cs-style1 cs-white_50">
              <a href="{{ config('app.facebook_link') }}" class="cs-accent_color_2_hover"><i class="fab fa-facebook-f"></i></a>
              <a href="{{ config('app.instagram_link') }}" class="cs-accent_color_2_hover"><i class="fab fa-instagram"></i></a>
              <a href="{{ config('app.twitter_link') }}" class="cs-accent_color_2_hover"><i class="fab fa-twitter"></i></a>
              <a href="{{ config('app.linkedin_link') }}" class="cs-accent_color_2_hover"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="cs-circle cs-accent_60_bg_2"></div>
        </div>
        <div class="cs-contact_right cs-accent_10_bg">
          <h4 class="cs-contact_title cs-semi_bold">{{ __('home.get_in_touch') }} </h4>
          <div class="cs-height_10 cs-height_lg_10"></div>

          <form class="cs-contact_form" id="send-message-form" action="{{ route('app_send_message') }}">

            <input type="hidden" id="send-message-token" value="{{ csrf_token() }}">

            <div class="row cs-row_gap_20">
              <div class="col-sm-6">
                    <input type="text" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="first_name" placeholder="{{ __('home.first_name') }}">
                    <small class="text-danger" id="first_name-error" message="{{ __('home.please_enter_a_valid_first_name') }}"></small>
                    <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-sm-6">
                    <input type="text" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="last_name" placeholder="{{ __('home.last_name') }}">
                    <small class="text-danger" id="last_name-error" message="{{ __('home.please_enter_a_valid_last_name') }}"></small>
                    <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-sm-6">
                  <input type="number" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="phone_number" placeholder="{{ __('home.phone_number') }}">
                  <small class="text-danger" id="phone_number-error" message="{{ __('home.please_enter_a_valid_phone_number') }}"></small>
                  <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-sm-6">
                  <input type="email" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="email_addr" placeholder="Email">
                  <small class="text-danger" id="email_addr-error" message="{{ __('home.please_enter_a_valid_email_address') }}"></small>
                  <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                  <textarea cols="30" rows="5" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="message_text" placeholder="{{ __('home.your_message') }}"></textarea>
                  <small class="text-danger" id="message_text-error" message="{{ __('home.please_enter_your_message') }}"></small>
                  <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                  <button type="button" id="send-message" class="cs-btn cs-style6 cs-rounded text-uppercase cs-medium cs-accent_border cs-accent_bg cs-white cs-accent_10_bg_hover cs-accent_40_border_hover cs-accent_color_hover">
                    <span class="cs-btn_text">{{ __('home.send_message') }}</span>
                  </button>

                  <button type="button" id="send-message-loading" class="cs-btn cs-style6 cs-rounded text-uppercase cs-medium cs-accent_border cs-accent_bg cs-white cs-accent_10_bg_hover cs-accent_40_border_hover cs-accent_color_hover d-none">
                    <div class="p-2">
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;&nbsp;{{ __('home.sending') }}...
                    </div>
                  </button>
                </div>
            </div>
            <br>

            @include('alert.alert')

          </form>
        </div>
      </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  <!-- End Portfolio -->
