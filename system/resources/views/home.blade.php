<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="@assets('images/favicon.png')" type="image/x-icon">
    <title>HOME</title>
    <link rel="stylesheet" href="@assets('fontawesome/css/all.min.css')">
    <link rel="stylesheet" href="@assets('node_modules/bootstrap/dist/css/bootstrap.min.css')">
    {{--    <link rel="stylesheet" href="@assets('pages/home/space.css')">--}}
    <link rel="stylesheet" href="@assets('style.css')">
</head>
<body class="space-body">
<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    <img src="@assets('images/logo-light.png')" width="220" alt="" class="logo-light">
                    <img src="@assets('images/logo-dark.png')" width="220" alt="" class="logo-dark">
                </a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Site Audit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discovery Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="home-banner">
    <div class="row h-100">
        <div class="col-12 col-md-6 order-2 position-relative">
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
        <div class="col-12 col-md-6 order-1 d-flex align-items-center justify-content-center p-5">
            <div class="text-container">
                <h1 class="display-1 work-sans fw-bolder text-white mb-5 pb-5 skew floating-element">
                    <span class="underline">Lorem </span>Ipsum
                    <span class="d-block">
                                What is Ipsum?
                           </span>
                </h1>
                <p class="text-white fs-6 mb-4 w-75">
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

<section class="container mt-5" id="counter">
    <div class="counter-container">
        <div class="counter ellipse-red">
            <span class="float-effect"><b data-count="80">80</b>+</span>
            <span class="text">Happy Clients</span>
        </div>
        <div class="counter ellipse-green">
            <span class="float-effect"> <b data-count="110">110</b>%</span>

            <span class="text">Client Satisfaction</span>
        </div>
        <div class="counter ellipse-blue">
            <span class="float-effect"> <b data-count="8">8</b>+</span>

            <span class="text">Years in Business</span>
        </div>
    </div>
</section>

<section class="container-fluid" id="testimonials">
    <div class="heading" aria-hidden="true">
        <img src="@assets('images/elements/ufo.png')" class="ufo floating-element" alt="">
        <p class="headline">Eclipsing Expectations</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>

    <div class="outerdiv">
        <div class="innerdiv">
            <!-- div1 -->
            <div class="div1 eachdiv float-effect">
                <div class="userdetails">
                    <div class="imgbox">
                        <img
                            src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-daniel.jpg"
                            alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Lorem Ipsum </p>
                        <p class="designation">CEO, <a href="#" class="website">aspectcs.com</a></p>

                    </div>
                </div>
                <div class="review">
                    <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h4>
                    <p>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum. "</p>
                </div>
            </div>
            <!-- div2 -->
            <div class="div2 eachdiv float-effect">
                <div class="userdetails">
                    <div class="imgbox">
                        <img
                            src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jonathan.jpg"
                            alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Lorem Ipsum</p>
                        <p class="designation">CEO, <a href="#" class="website">aspectcs.com</a></p>
                    </div>
                </div>
                <div class="review">
                    <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                    <p>“ It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to using 'Content here, content here', making it look
                        like readable English. ”</p>
                </div>
            </div>
            <!-- div3 -->
            <div class="div3 eachdiv float-effect">
                <div class="userdetails">
                    <div class="imgbox">
                        <img
                            src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-kira.jpg"
                            alt="">
                    </div>
                    <div class="detbox">
                        <p class="name dark">Lorem Ipsum</p>
                        <p class="designation">CEO, <a href="#" class="website">aspectcs.com</a></p>
                    </div>
                </div>
                <div class="review dark">
                    <h4>Where does it come from?</h4>
                    <p>“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                        Internet tend to repeat predefined chunks as necessary, making this the first true generator on
                        the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
                        sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum
                        is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.”</p>
                </div>
            </div>
            <!-- div4 -->
            <div class="div4 eachdiv float-effect">
                <div class="userdetails">
                    <div class="imgbox">
                        <img
                            src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-jeanette.jpg"
                            alt="">
                    </div>
                    <div class="detbox">
                        <p class="name dark">Lorem Ipsum</p>
                        <p class="designation">CEO, <a href="#" class="website">aspectcs.com</a></p>
                    </div>
                </div>
                <div class="review dark">
                    <h4>Where does it come from?</h4>
                    <p>“ It is a long established fact that a reader will be distracted by the readable content of a
                        page when looking at its layout.”</p>
                </div>
            </div>
            <!-- div5 -->
            <div class="div5 eachdiv float-effect">
                <div class="userdetails">
                    <div class="imgbox">
                        <img
                            src="https://raw.githubusercontent.com/RahulSahOfficial/testimonials_grid_section/5532c958b7d3c9b910a216b198fdd21c73112d84/images/image-patrick.jpg"
                            alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Lorem Ipsum</p>
                        <p class="designation">CEO, <a href="#" class="website">aspectcs.com</a></p>
                    </div>
                </div>
                <div class="review">
                    <h4>Where does it come from?</h4>
                    <p>“ The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                        interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also
                        reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham. ”</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container" id="paying">
    <div class="heading" aria-hidden="true">
        <img src="@assets('images/elements/astronaut.png')" class="astronaut floating-element" alt="">
        <p class="headline">Eclipsing Paying</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>
    <div class="row mt-3">
        <div class="col-6 floating-element image-section">
            <img src="@assets('images/banner/sample-flip.png')" class="person mb-4" alt="">
        </div>
        <div class="col-6 d-flex justify-content-center flex-column">
            <div id="glow-changer">
                <div class="card mb-4 glow-on-hover active">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa fa-rocket fa-2x me-3"></i><h5 class="">Are you disappointed with your company’s
                            revenue over the past year?</h5>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa fa-rocket fa-2x me-3"></i><h5 class="">Are you disappointed with your company’s
                            revenue over the past year?</h5>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa fa-rocket fa-2x me-3"></i><h5 class="">Are you disappointed with your company’s
                            revenue over the past year?</h5>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <i class="fa fa-rocket fa-2x me-3"></i><h5 class="">Are you disappointed with your company’s
                            revenue over the past year?</h5>
                    </div>
                </div>
            </div>
            <div class="mx-auto">
                <button class="glow-on-hover active btn btn-dark text-uppercase btn-lg">Book a Discovery Call <i
                        class="ms-2 fa-brands fa-searchengin fa-bounce"></i></button>

            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="orbit">
    <div class="heading mb-3" aria-hidden="true">
        <img src="@assets('images/elements/pl2.png')" class="pl2 floating-element" alt="">
        <p class="headline">Eclipsing Paying</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>

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
</section>
<section class="container mt-5" id="case-studies">
    <div class="heading" aria-hidden="true">
        <img src="@assets('images/elements/rocket.png')" class="rocket floating-element" alt="">
        <p class="headline">Case Studies</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>
    <div class="row mt-5 justify-content-evenly">
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <h6>Why do we use it?</h6>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <h6>Why do we use it?</h6>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <h6>Why do we use it?</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 text-center">
        <button class="glow-on-hover active btn btn-dark text-uppercase">View more</button>
    </div>
