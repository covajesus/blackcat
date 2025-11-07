@extends('layouts.app')

@section('content')
      <!-- ========== REVOLUTION SLIDER ========== -->
      <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
          <ul>
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider4.jpg') }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
              <!-- LAYER NR. 1 -->
              <h1
                class="tp-caption tp-resizeme"
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
                {{ __('messages.welcome_title') }}</h1>
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
              <img src="{{ asset('public/frontend/images/slider/slider2.jpg') }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
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
                style="z-index: 5; color: #fff; font-weight: 900;">HOTELERÍA URBANA
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
                style="z-index: 6; color: #fff;">Vanguardia y modernidad
              </div>
            </li>
            <!-- SLIDE NR. 2 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider3.jpg') }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
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
                style="z-index: 5; color: #fff; font-weight: 900;">INSPIRADO EN LA CULTURA
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
                style="z-index: 6; color: #fff;">Barrio Brasil - Santiago de Chile
              </div>
              <!-- SLIDE NR. 2 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/slider/slider1.jpg') }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
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
                style="z-index: 5; color: #fff; font-weight: 900;">EL MEJOR LUGAR DE SANTIAGO
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
                style="z-index: 6; color: #fff;">Ven y visitanos
              </div>
            </li>
          </ul>
        </div>
        <!--Inicio Codigo FnsRooms Español-->
          <div id="form_reservas" class="detail_room" style="padding: 0px; margin-top: -60px; text-align:center !important;"></div>
          <script type="text/javascript" src="https://admin.fnsbooking.com/motores/comunes/js/jquery-1.7.1.min.js"></script><!-- Si la web ya carga jQuery no hace falta poner esta línea -->
          <script src="https://admin.fnsbooking.com/motores/js/2326/fe_es.js"></script>
        <!--Fin Codigo FnsRooms-->
      </div>
      
      <!-- ========== ABOUT ========== -->
      <section class="about mt100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                  <h4 class="text-uppercase" style="color: #454545 !important;">Black Cat Hostal</h4>
                  <p class="section-subtitle">Alta calidad en el servicio.</p>
                </div>
                <div class="info-branding" style="text-align: justify;">
                  <p>Creamos un nuevo concepto en la Hostelería Boutique, insertándonos en un entorno urbano, cultural y patrimonial. Con la perfecta mezcla de tradición e historia nos ubicamos en el Barrio Brasil, que es parte del casco antiguo de Santiago y que sin duda te envolverá al igual que nuestros espacios y servicios.<br><br>Sumérgete en las hermosas construcciones del siglo XIX que ofrece este emblemático sector de Santiago, junto a su diversidad cultural, importancia patrimonial y riqueza arquitectónica. Descubre este circuito imperdible para conocer la historia de Chile, lugares cercanos como el Museo de la Memoria, Barrio Concha y Toro y un sinfín de atracciones.</p>
                  
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== ROOMS ========== -->
      <section class="special-rooms">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #fff !important;">NUESTRAS HABITACIONES</h4>
            <p class="section-subtitle" style="color: #fff !important;">Nuestras Habitaciones Favoritas</p>
          </div>
          <div class="row">
            <!-- ITEM -->
            <div class="col-md-4">
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
                  <h2 class="room-title">
                    <a href="room.html">Family</a>
                  </h2>
                  <p>Disfruta nuestra habitación familiar</p>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ url('room/detail/king-queen') }}">
                    <img src="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}" class="img-fluid" alt="Image">
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
                    <a href="room.html">King & Queen Estandar</a>
                  </h2>
                  <p>Disfruta nuestra habitación king & queen estandar</p>
                </div>
              </div>
            </div>
            <!-- ITEM -->
            <div class="col-md-4">
              <div class="room-grid-item">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="{{ url('room/detail/twin') }}">
                    <img src="{{ asset('public/frontend/images/rooms/twin/pic1.png') }}" class="img-fluid" alt="Image">
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
                    <a href="room.html">Twin Kitchenette</a>
                  </h2>
                  <p>Disfruta nuestra habitación twin kitchenette</p>
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
            <h4 style="color: #454545 !important;">NUESTROS SERVICIOS</h4>
            <p class="section-subtitle">Revisa alguno de los servicios que ofrecemos</p>
          </div>
          <div class="row">
            <div class="col-lg-7 col-12">
              <div data-slider-id="services" class="services-owl owl-carousel">
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place1.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Comedor</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place2.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Patio de Reuniones</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place3.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Eventos</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place4.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Paseos</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place5.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Verano</h4>
                  </figcaption>
                </figure>
                <figure class="gradient-overlay">
                  <img src="{{ url('public/frontend/images/places/place6.jpg') }}" class="img-fluid" alt="Image">
                  <figcaption>
                    <h4>Coffee & Bar</h4>
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
                    <h5>Comedor</h5>
                    <p>
                      Disfruta un desayuno continental servido a la habitación de 08:00 a 11:30 am.
                    </p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-comments"></i>
                  </span>
                  <div class="media-body">
                    <h5>Patio de Reuniones</h5>
                    <p>Conoce las áreas comunes para el relajo, ambientado por muralistas chilenos.</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-regular fa-calendar-days"></i>
                  </span>
                  <div class="media-body">
                    <h5>Eventos</h5>
                    <p>Reserva un espacio exclusivo solo para ti y acompañado de nuestro mejor servicio.</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-bicycle"></i>
                  </span>
                  <div class="media-body">
                    <h5>Paseos</h5>
                    <p>Arriendo de bicicletas para recorrer la ciudad.</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-umbrella-beach"></i>
                  </span>
                  <div class="media-body">
                    <h5>Verano</h5>
                    <p>Disfruta un espacio de piscina y relajo.</p>
                  </div>
                </div>
                <div class="owl-thumb-item">
                  <span class="media-left">
                    <i class="fa-solid fa-mug-saucer"></i>
                  </span>
                  <div class="media-body">
                    <h5>Coffee & Bar</h5>
                    <p>Momentos únicos con productos exclusivos.</p>
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
            <h4 style="color: #fff !important;">NUESTRA GALERÍA</h4>
            <p class="section-subtitle">Revisa las imágenes de nuestra galería</p>
          </div>
          <div class="gallery-owl owl-carousel image-gallery">
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic1.ppg') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic1.png') }}" alt="Image">
                </a>
                <figcaption>Desayunos</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic2.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic2.png') }}" alt="Image">
                </a>
                <figcaption>Espacios</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic3.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic3.png') }}" alt="Image">
                </a>
                <figcaption>Seguridad</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic8.png') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic8.png') }}" alt="Image">
                </a>
                <figcaption>Terrazas</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic5.jpg') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic5.jpg') }}" alt="Image">
                </a>
                <figcaption>Diseño Único</figcaption>
              </figure>
            </div>
            <!-- ITEM -->
            <div class="gallery-item">
              <figure class="gradient-overlay image-icon">
                <a href="{{ asset('public/frontend/images/gallery/pic6.jpg') }}">
                  <img src="{{ asset('public/frontend/images/gallery/pic6.jpg') }}" alt="Image">
                </a>
                <figcaption>Mobiliario</figcaption>
              </figure>
            </div>
           
          </div>
        </div>
      </section>
      <!-- ========== TESTIMONIALS ========== -->
      <section class="testimonials gray">
        <div class="container">
          <div class="section-title">
            <h4 style="color: #454545 !important;">COMENTARIOS</h4>
            <p class="section-subtitle">Que dicen nuestros huéspedes</p>
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
                <p>Excelente Ubicación , Instalaciones de 1 er Nivel , Comodo ambiente Familiar y la atención de las personas prestan sus Servicio de Muy Buena Calidad .
