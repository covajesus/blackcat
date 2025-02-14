@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op5">
        <div class="container">
          <div class="inner">
            <h1>HABITACIÓN TWIN CON KITCHENETTE</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Inicio</a>
              </li>
              <li>
                <a href="#">Habitaciones</a>
              </li>
              <li>Twin con kitchenette</li>
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
              Si viajas con amigo o familia, esta es la habitación ideal para que 2 huéspedes descansen por separado en el mismo lugar. El buen gusto del diseño lo encontraras en cada rincón.
              </p>
              <p style="text-align: justify;">
              Cada una de estas habitaciones están equipadas con 2 camas de 1 plza. ½ cada una, cuenta con sector de descanso, productos biodegradables certificados para disfrutar de una renovadora ducha, televisión con alternativas de canales de entretenimiento - noticias, deportes e infantil - wifi, aire acondicionado/calefacción, kitchenette completamente equipado y frigobar para acompañar un buen momento de relajo.
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
                        <i class="fa fa-check"></i>2 Camarotes de 1.5 plazas</li>
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
                        <i class="fa fa-check"></i>Kitchenette equipado</li>
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
                        <a href="{{ url('room/detail/superior_king') }}">
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
                        <p>Disfruta de nuestra king superior</p>
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