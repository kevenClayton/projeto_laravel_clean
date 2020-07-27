@extends('front.master.master')
@section('content')
<section class="jarallax bg-gradient pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span class="bg-overlay bg-gradient" style="opacity: .8;"></span>
    <div class="jarallax-img" style="background-image: url(img/book-now/background-booknow.jpg);"></div>
    <div class="cs-shape cs-shape-bottom cs-shape-slant bg-body">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 260">
        <polygon fill="currentColor" points="0,257 0,260 3000,260 3000,0"></polygon>
      </svg>
    </div>
    <div class="container bg-overlay-content pt-3 pb-7 pt-md-0">
      <div class="row justify-content-center pb-7">
        <div class="col-lg-10">
          <h1 class="text-light">Contacts</h1>
          <p class="text-light">Get in touch with by completing the below form or call us now</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact form + details-->
  <section class="container bg-overlay-content pb-5">
    <div class="row">
      <div class="col-lg-6 col-md-7 offset-lg-1 pb-2 mb-5" style="margin-top: -260px;">
        <div class="card border-0 box-shadow-lg">
          <form class="card-body needs-validation p-5" action="/enviar" method="post" novalidate>
            {{ csrf_field() }}
            <div class="form-group">
              <label class="form-label" for="cont-fn">Full name<sup class="text-danger ml-1">*</sup></label>
              <input  name="nameFull" class="form-control" type="text" id="cont-fn" placeholder="John Doe" required>
              <div class="invalid-feedback">Please enter your full name!</div>
            </div>
            <div class="form-group">
              <label class="form-label" for="cont-email">Email address<sup class="text-danger ml-1">*</sup></label>
              <input  name="email" class="form-control" type="email" id="cont-email" placeholder="j.doe@example.com" required>
              <div class="invalid-feedback">Please enter a valid email address!</div>
            </div>
            <div class="form-group">
              <label class="form-label" for="cont-phone">Phone number</label>
              <input name="phone" class="form-control bg-image-0" type="text" id="cont-phone" data-format="custom" data-delimiter="-" data-blocks="2 4 2 2" placeholder="00-0000-00-00">
            </div>
            {{-- <div class="form-group">
              <label class="form-label" for="cont-company">Your Name</label>
              <input name="" class="form-control bg-image-0" type="text" id="cont-company" placeholder="Your company">
            </div> --}}
            <div class="form-group">
              <label class="form-label" for="cont-subject">Subject<sup class="text-danger ml-1">*</sup></label>
              <input name="subject" class="form-control" type="text" id="cont-subject" placeholder="Title of your message" required>
              <div class="invalid-feedback">Please enter a subject!</div>
            </div>
            <div class="form-group">
              <label class="form-label" for="cont-message">Message<sup class="text-danger ml-1">*</sup></label>
              <textarea name="message" class="form-control" id="cont-message" rows="5" placeholder="Write your message here" required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <div class="text-center pt-2">
              <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 offset-md-1">
        <h2 class="h4 pb-3">Contact details</h2>
        <h3 class="h6 pb-2">{{ config('app.endereco') }}</h3>
        <ul class="list-unstyled font-size-sm pb-3">
          {{-- <li class="d-flex align-items-top mb-3"><i class="fe-map-pin font-size-xl text-muted mt-1 mr-2 pr-1"></i>
            <div>396 Lillian Blvd, Holbrook,<br>NY 11741, USA<br><a class="cs-fancy-link" href="#map" data-scroll>See on the map</a></div>
          </li> --}}
          <li class="d-flex align-items-center mb-3"><i class="fe-mail font-size-xl text-muted mr-2 pr-1"></i>
            <div><a href="{{ config('app.email') }}">{{ config('app.email') }}</a></div>
          </li>
          <li class="d-flex align-items-center mb-3"><i class="fe-smartphone font-size-xl text-muted mr-2 pr-1"></i>
            <div><a href="{{ config('app.celular') }}">{{ config('app.celular') }}</a></div>
          </li>
          <li class="d-flex align-items-center mb-3"><i class="fe-smartphone font-size-xl text-muted mr-2 pr-1"></i>
            <div><a href="{{ config('app.celular2') }}">{{ config('app.celular2') }}</a></div>
          </li>
        </ul>

      </div>
    </div>
  </section>
  <!-- Map-->

@endsection
