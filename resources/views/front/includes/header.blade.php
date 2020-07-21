<header class="cs-header navbar navbar-expand-lg navbar-dark navbar-floating navbar-sticky">
    <div class="container px-0 px-xl-3">
      <button class="navbar-toggler ml-n2 mr-2" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu">
          <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand order-lg-1 mx-auto ml-lg-0 pr-lg-2 mr-lg-4" href="{{ route('home') }}">
            <img class="navbar-floating-logo d-none d-lg-block" width="153" src="img/logo/logo-footer-alt.png" alt="Logo {{ config('app.name') }}"/>
            <img class="navbar-stuck-logo" width="153" src="img/logo/logo-dark.png" alt="Around"/>
            <img class="d-lg-none" width="58" src="img/logo/logo-footer-alt.png" alt="Around"/>
      </a>
      <div class="d-flex align-items-center order-lg-3 ml-lg-auto">
        <a style="background: none;border-color: white;box-shadow: none;" class="btn btn-primary" href="{{ route('book_now') }}" rel="noopener">
        <i class="fe-arrow-right-circle"></i> WHY HIRE US
        </a>
      </div>
      <div class="cs-offcanvas-collapse order-lg-2" id="primaryMenu">
        <div class="cs-offcanvas-cap navbar-box-shadow">
          <h5 class="mt-1 mb-0">Menu</h5>
          <button class="close lead" type="button" data-toggle="offcanvas" data-offcanvas-id="primaryMenu"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="cs-offcanvas-body">
          <!-- Menu-->
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="{{ route('book_now') }}" data-toggle="dropdown">Book Now</a>
              <div class="dropdown-menu">
                <a class="dropdown-column dropdown-column-img bg-secondary" href="{{ route('book_now') }}" style="background-image: url(img/demo/menu-banner.jpg);"></a>
                <div class="dropdown-column">
                    <span style="font-weight: bold;">Cleaning for:</span>
                    <a class="dropdown-item" href="{{ route('book_now') }}">House</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Apartment</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Loft</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Kitnet</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Roof</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Office</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Shed</a>
                </div>
                <div class="dropdown-column">
                    <span style="font-weight: bold;">Hire our extra services:</span>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Inside Windows</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Inside Cabinets</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Baseboards</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Inside the Fridge</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Move In / Move Out</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Inside the Oven</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Deep Cleaning</a>
                    <a class="dropdown-item" href="{{ route('book_now') }}">Load of Laundry</a>
                </div>
              </div>
            </li>
            {{-- <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#">Pricing</a> --}}
            </li>
            <li class="nav-item dropdown dropdown-mega">
                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" data-toggle="dropdown">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" data-toggle="dropdown">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('faq') }}" data-toggle="dropdown">FAQ</a>
            </li>
            {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Docs / UI Kit</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="docs/dev-setup.html">
                    <div class="d-flex align-items-center">
                      <div class="font-size-xl text-muted"><i class="fe-file-text"></i></div>
                      <div class="pl-3"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                    </div></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="components/typography.html">
                    <div class="d-flex align-items-center">
                      <div class="font-size-xl text-muted"><i class="fe-layers"></i></div>
                      <div class="pl-3"><span class="d-block text-heading">UI Kit<span class="badge badge-danger ml-2">50+</span></span><small class="d-block text-muted">Flexible components</small></div>
                    </div></a></li>
                <li class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                    <div class="d-flex align-items-center">
                      <div class="font-size-xl text-muted"><i class="fe-life-buoy"></i></div>
                      <div class="pl-3"><span class="d-block text-heading">Support</span><small class="d-block text-muted">contact@createx.studio</small></div>
                    </div></a></li>
              </ul>
            </li> --}}
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- Page content-->
