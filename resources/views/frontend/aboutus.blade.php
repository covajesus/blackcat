@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op6">
        <div class="container">
          <div class="inner">
            <h1>NOSOTROS BLACK CAT HOSTAL</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Inicio</a>
              </li>
              <li>Nosotros Black Cat Hostal</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="entry">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h4 class="text-uppercase" style="color: #454545 !important;">Black Cat Hostal</h4>
                  <p class="section-subtitle">Hostal Boutique</p>
                </div>
                <div class="info-branding">
                  <p style="text-align: justify;">Black Cat Hostal Boutique es el aliado perfecto para iniciar un viaje inolvidable por Chile y América Latina. En su interior cuenta con 29 habitaciones y 4 categorías de espacios amplios, cálidos y sofisticados, que rescatan la personalidad, colores y urbanismo del barrio.</p>
<br>Creamos un nuevo concepto en la Hostelería Boutique, insertándonos en un entorno urbano, cultural y patrimonial. Con la perfecta mezcla de tradición e historia nos ubicamos en el Barrio Brasil, que es parte del casco antiguo de Santiago y que sin duda te envolverá al igual que nuestros espacios y servicios.<br><br>Sumérgete en las hermosas construcciones del siglo XIX que ofrece este emblemático sector de Santiago, junto a su diversidad cultural, importancia patrimonial y riqueza arquitectónica. Descubre este circuito imperdible para conocer la historia de Chile, lugares cercanos como el Museo de la Memoria, Barrio Concha y Toro y un sinfín de atracciones.




                </div>
              </div>
            </div>
            <h4 class="text-uppercase mt40 mb20">Caracteristicas</h4>
            <div class="row">
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-hotel"></i>
                  <span class="number" data-count="29"></span>
                  <div class="text">Habitaciones</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-tray"></i>
                  <span class="number" data-count="2"></span>
                  <div class="text">Comedores</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-bell-boy"></i>
                  <span class="number" data-count="10"></span>
                  <div class="text">Staffs</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-playground"></i>
                  <span class="number" data-count="3"></span>
                  <div class="text">Espacios comunes</div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
@endsection