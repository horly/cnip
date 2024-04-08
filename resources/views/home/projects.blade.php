@extends('base')
@section('title', __('home.projects'))
@section('content')

    @include('navbar.navbar')

    <!-- Start Hero -->
  <div class="cs-hero cs-style8 cs-type1 cs-center text-center" data-src="{{ asset('assets/img/design-agency/icon-box-bg2.jpg') }}">
    <div class="container">
      <div class="cs-hero_text">
        <h1 class="cs-hero_title"><b class="cs-accent_color">{{ __('home.projects') }} </b></h1>
        <a href="#next_section" class="cs-down_btn cs-accent_color cs-accent_color_2_hover cs-smoth_scroll"><i class="fas fa-angle-down"></i></a>
      </div>
    </div>
    <div class="cs-hero_blur_shape">
      <div class=""><img src="{{ asset('assets/img/design-agency/hero-blur-shape.png') }}" alt=""></div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Start Portfolio -->
  <div id="next_section">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="row">

            @foreach ($projets as $projet)
            <div class="col-lg-6">
                <a href="#" class="cs-portfolio cs-style3 cs-type1">
                    <div class="cs-portfolio_img"><img class="border" src="{{ asset('assets/img/design-agency')}}/{{ $projet->img_name }}.png" alt=""></div>
                    <h2 class="cs-portfolio_title">{{ __('home.' . $projet->description )}}</h2>
                </a>
                <div class="cs-height_30 cs-height_lg_30"></div>
                </div><!-- .col -->
            @endforeach
        
      </div>
      <div class="cs-height_40 cs-height_lg_40"></div>
      
      <div class="cs-post_pagination cs-style2 cs-center cs-medium cs-primary_color">
        {{ $projets->onEachSide(1)->links() }}
      </div>

    </div>
    <div class="cs-height_110 cs-height_lg_50"></div>
  </div>
  <!-- End Portfolio -->



{{-- Start Footer --}}
@include('footer.footer')
{{-- End Footer --}}


@endsection