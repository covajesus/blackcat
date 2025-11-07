@extends('layouts.app')

@section('content')
      <div class="page-title op6">
        <div class="container">
          <div class="inner">
            <h1>{{ __('messages.contact_us') }}</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">{{ __('messages.breadcrumb_home') }}</a>
              </li>
              <li>{{ __('messages.breadcrumb_contact') }}</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="section-title">
                <h4 style="color: #454545 !important;">{{ __('messages.contact_us') }}</h4>
                <p class="section-subtitle">{{ __('messages.lets_talk') }}</p>
              </div>
              <p>{{ __('messages.contact_description') }}</p>
              <!-- CONTACT FORM -->
              @if(Session::get('status') == 1)
                <div class="alert alert-success" role="alert">
                  {{ __('messages.success_message') }}
                </div>
              @endif
              <form action="{{ url('message/store') }}" method="post">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="{{ __('messages.name') }}" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="{{ __('messages.email') }}" type="email" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" placeholder="{{ __('messages.phone') }}" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="{{ __('messages.subject') }}" type="text" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="{{ __('messages.message') }}" required></textarea>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LepQOoZAAAAAIIoxD45a2oigSsRlKArTyIlENGu"></div>
                </div>
                <div class="form-group">
                <input class="form-control" name="home" type="hidden" value="0">
                <input value="{{ __('messages.send') }}" type="submit" class="special_button" />
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <div class="sidebar">

                <div class="contact-details">
                  <div class="contact-info">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-map-marker"></i>Compañia de Jesús 1921. Santiago.</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-envelope"></i>reservas@blackcathostal.com</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-phone"></i> +56 9 49105984</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-globe"></i>www.blackcathostal.com</a>
                      </li>
                    </ul>
                  </div>
                  <div class="social-media mt50">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/blackcathostalboutique/">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="https://www.linkedin.com/company/blackcathostal/">
                      <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/blackcathostal/">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection