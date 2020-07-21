@extends('front.master.master')

@section('content')

@include('front.includes.banner-principal-home')
  <!-- Demos-->
  <section class="container py-5 py-md-6 py-lg-7 my-3 mt-5">
    <div class="row align-items-center justify-content-center">
      <h2 class="h1 mb-4">Steps to Clean Your <span class='bg-faded-primary rounded text-primary px-3 py-2'>Home Clean</span></h2>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-5 text-center text-md-left mb-5 mb-md-0">
        <h2 class="mb-3">You can include extra services in your cleaning
        </h2>
        <p class="text-muted mb-4 pb-2">Clean your window, closet, move your cell phone, do nothing, leave everything with us.</p>
        <a class="btn btn-primary" href="{{ route('book_now') }}"><i class="fe-clock"></i> Schedule</a>
        <a class="btn btn-outline-primary"  href="{{ route('book_now') }}">Hire extra service</a>
      </div>
      <div class="col-lg-8 col-md-7 bg-position-center bg-no-repeat" style="background-image: url(img/demo/business-consulting/services/bg-shape.svg);">
        <div class="mx-auto" style="max-width: 610px;">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left"><img class="d-inline-block mb-4 mt-2" width="100" src="img/home/etapa-1-reserve.png" alt="Icon"/>
                <h3 class="h5 mb-2">Schedule your Cleaning</h3>
                <p class="font-size-sm">
                  Easily and quickly schedule your cleaning.

                </p>
              </div>
              <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left"><img class="d-inline-block mb-4 mt-2" width="100" src="img/home/etapa-3-work.png" alt="Icon"/>
                <h3 class="h5 mb-2">Leave the hard work with us</h3>
                <p class="font-size-sm">
                  A member of the Rio Cleaning Service will clean your space. </p>
              </div>
              <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left"><img class="d-inline-block mb-4 mt-2" width="100" src="img/home/step-end-sucess.png" alt="Icon"/>
                <h3 class="h5 mb-2">All Done</h3>
                <p class="font-size-sm">Magically your cleaning will be completed.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left"><img class="d-inline-block mb-4 mt-2" width="100" src="img/demo/business-consulting/services/05.svg" alt="Icon"/>
                <h3 class="h5 mb-2">Save time and money</h3>
                <p class="font-size-sm">Integrated with Paypal, be Safe and Save ime, money and work and leave the rest to us.

                </p>
              </div>
              <div class="bg-light box-shadow-lg rounded-lg p-4 mb-grid-gutter text-center text-sm-left"><img class="d-inline-block mb-4 mt-2" width="100" src="img/home/etapa-4-relax.png" alt="Icon"/>
                <h3 class="h5 mb-2">Enjoy your time relaxing</h3>
                <p class="font-size-sm">Find aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Components-->
  <section class="bg-gradient py-5 py-md-6 py-lg-7">
    <div class="container-fluid py-3 py-lg-4 overflow-hidden">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-5 d-flex justify-content-end mb-5 mb-lg-0">
          <div class="mx-auto ml-lg-0 mr-xl-7 text-center text-lg-left" style="max-width: 495px;">
            <h2 class="h1 text-light mb-4">Your Space <span class='bg-faded-light rounded px-3 py-2'>is Safe</span></h2>
            <p class="text-light opacity-70 mb-5">Service with quality, guarantee and payment with security.</p>
            <div class="row mb-2 mx-n2">
              <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/carousel.html"><img class="d-inline-block opacity-60 mb-3" width="68" src="img/demo/presentation/icons/carousel.svg" alt="Sliders & Carousels"/>
                  <h3 class="h6 text-light mb-0">GONE GREEN?</h3></a>
              </div>
              <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/gallery.html"><img class="d-inline-block opacity-60 mb-3" width="45" src="img/demo/presentation/icons/gallery.svg" alt="Image / Video Gallery"/>
                  <h3 class="h6 text-light mb-0">TRUST US
                  </h3></a></div>

              <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/video-popup.html"><img class="d-inline-block opacity-60 mb-3" width="44" src="img/demo/presentation/icons/play.svg" alt="Video Popup & Embed"/>
                  <h3 class="h6 text-light mb-0">IT'S THAT EASY</h3></a>
              </div>
              <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/forms.html"><img class="d-inline-block opacity-60 mb-3" width="42" src="img/demo/presentation/icons/forms.svg" alt="Form Controls"/>
                  <h3 class="h6 text-light mb-0">TRUSTED TEAM</h3></a>
              </div>
              <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/testimonials.html"><img class="d-inline-block opacity-60 mb-3" width="46" src="img/demo/presentation/icons/review.svg" alt="Testimonials & Reviews"/>
                  <h3 class="h6 text-light mb-0">SECURE ONLINE PAYMENT</h3></a>
              </div>
                  <div class="col-6 px-2 mb-3"><a class="d-block border border-light rounded-lg pt-3 pb-4 px-3 text-center text-decoration-none" href="components/charts.html"><img class="d-inline-block opacity-60 mb-3" width="39" src="img/demo/presentation/icons/chart.svg" alt="Line, Bar & Pie Charts"/>
                    <h3 class="h6 text-light mb-0">YOUR SATISFACTION IS GUARANTEED</h3></a>
                  </div>
            </div>
              <a class="btn btn-success" href="components/typography.html" style="background-color: #c9b316; border-color: #c9b316;">Book Now And be Safe
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-7 d-flex justify-content-end pr-0"><a class="d-block mr-n3" href="components/hotspots.html"><img class="d-block" src="img/home/macbook.png" alt="Components"/></a></div>
      </div>
    </div>
  </section>
  <!-- Inner Pages-->
  <section class="py-5 py-md-6 py-lg-7">
    <div class="container pb-3 pt-4 pb-lg-2">
      <div class="row justify-content-center mb-4 pb-2">
        <div class="col-xl-6 col-lg-7 col-md-8">
          <h2 class="h1 mb-4 text-center">About <span class='bg-faded-primary rounded text-primary px-3 py-2'>Rio Cleaning Service</span></h2>
          <p class="text-muted text-center"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <ul class="nav nav-tabs cs-media-tabs justify-content-center justify-content-lg-start" role="tablist">
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2 active" href="#about-cleaning-service" data-toggle="tab" role="tab">
                <div class="media align-items-center"><img class="rounded" width="60" src="img/demo/presentation/icons/user.svg" alt="User Account"/>
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">Cleaning Services</div><i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#service-cleaning-custom" data-toggle="tab" role="tab">
                <div class="media align-items-center">

                  <svg style="color: #02009a;" class="bi bi-plus-circle" width="40"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  </svg>
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">Custom Cleaning Services for Homeowners</div>
                      <i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#service-cleaning-cost" data-toggle="tab" role="tab">
                <div class="media align-items-center"><img class="rounded" width="60" src="img/demo/presentation/icons/shopping-cart.svg" alt="E-Commerce"/>
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">House Cleaning Service Cost</div><i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#pages" data-toggle="tab" role="tab">
                <div class="media align-items-center"><img class="rounded" width="60" src="img/demo/presentation/icons/web-page.svg" alt="Secondary Pages"/>
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">Trained Professionals</div><i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#blog" data-toggle="tab" role="tab">
                <div class="media align-items-center">
                  <svg style="color: #02009a;" class="bi bi-award" width="50" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                  </svg>
                  <!-- <img class="rounded" width="60" class="" src="img/demo/presentation/icons/blog.svg" alt="Blog & News"/> -->
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">100% customer satisfaction guaranteed </div>
                      <i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
            <li class="nav-item mb-3" style="width: 16.5rem;"><a class="nav-link mr-2" href="#specialty" data-toggle="tab" role="tab">
                <div class="media align-items-center">
                  <img class="rounded" width="60" src="img/demo/presentation/icons/error-404.svg" alt="Specialty Pages"/>
                  <div class="media-body pl-2 ml-1">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="font-size-sm pr-1">Reasonably priced</div><i class="fe-chevron-right lead ml-2 mr-1"></i>
                    </div>
                  </div>
                </div></a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="about-cleaning-service">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">Cleaning Services</h3>
                  <p>Our trusted cleaning professionals are carefully selected and meticulously trained. Book our best house cleaning services team today! Specializing in residential and commercial cleaning. Whether you are looking to book a weekly maid service or a detailed deep cleaning, we’re here to help

                  </p>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="service-cleaning-custom">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">Custom Cleaning Services for Homeowners</h3>
                 <p>
                  There are also custom house cleaning options. <br/>
                  This means that a homeowner can ask the cleaning staff to perform other tasks in addition to their regular duties. It can be as simple as picking up the mail or more complex.  Homeowners can be specific when they are choosing to have custom cleaning done, and the price will be discussed when they talk it over with a manager from the company.

                 </p>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="service-cleaning-cost">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">House Cleaning Service Cost</h3>
                  <p>
                    The costs for a house cleaning in will vary depending on the size of the home and the amount of cleaning that a person wants to have completed.  They can look at a price of anywhere between $80 up to $400 for a home with three bedrooms.