</section>
<section class="container mt-5" id="latest-blog">
    <div class="heading" aria-hidden="true">
        <img src="@assets('images/elements/pl2.png')" class="pl2 floating-element" alt="">
        <img src="@assets('images/elements/pl3.png')" class="pl3 floating-element" alt="">
        <p class="headline">Latest Blog</p>
        <p class="sub-headline">Client Reviews That Leave Us in Awe!</p>
    </div>
    <div class="row mt-5 justify-content-evenly">
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <p>Why do we use it?</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <p>Why do we use it?</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 position-relative">
            <div class="rounded-image-effect sun">
                <img src="https://dummyimage.com/400x400/fff/000" class="img-fluid" alt="">
                <div class="text">
                    <h5>Lorem Ipsum</h5>
                    <p>Why do we use it?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 text-center">
        <button class="glow-on-hover active btn btn-dark text-uppercase">View more</button>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2">
                <h4 class="glow-text">Services</h4>

                <ul>
                    <li>
                        <a href=""> Website Development</a>
                    </li>
                    <li>
                        <a href=""> Internet Marketing</a>
                    </li>
                    <li>
                        <a href=""> Web Applications</a>
                    </li>
                    <li>
                        <a href="">Mobile Apps</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-2">
                <h4 class="glow-text">Services</h4>

                <ul>
                    <li>
                        <a href=""> Website Development</a>
                    </li>
                    <li>
                        <a href=""> Internet Marketing</a>
                    </li>
                    <li>
                        <a href=""> Web Applications</a>
                    </li>
                    <li>
                        <a href="">Mobile Apps</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-2">
                <h4 class="glow-text">Services</h4>

                <ul>
                    <li>
                        <a href=""> Website Development</a>
                    </li>
                    <li>
                        <a href=""> Internet Marketing</a>
                    </li>
                    <li>
                        <a href=""> Web Applications</a>
                    </li>
                    <li>
                        <a href="">Mobile Apps</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-3">
                <h4 class="glow-text">Get in touch</h4>
                <h5 class="fw-bold">
                    Aspect Creative Solutions
                </h5>
                <p>
                    F-305, Dreams Mall,
                    L.B.S. Marg, Bhandup (West)
                    Mumbai - 400078
                </p>

                <p>
                    Email: <a href="mail:info@aspectcs.com">info@aspectcs.com</a>
                    <br>
                    Phone: <a href="tel:+91 98195 82500">+91 98195 82500</a>
                </p>
            </div>
        </div>
        <div class="copyright">
            Copyright &copy; 2023 All rights reserved.
        </div>
    </div>
    <div class="landscape"></div>
</footer>
<div id="particles-js"></div>

<div class="night">
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
</div>
<script src="@assets('node_modules/gsap/dist/gsap.min.js')"></script>
<script src="@assets('node_modules/gsap/dist/ScrollTrigger.min.js')"></script>
<script src="@assets('node_modules/gsap/dist/MotionPathPlugin.min.js')"></script>
<script src="@assets('node_modules/jquery/dist/jquery.min.js')"></script>
<script src="@assets('node_modules/bootstrap/dist/js/bootstrap.min.js')"></script>

<script src="@assets('node_modules/particles.js/particles.js')"></script>
<script src="@assets('script.js')"></script>
<script src="@assets('pages/home/space.js')"></script>
<script>
    $('[data-count]').each(function () {
        var $this = $(this),
            countTo = $this.attr('data-count');
        $({countNum: $this.text()}).animate({
                countNum: countTo
            },
            {
                duration: 8000,
                easing: 'linear',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                    //alert('finished');
                }
            });
    });

    /*const orbit_logos = document.querySelectorAll(".orbit-logo");
    for (let logo of orbit_logos) {

    }*/
    var delays = []
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
</body>
</html>
