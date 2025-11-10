@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op5">
        <div class="container">
          <div class="inner">
            <h1>{{ __('messages.king_queen_room_title') }}</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
              </li>
              <li>
                <a href="#">{{ __('messages.rooms') }}</a>
              </li>
              <li>{{ __('messages.king_queen_breadcrumb') }}</li>
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
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic2.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic2.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic3.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic3.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic4.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic4.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/queen/pic5.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic5.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic2.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic3.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic4.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/queen/pic5.png') }}" alt="Image"></div>
                </div>
              </div>
              <p style="text-align: justify;">
              {{ __('messages.matrimonial_room_concept') }}
              </p>
              <p style="text-align: justify;">
              {{ __('messages.matrimonial_room_capacity') }}
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
                <p class="section-subtitle">La habitación incluye</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Amenities Biodegradables</li>
                      <li>
                        <i class="fa fa-check"></i>Cama de Matrimonial</li>
                      <li>
                        <i class="fa fa-check"></i>Estacionamiento</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Conexiones USB</li>
                      <li>
                        <i class="fa fa-check"></i>WC y Ducha interior</li>
                    <li>
                        <i class="fa fa-check"></i>Sector de Descanso</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Wi-Fi</li>
                      <li>
                        <i class="fa fa-check"></i>Escritorio de trabajo</li>
                      <li>
                        <i class="fa fa-check"></i>Aire Acondicionado / Calefacción</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Frigobar</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="similar-rooms">
                <div class="section-title">
                  <h4 style="color: #454545 !important;">OTRAS HABITACIONES</h4>
                </div>
                <div class="row">
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="{{ url('room/detail/superior-king') }}">
                          <img src="{{ asset('public/frontend/images/rooms/superior_king/pic1.png') }}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                            <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                        </div>
                      </figure>
                      <div class="room-info">
                        <h3 class="room-title">
                          <a href="room.html">King Superior</a>
                        </h3>
                        <p>Disfruta de nuestra king superior kitchentte</p>
                      </div>
                    </div>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="{{ url('room/detail/twin') }}">
                          <img src="{{ asset('public/frontend/images/rooms/twin/pic1.png') }}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                            <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                        </div>
                      </figure>
                      <div class="room-info">
                        <h3 class="room-title">
                          <a href="room.html">Twin Kitchentte</a>
                        </h3>
                        <p>Disfruta de nuestra twin kitchentte</p>
                      </div>
                    </div>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="{{ url('room/detail/family') }}">
                          <img src="{{ asset('public/frontend/images/rooms/family/pic1.png') }}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                            <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                        </div>
                      </figure>
                      <div class="room-info">
                        <h4 class="room-title" style="font-size: 12px !important;">
                          <a href="room.html">Family</a>
                        </h4>
                        <p>Disfruta nuestra family</p>
                      </div>
                    </div>
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