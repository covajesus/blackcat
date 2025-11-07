@extends('layouts.app')

@section('content')
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title op6">
        <div class="container">
          <div class="inner">
            <h1>{{ __('messages.about_us_title') }}</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
              </li>
              <li>{{ __('messages.about_us_breadcrumb') }}</li>
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
                  <h4 class="text-uppercase" style="color: #454545 !important;">{{ __('messages.black_cat_title') }}</h4>
                  <p class="section-subtitle">{{ __('messages.boutique_hostal') }}</p>
                </div>
                <div class="info-branding">
                  <p style="text-align: justify;">{{ __('messages.about_description_full') }}</p>
<br>{!! __('messages.about_description') !!}




                </div>
              </div>
            </div>
            <h4 class="text-uppercase mt40 mb20">{{ __('messages.characteristics') }}</h4>
            <div class="row">
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-hotel"></i>
                  <span class="number" data-count="29"></span>
                  <div class="text">{{ __('messages.rooms_count') }}</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-tray"></i>
                  <span class="number" data-count="2"></span>
                  <div class="text">{{ __('messages.dining_rooms_count') }}</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-bell-boy"></i>
                  <span class="number" data-count="10"></span>
                  <div class="text">{{ __('messages.staff_count') }}</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-playground"></i>
                  <span class="number" data-count="3"></span>
                  <div class="text">{{ __('messages.common_areas_count') }}</div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
@endsection