@extends('layouts.app')

@section('content')
    <!-- ========== REVOLUTION SLIDER ========== -->
    <div class="slider">
        <div style="display:none" data-version="5.4.5">
            <ul>
              <li data-transition="crossfade" class="no-overlay">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('public/frontend/images/slider/slider5.jpg') }}" 
                         alt="{{ __('messages.slider_hostal_alt') }}" 
                         title="{{ __('messages.slider_hostal_alt') }}" 
                       
                       
                         data-no-retina="" 
                         loading="eager">
              </li>
                <li data-transition="crossfade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('public/frontend/images/slider/slider4.jpg') }}" 
                         alt="{{ __('messages.slider_hostal_alt') }}" 
                         title="{{ __('messages.slider_hostal_alt') }}" 
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         data-bgparallax="10" 
                         class="rev-slidebg" 
                         data-no-retina="" 
                         loading="eager">
                    
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption tp-resizeme"
                        data-x="center"
                        data-hoffset=""
                        data-y="320"
                        data-voffset=""
                        data-responsive_offset="on"
                        data-fontsize="['80','50','40','30']"
                        data-lineheight="['60','50','40','30']"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">
                        {{ __('messages.welcome_title') }}
                    </h1>
                    
                    <!-- LAYER NR. 2 -->
                    <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">{{ __('messages.welcome_subtitle') }}</div>
              <!-- LAYER NR. 3 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="-120"
                data-y="480"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
              </div>
              <!-- LAYER NR. 4 -->
              <div
                class="tp-caption"
                data-x="center"
                data-hoffset="128"
                data-y="480"
                data-voffset=""
                data-responsive_offset="on"
                data-whitespace="nowrap"
                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 11;">
              </div>
              <!-- LAYER NR. 5 -->
            </li>
            <!-- SLIDE NR. 2 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider2.jpg') }}" alt="{{ __('messages.slider_rooms_alt') }}" title="{{ __('messages.slider_rooms_alt') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" loading="eager">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['70','50','40','25']"
                data-lineheight="['60','50','40','25']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">{{ __('messages.slide2_title') }}
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">{{ __('messages.slide2_subtitle') }}
              </div>
            </li>
            <!-- SLIDE NR. 3 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider3.jpg') }}" alt="{{ __('messages.slider_culture_alt') }}" title="{{ __('messages.slider_culture_alt') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" loading="eager">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['70','50','40','25']"
                data-lineheight="['60','50','40','25']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">{{ __('messages.slide3_title') }}
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">{{ __('messages.slide3_subtitle') }}
              </div>
            </li>
            <!-- SLIDE NR. 4 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider1.jpg') }}" alt="{{ __('messages.slider_hostal_alt') }}" title="{{ __('messages.slider_hostal_alt') }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="" loading="eager">
              <!-- LAYER NR. 1 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="320"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="['70','50','40','25']"
                data-lineheight="['60','50','40','25']"
                data-whitespace="nowrap"
                data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 5; color: #fff; font-weight: 900;">{{ __('messages.slide4_title') }}
              </div>
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption tp-resizeme"
                data-x="center"
                data-hoffset=""
                data-y="410"
                data-voffset=""
                data-responsive_offset="on"
                data-fontsize="16"
                data-lineheight="16"
                data-whitespace="nowrap"
                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                style="z-index: 6; color: #fff;">{{ __('messages.slide4_subtitle') }}
              </div>
            </li>
          </ul>
        </div>
        <!--Inicio Codigo FnsRooms-->
          <div id="form_reservas" class="detail_room" style="padding: 0px; margin-top: -60px; text-align:center !important;"></div>
          <script type="text/javascript" src="https://admin.fnsbooking.com/motores/comunes/js/jquery-1.7.1.min.js"></script>
          @php
            $locale = app()->getLocale();
            // Map locales to widget languages
            if ($locale === 'en') {
                $widgetLocale = 'en';
            } elseif ($locale === 'pt') {
                $widgetLocale = 'pt';
            } else {
                $widgetLocale = 'es';
            }
          @endphp
          <script type="text/javascript" src="https://admin.fnsbooking.com/motores/js/2326/fe_{{ $widgetLocale }}.js"></script>
        <!--Fin Codigo FnsRooms-->
      </div>
      
      <!-- ========== ABOUT ========== -->
      <section class="about mt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                  <h4 class="text-uppercase" style="color: #454545 !important;">Black Cat Hostal</h4>
                  <p class="section-subtitle">{{ __('messages.high_quality_service') }}</p>
                </div>
                <div class="info-branding" style="text-align: justify;">
                  <p>{!! __('messages.about_description') !!}</p>
                  
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== ROOMS ========== -->
      <section class="special-rooms">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #fff !important;">{{ __('messages.our_rooms_title') }}</h4>
            <p class="section-subtitle" style="color: #fff !important;">{{ __('messages.favorite_rooms') }}</p>
          </div>
          <div class="row">
            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ app()->getLocale() == 'es' ? url('room/detail/family') : url(app()->getLocale() . '/room/detail/family') }}" title="{{ __('messages.view_family_room') }}" aria-label="{{ __('messages.view_family_room') }}">
                    <img src="{{ asset('public/frontend/images/rooms/family/pic1.png') }}" class="img-fluid" alt="{{ __('messages.family_room_image_alt') }}" title="{{ __('messages.family_room_image_alt') }}" loading="lazy">
                  </a>
                  <div class="room-services">
                    <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                    <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                  </div>
                </figure>
                <div class="room-info">
                  <h2 class="room-title">
                    <a href="{{ app()->getLocale() == 'es' ? url('room/detail/family') : url(app()->getLocale() . '/room/detail/family') }}" title="{{ __('messages.view_family_room') }}">{{ __('messages.family_room') }}</a>
                  </h2>
                  <p>{{ __('messages.family_room_desc') }}</p>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ app()->getLocale() == 'es' ? url('room/detail/king-queen') : url(app()->getLocale() . '/room/detail/king-queen') }}" title="{{ __('messages.view_king_queen_room') }}" aria-label="{{ __('messages.view_king_queen_room') }}">
                    <img src="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}" class="img-fluid" alt="{{ __('messages.king_queen_room_image_alt') }}" title="{{ __('messages.king_queen_room_image_alt') }}" loading="lazy">
                  </a>
                  <div class="room-services">
                    <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Frigobar"></i>
                    <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                    <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                  </div>
                </figure>
                <div class="room-info">
                  <h2 class="room-title">
                    <a href="{{ app()->getLocale() == 'es' ? url('room/detail/king-queen') : url(app()->getLocale() . '/room/detail/king-queen') }}" title="{{ __('messages.view_king_queen_room') }}">{{ __('messages.king_queen_room') }}</a>
                  </h2>
                  <p>{{ __('messages.king_queen_room_desc') }}</p>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ url('room/detail/twin') }}" title="{{ __('messages.view_twin_room') }}" aria-label="{{ __('messages.view_twin_room') }}">
                    <img src="{{ asset('public/frontend/images/rooms/twin/pic1.png') }}" class="img-fluid" alt="{{ __('messages.twin_room_image_alt') }}" title="{{ __('messages.twin_room_image_alt') }}" loading="lazy">
                  </a>
                  <div class="room-services">
                    <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Frigobar"></i>
                    <i class="fa fa-bath" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Agua Caliente"></i>
                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Televisión por cable"></i>
                    <i class="fa fa-car" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="" data-original-title="Estacionamiento"></i>
                  </div>
                </figure>
                <div class="room-info">
                  <h2 class="room-title">
                    <a href="{{ url('room/detail/twin') }}" title="{{ __('messages.view_twin_room') }}">{{ __('messages.twin_room') }}</a>
                  </h2>
                  <p>{{ __('messages.twin_room_desc') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== SERVICES ========== -->
      <section class="services">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #454545 !important;">{{ __('messages.our_services') }}</h4>
            <p class="section-subtitle">{{ __('messages.services_subtitle') }}</p>
          </div>
          <div class="row">
            <div class="col-lg-7 col-12">
              <div data-slider-id="services" class="services-owl owl-carousel">
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place1.jpg') }}" class="img-fluid" alt="{{ __('messages.service_1_alt') }}" title="{{ __('messages.service_1_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_dining_room') }}</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place2.jpg') }}" class="img-fluid" alt="{{ __('messages.service_2_alt') }}" title="{{ __('messages.service_2_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_meeting_patio') }}</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place3.jpg') }}" class="img-fluid" alt="{{ __('messages.service_3_alt') }}" title="{{ __('messages.service_3_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_events') }}</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place4.jpg') }}" class="img-fluid" alt="{{ __('messages.service_4_alt') }}" title="{{ __('messages.service_4_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_tours') }}</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place5.jpg') }}" class="img-fluid" alt="{{ __('messages.service_5_alt') }}" title="{{ __('messages.service_5_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_summer') }}</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place6.jpg') }}" class="img-fluid" alt="{{ __('messages.service_6_alt') }}" title="{{ __('messages.service_6_alt') }}" loading="lazy">
                  <figcaption>
                    <h4>{{ __('messages.service_coffee_bar') }}</h4>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-lg-5 col-12">
              <div class="owl-thumbs" data-slider-id="services">
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-utensils"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.breakfast_included') }}</h5>
                    <p>
                      {{ __('messages.breakfast_service') }}
                    </p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-comments"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.service_meeting_patio') }}</h5>
                    <p>{{ __('messages.service_meeting_patio_desc') }}</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-regular fa-calendar-days"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.events') }}</h5>
                    <p>{{ __('messages.events_description') }}</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-bicycle"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.tours') }}</h5>
                    <p>{{ __('messages.tours_description') }}</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-umbrella-beach"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.service_summer') }}</h5>
                    <p>{{ __('messages.service_summer_desc') }}</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-mug-saucer"></i>
                  </span>
                  <div class="media-body">
                    <h5>{{ __('messages.service_coffee_bar') }}</h5>
                    <p>{{ __('messages.service_coffee_bar_desc') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== GALLERY ========== -->
      <section class="special-gallery">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #fff !important;">{{ __('messages.our_gallery_title') }}</h4>
            <p class="section-subtitle">{{ __('messages.gallery_subtitle') }}</p>
          </div>
          <div class="gallery-owl owl-carousel image-gallery">
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic1.ppg') }}" title="{{ __('messages.gallery_hostal_alt') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic1.png') }}" alt="{{ __('messages.gallery_hostal_alt') }}" title="{{ __('messages.gallery_hostal_alt') }}" loading="lazy">
                </a>
                <figcaption>{{ __('messages.breakfasts') }}</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic2.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic2.png') }}" alt="{{ __('messages.gallery_spaces') }}">
                </a>
                <figcaption>{{ __('messages.gallery_spaces') }}</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic3.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic3.png') }}" alt="{{ __('messages.gallery_security') }}">
                </a>
                <figcaption>{{ __('messages.gallery_security') }}</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic8.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic8.png') }}" alt="{{ __('messages.gallery_terraces') }}">
                </a>
                <figcaption>{{ __('messages.gallery_terraces') }}</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic5.jpg') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic5.jpg') }}" alt="{{ __('messages.gallery_unique_design') }}">
                </a>
                <figcaption>{{ __('messages.gallery_unique_design') }}</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic6.jpg') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic6.jpg') }}" alt="{{ __('messages.gallery_furniture') }}">
                </a>
                <figcaption>{{ __('messages.gallery_furniture') }}</figcaption>
              </figure>
            </div>
           
          </div>
        </div>
      </section>
      <!-- ========== TESTIMONIALS ========== -->
      <section class="testimonials gray">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #454545 !important;">{{ __('messages.testimonials_title') }}</h4>
            <p class="section-subtitle">{{ __('messages.testimonials_subtitle') }}</p>
          </div>
          <div class="owl-carousel testimonials-owl">
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user1.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Francisco</h4>
                </div>
                <div class="rating">
                  <i class="fa fa-star voted" aria-hidden="true"></i>
                  <i class="fa fa-star voted" aria-hidden="true"></i>
                  <i class="fa fa-star voted" aria-hidden="true"></i>
                  <i class="fa fa-star voted" aria-hidden="true"></i>
                  <i class="fa fa-star voted" aria-hidden="true"></i>
                </div>
                <p>{{ __('messages.testimonial_francisco') }}</p>
              </div>
            </div>
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user2.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Magdalena L</h4>
                  <div class="rating">
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  </div>
                </div>
                <p>{{ __('messages.testimonial_magdalena') }}</p>
              </div>
            </div>
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user3.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Daryl Phillips</h4>
                  <div class="rating">
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  </div>
                </div>
                <p>{{ __('messages.testimonial_daryl') }}</p>
              </div>
            </div>
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user4.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Nitzay M</h4>
                  <div class="rating">
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  </div>
                </div>
                <p>{{ __('messages.testimonial_nitzay') }}</p>
              </div>
            </div>
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user5.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Hugo Vargas</h4>
                  <div class="rating">
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  </div>
                </div>
                <p>{{ __('messages.testimonial_hugo') }}</p>
              </div>
            </div>
            <!-- ITEM -->
            <div class="item">
              <div class="testimonial-item">
                <div class="author-img">
                  <img alt="Image" class="img-fluid" src="{{ url('public/frontend/images/users/user6.jpg') }}">
                </div>
                <div class="author">
                  <h4 class="name">Luz Maria Salazar</h4>
                  <div class="rating">
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                    <i class="fa fa-star voted" aria-hidden="true"></i>
                  </div>
                </div>
                <p>
                {{ __('messages.testimonial_text') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- ========== VIDEO ========== -->
      <section class="video np parallax gradient-overlay op6" data-src="{{ url('public/frontend/images/video.jpg')  }}" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay">
          <div class="container">
            <div class="section-title">
              <h4 style="color: #fff !important;">{{ __('messages.video_title') }}</h4>
            </div>
            <div class="video-popup">
              <a class="popup-vimeo" href="https://www.youtube.com/watch?v=DprHw2n-8QU?autoplay=1">
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      
      <!-- ========== CONTACT V2 ========== -->
      <section class="contact-v2 gray">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="section-title">
                <h4 style="color: #454545 !important;">{{ __('messages.contact_info') }}</h4>
                <p class="section-subtitle">{{ __('messages.contact_info') }}</p>
              </div>
              <ul class="contact-details">
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  Compañia de Jesús 1921. Barrio Brasil. Santiago.</li>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  +56 9 49105984
                </li>
                <li>
                  <i class="fa fa-globe"></i>
                  www.blackcathostal.com</li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:reservas@blackcathostal.com">reservas@blackcathostal.com</a>
                </li>
              </ul>
            </div>
            <div class="col-md-7">
              @if(Session::get('status') == 1)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ __('messages.contact_success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              @if(Session::get('status') == 0 && Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ Session::get('error') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              <form action="{{ url('message/store') }}" method="post">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="{{ __('messages.form_name') }}" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="{{ __('messages.form_email') }}" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="text" placeholder="{{ __('messages.form_phone') }}" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" type="text" placeholder="{{ __('messages.form_subject') }}" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="{{ __('messages.form_message') }}" required></textarea>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" id="recaptcha-home"></div>
                  <small class="form-text text-muted">{{ __('messages.form_required') }}</small>
                </div>
                
                <button class="btn" type="submit">
                  <input class="form-control" name="home" type="hidden" value="1">
                  <i class="fa fa-location-arrow"></i>{{ __('messages.form_submit') }}
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== INSTAGRAM ========== -->
      <section class="instgram">
        <div class="section-title aligncenter">
          <p class="section-subtitle" style="color: #FF8000 !important; font-size:20px !important;">{{ __('messages.instagram_text') }}
            <a href="https://www.instagram.com/blackcathostal/" target="_blank">@blackcathostal</a>
          </p>
        </div>
        <div id="instafeed-gallery" class="owl-carousel instagram-owl"></div>
      </section>
@endsection
