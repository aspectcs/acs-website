@extends('layout.app')
@section('content')
    <section class="team">
        <div class="container">
            <div class="heading" aria-hidden="true">
                <img src="@assets('images/elements/space-doodle.png')" class="space-doodle floating-element" alt="">
                <p class="headline">Our Team</p>
                <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
            </div>

            <div class="team-container">
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..." />
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..." />
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..." />
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
