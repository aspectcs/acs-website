@extends('layout.app')
@section('content')
    <section class="home-banner">
        <div class="row h-100">
            <div class="col-12 col-md-6 order-1 order-md-2 position-relative z-index-0">
                <div class="banner-area">
                    <img src="@assets('images/banner/arrow.png')" alt="" class="arrow" width="100%"/>
                    <div class="person-container">
                        <img src="@assets('images/banner/dummy.png')" alt="" class="person" width="100%"/>
                        <div class="elements">
                            <img src="@assets('images/banner/Vector.svg')" class="vector _1 float-effect" alt=""
                                 width="100%"/>
                            <img src="@assets('images/banner/Vector-1.svg')" class="vector _2 float-effect" alt=""
                                 width="100%"/>
                            <img src="@assets('images/banner/Vector-2.svg')" class="vector _3 float-effect" alt=""
                                 width="100%"/>
                            <img src="@assets('images/banner/Vector-3.svg')" class="vector _4 float-effect" alt=""
                                 width="100%"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-2 order-md-1 d-flex align-items-center justify-content-center p-5">
                <div class="text-container">
                    <h1 class="display-1 work-sans fw-bolder text-white mb-5 skew floating-element">
                        <span class="underline">Lorem </span>Ipsum
                        <span class="d-block">
                                What is Ipsum?
                           </span>
                    </h1>
                    <p class="text-white fs-6 mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the
                        industry's standard dummy text ever since the 1500s.
                    </p>
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>

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
