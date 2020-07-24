@extends('front.master.master')
@section('content')
<section class="container my-lg-2 pt-5 pb-lg-7">
    <div class="row align-items-center">
      <div class="col-lg-5 py-3 py-lg-0">
        <h1>Our goals. Our mission.</h1>
        <h2 class="h3">How we help your home is clean
        </h2>
        <div class="py-4">
          <p class="cs-callout">
            Our services are not complete without your complete satisfaction! That is why we ask our
            customers and housekeepers to make a “walk through” when the work is finished. The
            company will send you a message to confirm that everything was ok during the visit.
          </p>
        </div>
        <a class="cs-video-btn cs-video-btn-primary cs-video-btn-sm mr-3" href="{{ route('tiktok') }}"></a>
        <span class="font-size-sm text-muted">Watch our cleaning videos
        </span>
      </div>
      <div class="col-xl-6 col-lg-7 offset-xl-1">
        <div class="py-5" style="min-height: 543px;">
          <div class="d-none d-lg-block position-absolute bg-no-repeat bg-position-center h-100" style="top: 0; left: -45px; width: 646px; background-image: url(img/pages/about/bg-shape.svg);"></div>
          <div class="row no-gutters mx-n2 pt-lg-4">
            <div class="col-sm-4 px-2 mb-3"><a class="card h-100 card-body py-5 justify-content-center border-0 box-shadow-lg text-center" href="#"><i class="fe-clock text-primary h1 mb-3"></i>
                <h3 class="h5 mb-0">Product choice
                </h3>
                <p>
                    We know that many customers have some kind of
                    allergy or aversion to some kind of smell.
                </p>
            </a>

            </div>
            <div class="col-sm-4 px-2 mb-3">
                <a class="card card-body py-5 border-0 box-shadow-lg text-center mb-3" href="#"><i class="fe-clock text-danger h1 mb-3"></i>
                <h3 class="h5 mb-0">24 hours</h3>
                <p>We work 24 hours at no additional cost</p>
            </a><a class="card card-body py-5 border-0 box-shadow-lg text-center" href="#"><i class="fe-refresh-ccw text-info h1 mb-3"></i>
                <h3 class="h5 mb-0">Automate</h3></a></div>
            <div class="col-sm-4 px-2 mb-3"><a class="card card-body py-5 border-0 box-shadow-lg text-center mb-3" href="#"><i class="fe-folder-plus text-success h1 mb-3"></i>
                <h3 class="h5 mb-0">Create</h3></a><a class="card card-body py-5 border-0 box-shadow-lg text-center" href="#"><i class="fe-share text-warning h1 mb-3"></i>
                <h3 class="h5 mb-0">Share</h3></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statistics-->

@endsection
