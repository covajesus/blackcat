@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op5">
        <div class="container">
          <div class="inner">
            <h1>{{ __('messages.twin_room_title') }}</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
              </li>
              <li>
                <a href="#">{{ __('messages.rooms') }}</a>
              </li>
              <li>{{ __('messages.twin_room_breadcrumb') }}</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="room">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- ROOM SLIDER -->
              <div class="room-slider">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic1.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic2.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic2.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic4.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic4.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic1.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic2.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/twin/pic4.png') }}" alt="Image"></div>
                </div>
              </div>
              <p style="text-align: justify;">
              {{ __('messages.twin_room_concept') }}
              </p>
              <p style="text-align: justify;">
              {{ __('messages.twin_room_capacity') }}
              </p>
              <br>
              <div style="background: #CCC !important; padding: 10px; text-align: justify;">
                <h5 style="font-size:13px;"><center><i class="fa fa-globe" aria-hidden="true"></i> {{ __('messages.environmental_consciousness') }}</center> </h5>
                <div>
                - {{ __('messages.towel_reuse') }}
                <br>
                - {{ __('messages.towel_change') }}
                <br>
                - {{ __('messages.no_smoking') }}                
                <br>
                - {{ __('messages.recycling') }}
                </div>
              </div>
              <br>
              <div class="section-title sm">
                <h4>{{ __('messages.room_services_title') }}</h4>
                <p class="section-subtitle">{{ __('messages.room_includes') }}</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.amenities_biodegradable') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.bunk_beds') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.parking') }}</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.usb_connections') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.wc_shower') }}</li>
                    <li>
                        <i class="fa fa-check"></i>{{ __('messages.rest_area') }}</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.wifi') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.emergency_button') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.air_conditioning') }}</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.equipped_kitchenette') }}</li>
                      <li>
                        <i class="fa fa-check"></i>{{ __('messages.minibar') }}</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <!-- WIDGET -->
                <aside class="widget widget-help">
                  <h4 class="widget-title">CONTÁCTANOS</h4>
                  <div class="phone">
                    <a href="tel:+56 9 49105984">
                       +56 9 49105984
                    </a>
                  </div>
                  <div class="email" style="font-size: 12px !important;">
                    <a href="mailto:reservas@blackcathostal.com">reservas@blackcathostal.com</a>
                  </div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </main>
      
@endsection