Keep in mind that the first visit will be charged a deep cleaning.  Once the deep cleaning is completed, then the price will go down for subsequent visits to keep the home in order.  Our company is very reasonable, and customers are always saying that it is worth every penny.  They are delighted with house cleaning our services, and they recommend other people for this quality service.


                  </p>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="pages">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">Trained Professionals</h3>
                  <p>
                    All members of a cleaning team are trained professionals. People can count on them to be detailed, on time and hardworking every time.  They are also accountable for what they do and proud to offer the excellence that people are looking for when they want an excellent cleaning service for their homes.
                    With dedication and determination, they perform their duties at all times so that people are happy with what they receive.  They love what they do, and they are there for their customers in every way possible.

                   </p>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="blog">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">100% customer satisfaction guaranteed </h3>
                  <p>
                    Our customers are always 100% satisfied, we work to maintain our quality standard.

                  </p>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="specialty">
              <div class="row text-center text-sm-left">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <h3 class="h5 mb-4">Reasonably priced</h3>
                  <p>
                    We have an affordable price and a high standard of quality.
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gradient position-relative pt-6 pb-5 py-sm-6">
    <div class="bg-overlay bg-size-cover opacity-100" style="background-color: transparent; background-image: url(img/demo/booking/bg-pattern01.png);"></div>
    <div class="bg-overlay-content container py-2">
      <div class="row align-items-center">
        <div class="col-lg-5 offset-lg-1 order-lg-2 pb-5 pb-lg-0 text-center text-lg-left">
          <h2 class="text-light">Why hire?</h2>
          <p class="text-light mb-0">Rio Cleaning Service works with a standard of excellence and values ​​customer satisfaction.</p>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="row">
            <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
              <div class="px-2 text-center">
                <i class="bg-light rounded-circle mb-2 fe-award text-primary" style=" width:105px ;height: 105px; padding: 31px; font-size: 41px; "></i>
                <!-- <img class="bg-light rounded-circle mb-2" width="105" src="img/demo/booking/icons/01.svg" alt="Tickets"/> -->
                <p class="font-size-sm font-weight-medium text-light mb-0 pt-1">
                  Quality delivered to the customer
                </p>
              </div>
            </div>
            <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
              <div class="px-2 text-center">
                <i class="bg-light rounded-circle mb-2 fe-list
                text-primary" style=" width:105px ;height: 105px; padding: 31px; font-size: 41px; "></i>
                <p class="font-size-sm font-weight-medium text-light mb-0 pt-1">
                  You can customize your cleaning needs</p>
              </div>
            </div>
            <div class="col-sm-4 mb-2 pb-4 mb-sm-0 pb-sm-0">
              <div class="px-2 text-center">
                <i class="bg-light rounded-circle mb-2 fe-shield text-primary" style=" width:105px ;height: 105px; padding: 31px; font-size: 41px; "></i>
                <p class="font-size-sm font-weight-medium text-light mb-0 pt-1">Secure your payment with Paypal certificate

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Mobile Interface-->
  <section class="bg-secondary py-5 py-md-6 py-lg-7">
    <div class="container py-3 py-lg-4">
      <div class="row align-items-center">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="mx-auto mx-md-0" style="max-width: 525px;"><img class="d-block" src="img/home/mobile-screens.jpg" alt="Mobile screens"/>
          </div>
        </div>
        <div class="col-md-6 text-center text-md-left">
          <h2 class="h1 mb-4"><span class='bg-faded-primary rounded text-primary px-3 py-2'>Get Squeaky </span> Clean</h2>
          <p class="text-muted mb-5">Book your cleanings anywhere, anytime with our mobile friendly system. In just a few minutes, your appointment will be already made.
          </p>
          <div class="d-flex align-items-center justify-content-center justify-content-md-start">
            <a class="btn btn-primary mr-2" href="#"><i class="fe-clock"></i> Book Now</a>
            <a class="btn btn-outline-primary"  href="#">Whatsapp</a>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features-->
  <section class="container py-5 py-md-6 py-lg-7">
    <div class="text-center mb-5 pt-3 pt-lg-4">
      <h2 class="h1">Take advantage of  <span class='bg-faded-primary rounded text-primary px-3 py-2'>Our Services</span></h2>
    </div>
    <div class="row pt-3 pt-lg-4">
      <div class="col-md-6">
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">General Cleaning</h3>
            <p class="font-size-md mb-0">We do general cleaning in your home, apartment, office and warehouse.</p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Deep Cleaning</h3>
            <p class="font-size-md mb-0">It has that difficulty to perform its cleaning, we do the necessary deep cleaning so that it is clean and pleasant.
            </p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Move Out/In Cleaning</h3>
            <p class="font-size-md mb-0">You need to move something for cleaning to be carried out, count on us.</p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Post Construction Cleaning</h3>
            <p class="font-size-md mb-0">Are you with that dirt after finishing the work? We do all the cleaning for you!
            </p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Airbnb Cleaning</h3>
            <p class="font-size-md mb-0">House and apartment cleaning rented by airbnb.</p>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Party Cleaning</h3>
            <p class="font-size-md mb-0">After that perfect party, there's always that big mess, short while we clean for you.
            </p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Office Cleaning</h3>
            <p class="font-size-md mb-0">We clean and organize your office.
            </p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Hoarding Cleanup</h3>
            <p class="font-size-md mb-0">You have accumulated things, and you need to clean and remove them, don't worry, we'll take them out for you.
            </p>
          </div>
        </div>
        <div class="d-flex mb-4 pb-2"><i class="fe-check-circle h4 text-success"></i>
          <div class="pl-3">
            <h3 class="h5">Coronavirus Cleaning & Desinfecting Services</h3>
            <p class="font-size-md mb-0">We disinfected environments to prevent the spread of Coronavirus, cleaning with specific products for your safety and that of your family.
            </p>
          </div>
        </div>
        <a href="#"><h3 class="h5">...and much more</h3></a>
      </div>
    </div>
  </section>
@endsection
