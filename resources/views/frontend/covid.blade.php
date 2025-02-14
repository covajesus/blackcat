@extends('layouts.app')

@section('content')

      <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
          <ul>
            <!-- SLIDE NR. 1 -->
            <li data-transition="crossfade">
              <!-- MAIN IMAGE -->
              <img src="{{ asset('public/frontend/images/places/place3.png') }}" alt="Image" title="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
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
                MEDIDAS PREVENTIVAS <br>COVID-19</h1>
              <!-- LAYER NR. 2 -->
              
            </li>
          </ul>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="restaurant">
        <div class="container">
            
            <div class="row">
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-8 col-md-6">
                      <h4 class="text-uppercase mt40 mb20">Sintomas</h4>
                      <div class="info">
                        <p style="text-align: justify !important;">
                        - Fiebre (over 37.8°C or 100.4°F).<br>
                        - Tos.<br>
                        - Garganta reseca.<br>
                        - Dolor muscular.<br>
                        - Dificultad para respirar.<br>
                        - Dolor de pecho.<br>
                        - Perdida de apetito o olfato.<br>
                        - Dolor de cabeza.<br>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-8 col-md-6">
                      <h4 class="text-uppercase mt40 mb20">Higiene personal</h4>
                      <div class="info">
                        <p style="text-align: justify !important;">
                        - Lávese las manos con agua y jabón durante al menos 20 segundos.<br>
                        - Cúbrase la nariz y la boca con la parte interior de su brazo cuando estornude o tosa.<br>
                        - El uso de mascarilla desechable es opcional para el personal y público en general.<br>
                        - Use alcohol en gel, disponible en diferentes áreas del hostal.<br>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-12 col-sm-12">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <h2 class="text-uppercase mt40 mb20">INFÓRMANOS</h2>
                      <div class="info">
                        <p>
                        Si crees que tienes síntomas, comunícate con el Área de Recepción y el personal de turno, te indicará el procedimiento.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection