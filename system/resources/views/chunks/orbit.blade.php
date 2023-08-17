<section class="container-fluid p-0" id="orbit">
    <div class="heading mb-3" aria-hidden="true">
        <img src="@assets('images/elements/space-rocket-with-astronaut-white.png')" class="space-rocket-with-astronaut floating-element" alt="">
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
                    <img src="@assets('images/favicon.png')" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="@assets('images/favicon.png')" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="@assets('images/favicon.png')" width="100" alt="">
            </span>
                <span class="orbit-logo">
                    <img src="@assets('images/favicon.png')" width="100" alt="">
            </span>
                <div class="planet outer _2">
                <span class="orbit-logo">
                        <img src="@assets('images/favicon.png')" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="@assets('images/favicon.png')" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="@assets('images/favicon.png')" width="100" alt="">
                </span>
                    <span class="orbit-logo">
                        <img src="@assets('images/favicon.png')" width="100" alt="">
                </span>
                    <div class="planet outer _1">
                   <span class="orbit-logo">
                            <img src="@assets('images/favicon.png')" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="@assets('images/favicon.png')" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="@assets('images/favicon.png')" width="100" alt="">
                    </span>
                        <span class="orbit-logo">
                            <img src="@assets('images/favicon.png')" width="100" alt="">
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
