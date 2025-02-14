@extends('layouts.app')

@section('content')
      <div class="page-title op6">
        <div class="container">
          <div class="inner">
            <h1>CONTÁCTENOS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="{{ url('/') }}">Inicio</a>
              </li>
              <li>Contáctenos</li>
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
                <h4 style="color: #454545 !important;">CONTÁCTENOS</h4>
                <p class="section-subtitle">Hablemos!</p>
              </div>
              <p>Si tiene alguna consulta no dude en comunicarse con nosotros.</p>
              <!-- CONTACT FORM -->
              @if(Session::get('status') == 1)
                <div class="alert alert-success" role="alert">
                  ¡Gracias por preferirnos! dentro de un momento te responderemos
                </div>
              @endif
              <form action="{{ url('message/store') }}" method="post">
                @csrf
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="Nombre" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="Correo" type="email" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" placeholder="Teléfono" type="text" required>
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Asunto" type="text" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Mensaje" required></textarea>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LepQOoZAAAAAIIoxD45a2oigSsRlKArTyIlENGu"></div>
                </div>
                <div class="form-group">
                <input class="form-control" name="home" type="hidden" value="0">
                <input value="Enviar" type="submit" class="special_button" />
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