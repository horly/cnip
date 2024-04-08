<!-- Start Portfolio item -->
<div class="cs-height_140 cs-height_lg_80"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 cs-size2">
        <div class="cs-section_subtitle">{{ __('home.our_projects') }} </div>
        <h2 class="cs-section_title">{{ __('home.business_projects') }} :<br><b class="cs-extra_bold cs-accent_color cs-with_bar">
          {{ __('home.building_the_future_together') }}
          <svg width="208" height="11" viewBox="0 0 208 11" fill="none" xmlns="http://www.w3.org/2000/svg" class="cs-accent_color_2">
            <path d="M8.90002 10.1C72.2 10.6 135.6 10.7 198.9 10.5C200.8 10.5 200.8 7.49998 198.9 7.49998C135.6 7.79998 72.2 7.69998 8.90002 7.09998C6.90002 7.09998 6.90002 10.1 8.90002 10.1Z" fill="currentColor"/>
            <path d="M1.90002 3.79999C69.9 3.79999 137.9 4.09999 205.9 4.89999C207.8 4.89999 207.8 1.89999 205.9 1.89999C137.9 1.19999 69.9 0.799988 1.90002 0.799988C-0.0999756 0.799988 -0.0999756 3.79999 1.90002 3.79999Z" fill="currentColor"/>
          </svg>  
        </b></h2>
        <div class="cs-section_text">{{ __('home.we_are_driven_by_a_passion') }} </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
        <a href="{{ route('app_projects') }}" class="cs-btn cs-style6 cs-btn_lg cs-rounded text-uppercase cs-medium cs-accent_border cs-accent_bg cs-white cs-accent_10_bg_hover cs-accent_40_border_hover">
          <span class="cs-btn_text">{{ __('home.view_all') }} </span>
        </a>
      </div>
      <div class="cs-height_0 cs-height_lg_50"></div>
    </div> <!-- .col -->
    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-right_full_width">
        <div class="cs-slider cs-style2 cs-gap-40">
          <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-fade-slide="0"  data-slides-per-view="1" data-variable-width="1">
            <div class="cs-slider_wrapper">

              @foreach ($projets as $projet)
                <div class="cs-slide">
                  <a href="{{ route('app_projects') }}" class="cs-portfolio cs-style3">
                      <div class="cs-portfolio_img"><img class="border" src="{{ asset('assets/img/design-agency')}}/{{ $projet->img_name }}.png" alt=""></div>
                      <h2 class="cs-portfolio_title">{{ __('home.' . $projet->description )}}</h2>
                  </a>
                </div>  
              @endforeach

            </div>
          </div><!-- .cs-slider_container -->
          <div class="cs-pagination cs-style1 cs-accent_color cs-hidden_desktop"></div>
          <div class="cs-slider_arrows cs-style1 cs-type2 cs-center cs-hidden_mobile">
            <!-- <div class="cs-left_arrow cs-center">
              <i class="fas fa-angle-left"></i>
            </div> -->
            <div class="cs-right_arrow cs-center cs-accent_color cs-white_bg_hover cs-primary_color_hover">
              <i class="fas fa-angle-right"></i>
            </div>
          </div>
        </div><!-- .cs-slider -->
      </div>
    </div> <!-- .col -->
  </div>
</div>
<div class="cs-height_140 cs-height_lg_80"></div>
<!-- End Portfolio item -->