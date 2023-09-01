<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="@assets('images/favicon.png')" type="image/x-icon">
    <link rel="stylesheet" href="@assets('fontawesome/css/all.min.css')">
    <link rel="stylesheet" href="@assets('node_modules/bootstrap/dist/css/bootstrap.min.css')">
    @stack('style')
    <link rel="stylesheet" href="@assets('style.css')">
</head>
<body class="space-body">
<div class="loader" id="loader">
    <div class="scene">
        <div class="wrap">
            <div class="wall wall-right"></div>
            <div class="wall wall-left"></div>
            <div class="wall wall-top"></div>
            <div class="wall wall-bottom"></div>
            <div class="wall wall-back"></div>
        </div>
        <div class="wrap">
            <div class="wall wall-right"></div>
            <div class="wall wall-left"></div>
            <div class="wall wall-top"></div>
            <div class="wall wall-bottom"></div>
            <div class="wall wall-back"></div>
        </div>
    </div>
</div>
@include('layout.header')
@yield('content')
@include('layout.footer')

<canvas class="space" id="spaceCanvas"></canvas>
<div class="night">
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
    <div class="shooting_star"></div>
</div>
<div id="scroll-to-top">
    <a href="#top" class="position-relative">
        <img src="@assets('images/elements/rocket-colored-go-to-top.png')" class="rocket" alt="">
        <img src="@assets('images/elements/rocket-thrust-go-to-top.png')" class="thrust" alt="">
    </a>
</div>
{{--<div id="particles-js"></div>--}}
<script src="@assets('node_modules/gsap/dist/gsap.min.js')"></script>
<script src="@assets('node_modules/gsap/dist/ScrollTrigger.min.js')"></script>
<script src="@assets('node_modules/wowjs/dist/wow.min.js')"></script>
<script src="@assets('node_modules/jquery/dist/jquery.min.js')"></script>
<script src="@assets('node_modules/@popperjs/core/dist/umd/popper.min.js')"></script>
<script src="@assets('node_modules/bootstrap/dist/js/bootstrap.min.js')"></script>

{{--<script src="@assets('node_modules/particles.js/particles.js')"></script>--}}
@stack('script')
<script>
    new WOW().init();
</script>
<script src="@assets('script.js')"></script>
{{--<script src="@assets('pages/home/space.js')"></script>--}}
</body>
</html>