Muy conforme con la Visita y Atención de Lujo.Volvere a visitarlos en mi proximo viaje sin duda.</p>
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
                <p>Todo se cumplió de manera óptima: las instalaciones son de primer nivel en comodidad, limpieza y ambiente, y los asistentes se sintieron muy bien durante su estadía, pudiendo disfrutar también del sector.
El staff respondió a nuestros requerimientos con excelente disposición e hicieron de la estadía del grupo una muy buena experiencia.</p>
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
                <p>
                Fuimos para San Valentín con mi pareja y nuestro bebé, y la experiencia fue maravillosa. Todo el equipo de Black Cat fueron muy simpáticos y atentos con nosotros... Incluso jugaron con nuestro hijo. Y el lugar es bellísimo, con buena ubicación y mucho estilo. Muy recomendable!
                </p>
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
                <p>
                100% recomendado, cómodo, seguro y una excelente atención. Los costos de las habitaciones son costosos pero lo valen son nuevas y están en excelente estado. Ambiente familiar o para ir con amigos a tomar cervezas y comer buena rica tabla de empanadas 
                </p>
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
                <p>
                Excelente hostal estuve varios Dias me encanto la calidez de su personal la limpieza y orden del hostal muy bonito y recomendable localizacion muy Buena te hacen sentir Como en casa regresare en Julio 2020.
                </p>
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
                Muy linda experiencia, es un lugar muy bonito muy buena ubicación, la habitación es muy cómoda acogedora y bien equipadas, la atención del staff fue muy buena con muy buena disposición y el desayuno estuvo muy rico y variado, cereales, frutas, yugurt, cecinas, mermeladas, etc.
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
              <h4 style="color: #fff !important;">Conócenos por dentro</h4>
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
                <h4 style="color: #454545 !important;">Contáctanos</h4>
                <p class="section-subtitle">Contáctanos</p></p>
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
                <div class="alert alert-success" role="alert">
                  ¡Gracias por preferirnos! dentro de un momento te responderemos
                </div>
              @endif
              <form action="{{ url('message/store') }}" method="post">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="Nombre" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="Correo">
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="text" placeholder="Teléfono">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" type="text" placeholder="Asunto">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Mensaje"></textarea>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LepQOoZAAAAAIIoxD45a2oigSsRlKArTyIlENGu"></div>
                </div>
                
                <button class="btn" type="submit">
                  <input class="form-control" name="home" type="hidden" value="1">
                  <i class="fa fa-location-arrow"></i>Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ========== INSTAGRAM ========== -->
      <section class="instgram">
        <div class="section-title aligncenter">
          <p class="section-subtitle" style="color: #FF8000 !important; font-size:20px !important;">Hola! revisa nuestras fotos en Instagram
            <a href="https://www.instagram.com/blackcathostal/" target="_blank">@blackcathostal</a>
          </p>
        </div>
        <div id="instafeed-gallery" class="owl-carousel instagram-owl"></div>
      </section>
@endsection
