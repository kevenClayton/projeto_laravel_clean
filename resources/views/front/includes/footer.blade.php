<footer class="cs-footer bg-dark pt-5 pt-md-6">
    <div class="container pt-3 pt-md-0">
      <div class="row pb-3">
        <div class="col-md-4 mt-n2 pb-3 pb-md-0 mb-4">
          <a class="d-block mb-3" href="#" style="width: 153px;">
            <img src="img/logo/logo-footer-alt.png" alt="Around"/>
          </a>

          <p class="font-size-sm text-light opacity-60  pb-sm-3">
              Rio Cleaning Service is a service company, we work with quality and customer satisfaction in mind. We have extensive experience in cleaning, hire us and take the time to rest while we work hard.
          </p>


        </div>
        <div class="col-md-2 col-sm-4 ml-auto pb-1 mb-4">
          <div class="cs-widget cs-widget-light">
            <h4 class="cs-widget-title">Company</h4>
            <ul>
              <li><a class="cs-widget-link" href="{{ route('home') }}">Home</a></li>
              <li><a class="cs-widget-link" href="{{ route('about') }}">About</a></li>
              <li><a class="cs-widget-link" href="{{ route('contact') }}">Contact</a></li>
              <li><a class="cs-widget-link" href="{{ route('faq') }}">FAQ</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Book Now</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 pb-1 mb-4">
          <div class="cs-widget cs-widget-light">
            <h4 class="cs-widget-title">Our Services</h4>
            <ul>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">General Cleaning</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Deep Cleaning</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Office Cleaning</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Hoarding Cleanup</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Airbnb Cleaning</a></li>
              <li><a class="cs-widget-link" href="{{ route('book_now') }}">Move Out/In Cleaning</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 mb-4">
          <div class="cs-widget cs-widget-light">
            <h4 class="cs-widget-title">Contact</h4>
            <a class="d-block mb-3 text-white opacity-60" href="tel:{{ config('app.celular_script2') }}" >
               <i class="fe-smartphone"></i> {{ config('app.celular2') }}
            </a>
            <a class="d-block mb-3 text-white opacity-60" href="tel:{{ config('app.celular_script') }}" >
               <i class="fe-smartphone"></i> {{ config('app.celular') }}
            </a>
            <a class="d-block mb-3 text-white opacity-60" href="mailto:{{ config('app.email') }}" >
               <i class="fe-mail"></i> {{ config('app.email') }}
            </a>
            @if(!empty(config('app.facebook')))
            <a class="social-btn sb-outline sb-facebook sb-light sb-lg mr-2 mb-2" href="{{ config('app.facebook') }}">
              <i class="fe-facebook"></i>
            </a>
            @endif
            @if(!empty(config('app.twitter')))
            <a class="social-btn sb-outline sb-twitter sb-light sb-lg mr-2 mb-2" href="{{ config('app.twitter') }}">
              <i class="fe-twitter"></i>
            </a>
            @endif
            @if(!empty(config('app.instagram')))
            <a class="social-btn sb-outline sb-instagram sb-light sb-lg mr-2 mb-2" href="{{ config('app.instagram') }}">
              <i class="fe-instagram"></i>
            </a>
            @endif
            @if(!empty(config('app.tiktok')))
            <a class="social-btn sb-outline sb-google sb-light sb-lg mr-2 mb-2" href="{{ route('tiktok') }}">
              <i class="fe-google"></i>
            </a>
            @endif
          </div>
        </div>
      </div>
      <hr class="border-light">
      <div class="row align-items-center my-3 pt-4">
        <div class="col-md-6 order-md-2 text-md-right mb-3">
          <img src="img/logo/logo-keven-clayton.png" alt="Logo Developer" style="height: 50px;"/>
        </div>
        <div class="col-md-6 order-md-1 mb-3">
          <p class="font-size-sm mb-0"><span class="text-light opacity-50 mr-1">© All rights reserved. </p>
        </div>
      </div>
    </div>
  </footer>
