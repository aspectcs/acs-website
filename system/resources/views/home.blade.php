@extends('layout.app')
@section('content')
    <section class="home-banner">
      <div class="container h-100">
          <div class="row h-100">
              <div class="col-12 col-md-6 order-1 order-md-2 position-relative z-index-0">
                  <div class="banner-area">
                      <img src="@assets('images/banner/arrow.png')" alt="" class="arrow" width="100%"/>
                      <div class="person-container">
                          <img src="@assets('images/banner/dummy.png')" alt="" class="person" width="100%"/>
                          <div class="elements">
                              <i class="vector _1 fa fa-dollar-sign fa-6x"></i>
                              <i class="vector _2 fa fa-link fa-6x"></i>
                              <i class="vector _3 fa fa-globe fa-6x"></i>
                              <i class="vector _4 fa-brands fa-searchengin fa-6x"></i>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 order-2 order-md-1 d-flex align-items-center justify-content-center p-5">
                  <div class="text-container">
                      <h1 class="display-1 fw-bolder text-white mb-5 skew floating-element">
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
                      <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                              class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>

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
    <div class="night">
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
        <div class="shooting_star"></div>
    </div>
@endsection
