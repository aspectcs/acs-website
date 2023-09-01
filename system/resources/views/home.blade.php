@extends('layout.app')
@section('content')
    <section class="home-banner">
      <div class="container h-100">
          <div class="row h-100">
              <div class="col-12 col-md-6 order-2 z-index-0">
                  <div class="banner-area">
{{--                      <img src="@assets('images/banner/arrow.png')" alt="" class="arrow" width="100%"/>--}}
                      {{--<div class="person-container">

                      </div>--}}

                      <img src="@assets('images/banner/person-with-arrow.png')" alt="" class="person-with-arrow"/>
                      <div class="elements">
                          <i class="vector _1 fa fa-dollar-sign fa-6x"></i>
                          <i class="vector _2 fa fa-link fa-6x"></i>
                          <i class="vector _3 fa fa-globe fa-6x"></i>
                          <i class="vector _4 fa-brands fa-searchengin fa-6x"></i>
                      </div>

                  </div>
              </div>
              <div class="col-12 col-md-6 order-1 d-flex align-items-center justify-content-center">
                  <div class="text-container">
                      <h1 class="display-1 fw-bolder text-white mb-5">
                          <span class="underline">Lorem </span>Ipsum
                          <span class="d-block">
                                What is Ipsum?
                           </span>
                      </h1>
                      <p class="text-white fs-6 mb-5">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the
                          industry's standard dummy text ever since the 1500s.
                      </p>
                     <div class="text-center text-md-start">
                         <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg flat-button">Book a Discovery Call <i
                                 class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                     </div>

                  </div>
              </div>
          </div>
      </div>
    </section>
    @include('chunks.counter')
    @include('chunks.testimonials')
    @include('chunks.paying')
    @include('chunks.orbit')
    @include('chunks.case-studies')
    @include('chunks.latest-blog')
    {{--<div class="night">
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
    </div>--}}
@endsection
