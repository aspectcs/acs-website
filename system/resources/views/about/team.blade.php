@extends('layout.app')
@section('content')

    <div class="space-station">
        <img src="@assets('images/elements/team/space-station.png')" alt="" class="station"/>
        <img src="@assets('images/elements/team/space-station-manager.png')" alt="" class="manager float-effect"/>
        <img src="@assets('images/elements/team/astronaut1.png')" alt="" class="astronaut1 floating-element"/>
        <img src="@assets('images/elements/team/astronaut2.png')" alt="" class="astronaut2 floating-element"/>
        <img src="@assets('images/elements/team/astronaut3.png')" alt="" class="astronaut3 floating-element"/>
    </div>
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
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
            </div>
            <div class="team-container mt-5">
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
            </div>
            <div class="team-container mt-5">
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
                <div class="box shadow-sm p-4">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                    </div>
                    <div class="box-desc">
                        <h5 class="fw-bold">Lorem Ipsum</h5>
                        <p>FrontEnd Developer</p>
                    </div>
                    <ul class="social">
                        <li><a data-bs-toggle="modal" href="#team-modal">View More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="team-modal" aria-hidden="true" aria-labelledby="team-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 text-center">
                                <img class="img-fluid" src="https://picsum.photos/seed/das/400" alt="..."/>
                                <h2 class="fw-bold mt-5">Lorem Ipsum</h2>
                                <p>FrontEnd Developer</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="me-3">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="me-3">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop publishing software like Aldus PageMaker including versions of Lorem
                                    Ipsum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
