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
          <form class="cs-contact_form">
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
                <input type="text" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="phone_number" placeholder="{{ __('home.phone_number') }}">
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-sm-6">
                <input type="text" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="email_addr" placeholder="Email">
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <textarea cols="30" rows="5" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color" id="message_text" placeholder="{{ __('home.your_message') }}"></textarea>
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <button type="button" id="send-message" class="cs-btn cs-style6 cs-rounded text-uppercase cs-medium cs-accent_border cs-accent_bg cs-white cs-accent_10_bg_hover cs-accent_40_border_hover cs-accent_color_hover"><span class="cs-btn_text">{{ __('home.send_message') }}</span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  <!-- End Portfolio -->