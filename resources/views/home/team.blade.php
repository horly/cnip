@extends('base')
@section('title', __('home.our_team'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
    <div class="cs-hero cs-style8 cs-type1 cs-center text-center">
        <div class="container">
            <div class="cs-hero_text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.our') }}</b> {{ __('home.team') }}</h1>
                <a href="#service" class="cs-down_btn cs-accent_color cs-accent_color_2_hover cs-smoth_scroll"><i class="fas fa-angle-down"></i></a>
            </div>
        </div>
        <div class="cs-hero_blur_shape">
        <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
        </div>
    </div>
    <!-- End Hero -->

     <!-- Start Team Member -->
  <div class="cs-height_140 cs-height_lg_80"></div>
  <div class="container">
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

      <div class="col-lg-4">
        <div class="cs-team_member cs-style2 text-center">
            <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image" data-src="{{ asset('assets/img/design-agency/team-member4.png') }}"></div>
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
                    <h2 class="cs-member_name">BOKUTA MPIA ANDREA</h2> <br>
                    <div class="cs-member_designation">{{ __('home.secretary') }} </div>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
      </div><!-- .col -->

      <div class="col-lg-4">
        <div class="cs-team_member cs-style2 text-center">
            <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image" data-src="{{ asset('assets/img/design-agency/team-member5.png') }}"></div>
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
                    <h2 class="cs-member_name">LUNZIHIRWA CHUBAKA ROMEO</h2>
                    <div class="cs-member_designation">{{ __('home.sales_and_marketing_manager') }} </div>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
      </div><!-- .col -->

      <div class="col-lg-4">
        <div class="cs-team_member cs-style2 text-center">
            <div class="cs-member_image_box">
                <div class="cs-member_image_box_in">
                    <div class="cs-member_image" data-src="{{ asset('assets/img/design-agency/team-member6.png') }}"></div>
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
                    <h2 class="cs-member_name">LOMBE MASUKA JORDY</h2><br>
                    <div class="cs-member_designation">{{ __('home.executive_assistant') }} </div>
                </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
      </div><!-- .col -->

    </div>
  </div>
  <div class="cs-height_175 cs-height_lg_70"></div>
  <!-- End Team Member -->

  {{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}

@endsection