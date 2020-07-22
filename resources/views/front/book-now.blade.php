@extends('front.master.master')
@section('content')
<section class="jarallax bg-gradient-2 pt-5 pb-7 pt-md-7" data-jarallax data-speed="0.25"><span class="bg-overlay bg-gradient" style="opacity: .8;"></span>
    <div class="jarallax-img" style="background-image: url(img/book-now/background-booknow.jpg);"></div>
    <div class="container book-now bg-overlay-content pt-3 pb-7 pt-md-0">
      <div class="row justify-content-center py-md-5">
        <div class="col-lg-8 col-md-8 text-center pt-2 mb-n3">
          <h1 class="text-light">You're minutes away from Squeaky Cleaning!</h1>
          <!-- <p class="text-light">Get in touch with by completing the contact form or call us now. We normally respond within 2 business days.</p> -->
        </div>
      </div>
    </div>
</section>
  <!-- Contact cards (details)-->
  <section class="container-fluid bg-overlay-content mb-5 mb-md-6" style="margin-top: -120px;">
    <div class="row">
      <div class="col-lg-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100 border-0 box-shadow-lg py-4">
          <div class="card-body text-center">
            <i class="fe-calendar mb-4 text-primary text-weight-light" style="font-size: 3.25rem; "></i>
            <h3 class="h4 mb-2">Pick your desired date & time</h3>
            <!-- <p class="font-size-sm mb-2">396 Lillian Blvd, Holbrook, NY 11741, USA</p><a class="cs-fancy-link font-size-sm" href="#map" data-scroll>See on the map</a> -->
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100 border-0 box-shadow-lg py-4">
          <div class="card-body text-center">
            <i class="fe-credit-card
            mb-4 text-success" style="font-size: 3.25rem;"></i>
            <h3 class="h4 mb-2">Pay safely and securely</h3>
            <!-- <ul class="list-unstyled font-size-sm mb-0">
              <li><span class="mr-1">Customer service:</span><a class="nav-link-style" href="tel:+108044357260">+1 (080) 44 357 260</a></li>
              <li><span class="mr-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+1 00 33 169 7720</a></li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100 border-0 box-shadow-lg py-4">
          <div class="card-body text-center">
            <i class="fe-alert-circle mb-4 text-warning" style="font-size: 3.25rem;"></i>
            <h3 class="h4 mb-2">No contracts or cancellation fees</h3>
            <!-- <ul class="list-unstyled font-size-sm mb-0">
              <li><span class="mr-1">Customer service:</span><a class="nav-link-style" href="mailto:customer@example.com">customer@example.com</a></li>
              <li><span class="mr-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>
            </ul> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100 border-0 box-shadow-lg py-4">
          <div class="card-body text-center">
            <i class="fe-thumbs-up mb-4 text-info" style="font-size: 3.25rem;"></i>
            <h3 class="h4 mb-2">No hidden fees No up-sells</h3>
            <!-- <ul class="list-unstyled font-size-sm mb-0">
              <li><span class="mr-1">Customer service:</span><a class="nav-link-style" href="mailto:customer@example.com">customer@example.com</a></li>
              <li><span class="mr-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@example.com</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Intro-->
  <form class="cs-sidebar-enabled cs-sidebar-right needs-validation" novalidate>
    <div class="container">
      <div class="row">
        <!-- Content-->
        <div class="col-lg-8 cs-content py-4">
          <nav aria-label="breadcrumb">
            <ol class="py-1 my-2 breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Book Now</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
          <h1 class="mb-3 pb-4 text-uppercase"> Book <span class="bg-faded-primary rounded text-primary px-3 py-2">your cleaning</span></h1>
          <div class="alert alert-info font-size-md mb-5" role="alert"><i class="fe-alert-circle font-size-xl mt-n1 mr-3"></i>Have a coupon code? <a href='#modal-coupon' data-toggle='modal' class='alert-link'>Click here to enter your code</a></div>
          <h2 class="h3 pb-3"><span class="font-weight-light">STEP 1:</span> WHO YOU ARE</h2>
          <div class="row mb-4">
            <div class="col-sm-6 form-group">
              <label class="form-label" for="ch-fn" >Enter your First Name
                <sup class="text-danger ml-1">*</sup></label>
              <input class="form-control" placeholder="Enter your First Name" type="text" id="ch-fn" required>
            </div>
            <div class="col-sm-6 form-group">
              <label class="form-label" for="ch-ln">Last names<sup class="text-danger ml-1">*</sup></label>
              <input class="form-control" placeholder="Insert your Last Name" type="text" id="ch-ln" required>
            </div>
            <div class="col-sm-6 form-group">
              <label class="form-label" for="ch-ln">Email<sup class="text-danger ml-1">*</sup></label>
              <!-- Date and time picker -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fe-mail"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Insert your best email here">
              </div>


            </div>
            <div class="col-sm-6 form-group">
              <label class="form-label" for="ch-ln">Phone<sup class="text-danger ml-1">*</sup></label>
              <!-- Date and time picker -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fe-phone"></i>
                  </span>
                </div>
                <input type="phone" class="form-control" placeholder="Insert your contact number here">
              </div>
            </div>

            <div class="col-12 form-group">
              <h2 class="h3 pb-3"><span class="font-weight-light">STEP 2:</span> YOUR HOME</h2>
              <label class="form-label" for="ch-address">Street address<sup class="text-danger ml-1">*</sup></label>
              <input class="form-control" type="text" id="ch-address" placeholder="House number and street name" required>
            </div>
            <div class="col-6 form-group ">

              <label class="form-label" for="ch-country">Town / City<sup class="text-danger ml-1">*</sup></label>
              <select class="form-control custom-select" id="ch-country" required>
                <option value="" selected disabled hidden>Choose City</option>
                <option value="orlando">Orlando</option>
                <option value="sanford">Sanford</option>
                <option value="union-park">Union Park</option>
                <option value="kissimmee">Kissimmee</option>
                <option value="narcoossee">Narcoossee</option>
                <option value="saint-cloud">Saint Cloud</option>
              </select>
            </div>



            <div class="col-6 form-group">
              <label class="form-label" for="ch-postcode">Postcode<sup class="text-danger ml-1">*</sup></label>
              <input class="form-control" type="text" id="ch-postcode" required>
            </div>


            <div class="col-6 form-group">
              <label class="form-label" for="ch-country">Complement</label>
              <input class="form-control" type="text" placeholder="Apartment, suite, unit, etc. (optional)">
            </div>
            <div class="col-6 form-group">
              <label class="form-label" for="ch-county">County</label>
              <input class="form-control" type="text" id="ch-county">
            </div>
          </div>
          <!-- Selecionar os serviços -->
          <div class="row">
            <div class="col-12 ">
              <h2 class="h3 pb-3"><span class="font-weight-light">STEP 3:</span> YOUR SERVICE</h2>
            </div>
                <div class="col-6 form-group ">
                    <label class="form-label" for="ch-country">Choose your service<sup class="text-danger ml-1">*</sup></label>
                    <select class="form-control custom-select" id="ch-country" required>
                      <option value="" selected disabled hidden>Select your service type</option>
                      <option value="0-1000">General Clean</option>
                      <option value="1001-1500">Deep Clean / Move Out / Party Cleaning</option>
                      <option value="1501-2000">Hoarding Clean Out / Pos Contruction </option>
                    </select>
                </div>
                <div class="col-6 form-group ">
                    <label class="form-label" for="ch-country">Home Square Footage<sup class="text-danger ml-1">*</sup></label>
                    <select class="form-control custom-select" id="ch-country" required>
                      <option value="" selected disabled hidden>Select the footage of your property</option>
                      <option value="0-1000">0 - 1000m²</option>
                      <option value="1001-1500">1001 - 1500m²</option>
                      <option value="1501-2000">1501 - 2000m²</option>
                      <option value="2001-2500">2001 - 2500m²</option>
                      <option value="2501-3000">2501 - 3000m²</option>
                      <option value="3001-3500">3001 - 3500m²</option>
                      <option value="3501-4000">3501 - 4000m²</option>
                      <option value="4001-4500">4001 - 4500m²</option>
                      <option value="4501-5000">4501 - 5000m²</option>
                      <option value="4501-5000">Greater Than 5000</option>
                    </select>
                </div>
            <!-- Section Serviços Extras e datas-->
            <div class="col-12 ">
                <!-- <label class="form-label" for="ch-country">Select Extras</label> -->
                <h2 class="h3 pb-3"><span class="font-weight-light">Select</span> Extras</h2>
            </div>
            <div class="col-4   ">
              <div class="card border border-dark mb-4 extra-item">
                {{-- <a href="#"> --}}
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Inside Windows</span>
                    </div>
                {{-- </a> --}}
              </div>
            </div>
            <div class="col-4  ">
              <div class="card border border-dark mb-4 extra-item active" data-toggle="tooltip" data-placement="top" title="Include in your cleaning service the cleaning of your window">
                {{-- <a href="#"> --}}
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Inside Cabinets</span>
                    </div>
                {{-- </a> --}}
              </div>
            </div>
            <div class="col-4  ">
              <div class="card border border-dark mb-4 extra-item">
                  {{-- <a href="#"> --}}
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Baseboards</span>
                    </div>
                {{-- </a> --}}
              </div>
            </div>
            <div class="col-4  ">
              <div class="card border border-dark mb-4 extra-item">
                {{-- <a href="#" > --}}
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Inside the Fridge</span>
                    </div>
                {{-- </a> --}}
              </div>
            </div>
            <!-- <div class="col-3  ">
                <div class="card border border-dark mb-4 extra-item">
                    <a href="#" >
                        <div class="card-body text-center">
                        <p class="card-text font-size-xl">
                            <i class="fe-bell"></i>
                        </p>
                        <span class="text-muted font-size-md">Move In / Move Out</span>
                        </div>
                    </a>
                </div>
            </div> -->
            <div class="col-4  ">

              <div class="card border border-dark mb-4  extra-item ">
                {{-- <a href="#" > --}}
                    <div class="card-body text-center ">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Inside the Oven</span>
                    </div>
                {{-- </a> --}}
              </div>

            </div>
            <!-- <div class="col-3 ">
              <div class="card border border-dark mb-4  extra-item">
                <a href="">
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Deep Cleaning</span>
                    </div>
                </a>
              </div>
            </div> -->
            <div class="col-4  ">
              <div class="card border border-dark mb-4 extra-item">
                {{-- <a href="#"> --}}
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Load of Laundry</span>
                    </div>
                {{-- </a> --}}
              </div>
            </div>
            <!-- <div class="col-3 form-group ">
              <div class="card border border-dark mb-4 extra-item">
                <a href="#"  >
                    <div class="card-body text-center">
                    <p class="card-text font-size-xl">
                        <i class="fe-bell"></i>
                    </p>
                    <span class="text-muted font-size-md">Rent A Vacuum</span>
                    </div>
                </a>
              </div>
            </div> -->
        </div>


        <!-- FIM Section Serviços extras e data -->
          <h2 class="h3 pb-3">Additional information</h2>
          <div class="form-group pb-3 pb-lg-5">
            <label class="form-label" for="ch-order-notes">Order notes</label>
            <textarea class="form-control" id="ch-order-notes" rows="5" placeholder="Notes about your order, e.g. special notes for type of cleaning."></textarea>
          </div>
          <div class="col-sm-6 form-group">
            <!-- Date and time picker -->
            <div class="form-group">
              <label class="form-label">Choose date and time</label>
              <div class="input-group-overlay">
                <input class="form-control appended-form-control cs-date-picker" type="text" placeholder="Choose date and time" data-datepicker-options='{"enableTime": true, "altInput": true, "altFormat": "F j, Y H:i", "dateFormat": "Y-m-d H:i"}'>
                <div class="input-group-append-overlay">
                  <span class="input-group-text">
                    <i class="fe-calendar"></i>
                  </span>
                </div>
              </div>
            </div>

            <div class="form-group">
                <label>Date range</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-secondary">
                      <i class="fe-calendar"></i>
                    </span>
                  </div>
                  <input class="form-control cs-date-picker cs-date-range" type="text" placeholder="From date" data-datepicker-options='{"altInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d"}' data-linked-input="#end-date">
                  <input class="form-control cs-date-picker" type="text" placeholder="To date" data-datepicker-options='{"altInput": true, "altFormat": "F j, Y", "dateFormat": "Y-m-d"}' id="end-date">
                </div>
              </div>


          </div>
        </div>
        <!-- Sidebar-->

        <div class="col-lg-4 cs-sidebar bg-secondary pt-5 pl-lg-4 pb-md-2">
          <div class="pl-lg-4 mb-3 pb-5">
            <h2 class="h4 pb-3">Your Service</h2>

            <hr class="mb-4">
            <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Subtotal:</span><span class="text-nav">$776.99</span></div>
            <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Tax:</span><span class="text-nav">&mdash;</span></div>
            <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Shipping:</span><span class="text-nav">$12.35</span></div>
            <div class="d-flex justify-content-between mb-3"><span class="h6 mb-0">Total:</span><span class="h6 mb-0">$789.34</span></div>
            <div class="accordion accordion-alt pt-4 mb-grid-gutter" id="payment-methods">
              {{-- <div class="card border-0 box-shadow card-active">
                <div class="card-header p-3">
                  <div class="p-1">
                    <div class="custom-control custom-radio" data-toggle="collapse" data-target="#credit-card">
                      <input class="custom-control-input" type="radio" id="credit-card-radio" name="payment_method" checked>
                      <label class="custom-control-label d-flex align-items-center h6 mb-0" for="credit-card-radio"><span>Credit Card</span><img class="ml-3" width="130" src="img/shop/cards.png" alt="Accepted cards"/>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="collapse show" id="credit-card" data-parent="#payment-methods">
                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label" for="cc-number">Card number</label>
                      <input class="form-control bg-image-0" type="text" id="cc-number" data-format="card" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="row no-gutters">
                      <div class="col-7 px-2 form-group mb-1">
                        <label class="form-label" for="cc-expiry">Expiry date</label>
                        <input class="form-control bg-image-0" type="text" id="cc-expiry" data-format="date" placeholder="mm/yy">
                      </div>
                      <div class="col-5 px-2 form-group mb-1">
                        <label class="form-label" for="cc-cvc">CVC</label>
                        <input class="form-control bg-image-0" type="text" id="cc-cvc" data-format="cvc" placeholder="000">
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
              <div class="card border-0 box-shadow  card-active">
                <div class="card-header p-3">
                  <div class="p-1">
                    <div class="custom-control custom-radio collapsed" data-toggle="collapse" data-target="#paypal">
                      <input class="custom-control-input" type="radio" id="paypal-radio" name="payment_method">
                      <label class="custom-control-label d-flex align-items-center h6 mb-0" for="paypal-radio"><span>PayPal</span><img class="ml-3" width="20" src="img/shop/paypal.png" alt="PayPal"/>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="collapse show" id="paypal" data-parent="#payment-methods">
                  <div class="card-body">
                    <p class="font-size-ms">By clicking on the button below you will be redirected to your PayPal account to complete the payment.</p><a class="d-inline-block" href="#"><img class="d-block" width="200" src="img/shop/paypal-button.png" alt="PayPal"/></a>
                  </div>
                </div>
              </div>
              <div class="card border-0 box-shadow">
                <div class="card-header p-3">
                  <div class="p-1">
                    <div class="custom-control custom-radio collapsed" data-toggle="collapse" data-target="#cash">
                      <input class="custom-control-input" type="radio" id="cash-radio" name="payment_method">
                      <label class="custom-control-label d-flex h6 mb-0" for="cash-radio">Cash on delivery</label>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="cash" data-parent="#payment-methods">
                  <div class="card-body">
                    <p class="font-size-ms mb-0">You have selected to pay with cash upon delivery.</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Place order</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
