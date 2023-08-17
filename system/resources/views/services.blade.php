@extends('layout.app')
@section('content')
    <section class="container" id="services">
        <div class="heading" aria-hidden="true">
            <p class="headline">Our Awesome Services</p>
            <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-8">
                <h3 class="display-4 stroke-text">Search Engine Optimization</h3>
                <p class="h5 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
        <div class="row section-margin">
            <div class="col-12 col-md-4 order-2">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-8 order-1">
                <h3 class="display-4 stroke-text">Website Design</h3>
                <p class="h5 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
        <div class="row section-margin">
            <div class="col-12 col-md-4">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-8">
                <h3 class="display-4 stroke-text">Web Development</h3>
                <p class="h5 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <div class="my-5 text-center">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
    </section>
    @include('chunks.case-studies')
    @include('chunks.latest-blog')
@endsection
