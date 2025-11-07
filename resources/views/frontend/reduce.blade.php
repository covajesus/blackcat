@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op5">
        <div class="container">
          <div class="inner">
            <h1>{{ __('messages.reduce_room_title') }}</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
              </li>
              <li>
                <a href="#">{{ __('messages.rooms') }}</a>
              </li>
              <li>{{ __('messages.reduce_room_breadcrumb') }}</li>
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
                      <a href="{{ asset('public/frontend/images/rooms/reduce/pic1.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic1.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/reduce/pic2.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic2.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="{{ asset('public/frontend/images/rooms/reduce/pic3.png') }}">
                        <img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic3.png') }}" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic1.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic2.png') }}" alt="Image"></div>
                  <div class="item"><img class="img-fluid" src="{{ asset('public/frontend/images/rooms/reduce/pic3.png') }}" alt="Image"></div>
                </div>
              </div>
              <p sstyle="text-align: justify;">
              Iniciamos este lindo proyecto, conscientes de la inclusión - movilidad reducida – facilitando accesos a las diferentes áreas y específicamente a la habitación, complementando el diseño y estilo que nos diferencia. 
              La habitación está equipada para recibir a 2 huéspedes, cuenta con sector de descanso, productos biodegradables certificados para disfrutar de una renovada ducha, wifi, aire acondicionado/calefacción, escritorio de trabajo y frigobar para acompañar un buen momento de relajo. 
              </p>
              <p sstyle="text-align: justify;">
              La habitación está equipada para recibir a 2 huéspedes, cuenta con sector de descanso, productos biodegradables certificados para disfrutar de una renovada ducha, wifi, aire acondicionado/calefacción, escritorio de trabajo y frigobar para acompañar un buen momento de relajo. 
              </p>
              <br>
              <div style="background: #CCC !important; padding: 10px; text-align: justify;">
                <h5 style="font-size:13px;"><center><i class="fa fa-globe" aria-hidden="true"></i> TRABAJEMOS JUNTOS CON LA CONCIENCIA DEL MEDIO AMBIENTE</center> </h5>
                <div>
                - Si quieres reutilizar las toallas, indícanos dejándolas colgadas en los toalleros, así sabremos que también te sumas.
                <br>
                - Si desean cambio de tollas, indícanos dejándolas en el lavamanos dentro de su respectiva bolsa, así sabremos que debemos cambiarlas.
                <br>
                - En las habitaciones está prohibido fumar, te invitamos a conocer las terrazas habilitadas.                
                <br>
                - Déjanos los desechos y nosotros los trasladamos a los contenedores de reciclaje.
                </div>
              </div>
              <br>
              <div class="section-title sm">
                <h4>SERVICIOS DE LA HABITACIÓN</h4>
                <p class="section-subtitle">La habitación incluye</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Amenities Biodegradables</li>
                      <li>
                        <i class="fa fa-check"></i>Para aceptar 2 huéspedes</li>
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
                        <i class="fa fa-check"></i>Sector de descanso</li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Wi-Fi</li>
                      <li>
                        <i class="fa fa-check"></i>Botón de Emergencia</li>
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
                        <a href="{{ url('room/detail/queen') }}">
                          <img src="{{ asset('public/frontend/images/rooms/queen/pic1.png') }}" class="img-fluid" alt="Image">
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
                          <a href="room.html">King & Queen Estándar</a>
                        </h3>
                        <p>Disfruta de nuestra king & queen estándar</p>
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