@extends('layout.app')
@section('content')
    <section class="container" id="services">
        <div class="heading" aria-hidden="true">

            <img src="@assets('images/elements/space-doodle6.png')" class="space-doodle6 floating-element" alt="">
            <p class="headline">Our Awesome Services</p>
            <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mb-5">
                <img src="https://picsum.photos/seed/picsum/600/400" class="img-fluid sun-rays rounded" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="fs-2 stroke-text">Search Engine Optimization</h3>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center text-md-start">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg flat-button">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
        <div class="row section-margin">
            <div class="col-12 col-md-6 order-1 order-md-2 mb-5">
                <img src="https://picsum.photos/seed/icsum/600/400" class="img-fluid sun-rays rounded" alt="">
            </div>
            <div class="col-12 col-md-6 order-2 order-md-1">
                <h3 class="fs-2 stroke-text">Website Design</h3>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center text-md-start">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg flat-button">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
        <div class="row section-margin">
            <div class="col-12 col-md-6  mb-5">
                <img src="https://picsum.photos/seed/pisum/600/400" class="img-fluid sun-rays rounded" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="fs-2 stroke-text">Web Development</h3>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center text-md-start">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg flat-button">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
    </section>
{{--    @include('chunks.case-studies')--}}
    @include('chunks.orbit')
    @include('chunks.testimonials')
@endsection
