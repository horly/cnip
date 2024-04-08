<!-- Start Team Member -->
<div class="cs-bg" data-src="{{ asset('assets/img/design-agency/team-bg.jpg') }}">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="cs-section_heading cs-style4 cs-size3">
        <div class="cs-section_heading_left">
        <div class="cs-section_subtitle">{{ __('home.our_team') }} </div>
        <h2 class="cs-section_title">{{ __('home.our_professional') }} <b class="cs-accent_color">{{ __('home.team_member') }}</b></h2>
        <div class="cs-section_text">{{ __('home.our_team_is_committed_to_providing') }} <br> {{ __('home.we_are_passionate_about_our_work') }} </div>
        </div>
        
        
        <div class="cs-section_heading_right">
        <a href="{{ route('app_team') }}" class="cs-btn cs-style3 cs-btn_lg cs-accent_color cs-accent_color_2_hover cs-primary_font">
            <span class="cs-btn_text">{{ __('home.meet_the_whole_team') }} </span>
            <span class="cs-btn_icon cs-center"><i class="fas fa-arrow-right"></i></span>
        </a>
        </div>
        

    </div>
    <div class="cs-height_80 cs-height_lg_60"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="row cs-gap_70">
        <div class="col-lg-4">
            <div class="cs-team_member cs-style2 text-center">
                <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image border" data-src="{{ asset('assets/img/design-agency/team-member1.png') }}"></div>
                </div>
                {{--
                <div class="cs-member_social cs-accent_bg">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
                --}}
                </div>
                <div class="cs-member_info">
                    <h2 class="cs-member_name">{{ config('app.founder') }}</h2>
                    <div class="cs-member_designation">{{ __('home.president') }} <br>{{ __('home.general_manager') }} </div>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
        </div><!-- .col -->
        <div class="col-lg-4">
            <div class="cs-team_member cs-style2 text-center">
                <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image border" data-src="{{ asset('assets/img/design-agency/team-member2.png') }}"></div>
                </div>
                {{--
                <div class="cs-member_social cs-accent_bg">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
                --}}
                </div>
                <div class="cs-member_info">
                    <h2 class="cs-member_name">DON JOEL DIKOKO</h2><br>
                    <div class="cs-member_designation">{{ __('home.administrator') }} <br>{{ __('home.deputy_general_director') }} </div>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
        </div><!-- .col -->
        <div class="col-lg-4">
        <div class="cs-team_member cs-style2 text-center">
            <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image" data-src="{{ asset('assets/img/design-agency/team-member3.png') }}"></div>
                </div>
                {{--
                <div class="cs-member_social cs-accent_bg">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
                --}}
            </div>
            <div class="cs-member_info">
                <h2 class="cs-member_name">SAMBA CORNEILLE</h2> <br>
                <div class="cs-member_designation">{{ __('home.administrator') }} <br>{{ __('home.director_of_operations') }} </div>
            </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
        </div><!-- .col -->
    </div>
    </div>
    <div class="cs-height_105 cs-height_lg_45"></div>
</div>
<!-- End Team Member -->