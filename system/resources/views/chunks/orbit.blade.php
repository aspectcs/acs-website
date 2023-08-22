<section class="container-fluid p-0" id="orbit">
    <div class="heading mb-3" aria-hidden="true">
        <img src="@assets('images/elements/space-rocket-with-astronaut-white.png')"
             class="space-rocket-with-astronaut floating-element" alt="">
        <p class="headline">Eclipsing Paying</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>

    <div class="position-relative">
        <div class="satellite hscroll floating-effect"></div>
        <div class="space-shuttle hscroll _1">
            <span class="jet-trail _1"></span>
            <span class="jet-trail _2"></span>
        </div>
        <div class="space-shuttle hscroll _2">
            <span class="jet-trail _1"></span>
            <span class="jet-trail _2"></span>
        </div>
        <div class="space-shuttle hscroll _3">
            <span class="jet-trail _1"></span>
            <span class="jet-trail _2"></span>
        </div>
        <div class="planet-container">
            <div class="planet outer _3">
            <span class="orbit-logo">
                    <img src="https://picsum.photos/seed/logo1/100" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="https://picsum.photos/seed/logo2/100" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="https://picsum.photos/seed/logo3/100" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="https://picsum.photos/seed/logo4/100" width="100" alt="">
            </span>
                <div class="planet outer _2">
                <span class="orbit-logo">
                        <img src="https://picsum.photos/seed/logo5/100" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="https://picsum.photos/seed/logo6/100" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="https://picsum.photos/seed/logo7/100" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="https://picsum.photos/seed/logo8/100" width="100" alt="">
                </span>
                    <div class="planet outer _1">
                   <span class="orbit-logo">
                            <img src="https://picsum.photos/seed/logo9/100" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="https://picsum.photos/seed/logo10/100" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="https://picsum.photos/seed/logo11/100" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="https://picsum.photos/seed/logo12/100" width="100" alt="">
                    </span>
                        <div class="planet inner">
                            <div class="sun">
                                {{--<div class="ray_box">
                                    <div class="ray ray1"></div>
                                    <div class="ray ray2"></div>
                                    <div class="ray ray3"></div>
                                    <div class="ray ray4"></div>
                                    <div class="ray ray5"></div>
                                    <div class="ray ray6"></div>
                                    <div class="ray ray7"></div>
                                    <div class="ray ray8"></div>
                                    <div class="ray ray9"></div>
                                    <div class="ray ray10"></div>
                                </div>--}}
                            </div>
                            <img src="@assets('images/favicon.png')" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us">
        <div class="container ">
            <div class="row">
                <div class="col-12 col-md-8">
                    <span class="h1 text-black">Contact us</span>
                    <p class="text-black">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took
                        a galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                        was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and
                        more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum.</p>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center">
                    <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                            class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')
    <script>
        gsap.to(".orbit-logo", {
            duration: 30,
            rotation: 360,
            repeat: -1,
            delay: function (index, target, targets) {
                return Math.floor(Math.random() * targets.length / 2) * index;
            },
            ease: "linear",
        });
        gsap.to('.hscroll', {
            x: 420,
            ease: "none",
            scrollTrigger: {
                trigger: ".hscroll",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    </script>
@endpush
