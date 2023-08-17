@extends('layout.app')
@push('style')
    <link rel="stylesheet" href="@assets('pages/404/404.css')">
@endpush
@section('content')

    {{--<div class="scene">
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

    <canvas class="space" id="spaceCanvas"></canvas>--}}
<section class="position-relative">
    <div class="cutout-overlay">
        <div class="title">
            {{--        <div class="pretitle">Welcome to</div>--}}
            <div class="maintitle">
                {{--<div class="inlineLogo">
                    <svg width="100" height="200" viewBox="0 0 201 408" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M68.8237 305.302C68.8346 230.315 68.9108 155.828 68.8051 81.3412C68.7826 65.4573 73.8484 50.9195 79.6166 36.5411C84.2092 25.0933 89.5691 13.977 96.4985 3.71414C99.8081 -1.18766 101.363 -1.26798 104.346 3.65428C117.812 25.8779 128.555 49.1985 132.247 75.2356C132.596 77.694 132.505 80.2243 132.505 82.7212C132.526 188.536 132.54 294.351 132.494 400.165C132.493 402.342 133.528 404.98 131.08 406.61C128.111 408.587 124.796 406.723 123.876 402.721C119.857 385.235 115.953 367.721 111.725 350.286C109.885 342.7 107.967 335.096 105.043 327.819C104.181 325.675 103.364 322.945 100.659 322.915C97.7278 322.882 96.6565 325.673 95.8143 327.993C90.4681 342.724 87.3687 358.073 83.6155 373.236C81.2221 382.905 79.3269 392.696 77.1663 402.424C76.6269 404.852 76.2489 407.449 72.7262 407.339C69.9855 407.253 68.5271 406.559 68.5456 403.276C68.7283 370.785 68.754 338.294 68.8237 305.302ZM118.1 123.5C118.073 115.007 118.02 121.492 118.033 113C118.037 110.158 106.557 84.5298 103 84.5857C100.5 84.5857 101.5 84.6063 98 84.6063C94.8978 84.5752 82.4182 110.142 82.4317 113C82.498 126.987 82.5083 116.867 82.4377 130.854C82.4227 133.814 83.51 135.027 86.548 134.989C95.7053 134.873 104.866 134.88 114.023 134.99C117.091 135.026 118.175 133.681 118.126 130.788C118.042 125.794 118.101 129.495 118.1 123.5Z" fill="black"/>
                        <path d="M146.571 236.298C146.307 249.671 146.754 262.408 152.234 274.453C155.72 282.118 160.415 288.947 165.849 295.288C175.438 306.475 182.812 318.752 184.967 333.604C185.633 338.2 185.952 342.851 186.291 347.487C186.485 350.132 185.604 351.855 182.43 352.034C169.11 352.786 155.791 352.182 142.473 352.228C138.422 352.242 138.897 349.166 138.899 346.499C138.926 311.851 138.951 277.202 138.973 242.553C139.001 196.744 139.017 150.934 139.081 105.124C139.085 102.776 138.415 100.181 140.738 97.832C144.186 103.271 145.956 109.007 146.382 114.919C147.94 136.537 147.024 158.199 146.985 179.843C146.952 198.495 146.716 217.147 146.571 236.298Z" fill="black"/>
                        <path d="M49.1776 352.329C39.5159 352.317 30.3477 352.186 21.1843 352.341C16.5857 352.418 14.7319 350.866 14.7556 345.944C14.8367 329.134 19.8577 314.177 30.514 301.188C39.1071 290.714 47.2954 280.03 51.3777 266.824C52.9588 261.71 53.9157 256.558 53.9051 251.146C53.8208 208.315 53.8731 165.483 53.831 122.651C53.8242 115.728 55.0398 109.092 57.6843 102.703C58.3003 101.215 58.7463 99.612 60.5578 98.9248C62.0538 100.894 61.4683 102.949 61.4695 104.843C61.517 184.507 61.5249 264.17 61.5345 343.834C61.5356 352.375 61.5264 352.375 53.1732 352.332C52.0065 352.326 50.8399 352.329 49.1776 352.329Z" fill="black"/>
                        <path d="M21.3273 275.507C29.4865 256.771 37.4888 238.383 45.9892 218.851C46.8275 220.375 47.2252 220.774 47.2563 221.201C49.214 248.041 47.4728 273.512 27.0439 294.595C14.5457 307.494 8.39348 323.913 8.29128 342.227C8.27929 344.378 7.63878 346.525 7.63674 348.675C7.63387 351.681 6.36306 352.781 3.3814 352.664C-0.0940654 352.527 -0.00547323 350.345 0.00139377 347.853C0.0621238 325.881 6.73372 305.708 16.5405 286.355C18.2673 282.948 19.6362 279.359 21.3273 275.507Z" fill="black"/>
                        <path d="M157.286 268.955C151.007 252.725 153.599 236.418 153.763 218.996C157.142 222.434 157.697 225.657 158.945 228.486C170.767 255.278 182.57 282.079 194.217 308.948C197.879 317.397 199.939 326.235 199.632 335.597C199.492 339.878 200.238 344.191 200.641 348.484C200.839 350.595 201.088 352.535 198.022 352.697C195.456 352.832 194.11 351.993 193.481 349.325C192.324 344.41 192.842 339.403 192.228 334.442C190.228 318.275 183.042 304.724 172.595 292.647C166.461 285.555 160.968 278.081 157.286 268.955Z" fill="black"/>
                        <path d="M192.533 373.545C193.331 384.283 190.479 393.17 182.073 401.28C180.318 386.413 174.935 373.662 168.606 359.713C175.688 359.713 181.271 359.71 186.853 359.715C188.727 359.716 189.346 361.123 189.891 362.537C191.204 365.94 192.413 369.375 192.533 373.545Z" fill="black"/>
                        <path d="M9.87789 366.245C10.6817 360.877 13.6763 359.345 18.3952 359.932C22.4476 360.437 26.6416 359.334 31.3715 360.956C25.4021 373.427 20.75 386.098 19.2291 399.768C10.6752 395.9 6.25685 379.897 9.87789 366.245Z" fill="black"/>
                    </svg>
                </div>--}}404
            </div>
            <div class="subtitle">Page not found</div>
        </div>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="20vw" height="20vw" class="cutout tl">
            <path fill="#000000" transform="translate(100 100)">
                <animate
                    attributeName="d"
                    dur="10000ms"
                    repeatCount="indefinite"
                    values="
M43.5,-46.8C53.7,-33.3,57.4,-16.7,60.6,3.2C63.7,23,66.4,46,56.2,54C46,62,23,55,0.2,54.8C-22.5,54.6,-45.1,61.1,-59.2,53.1C-73.2,45.1,-78.8,22.5,-73.7,5.1C-68.5,-12.3,-52.7,-24.5,-38.6,-38C-24.5,-51.4,-12.3,-66.1,2.2,-68.3C16.7,-70.5,33.3,-60.2,43.5,-46.8Z;
M49.8,-53.9C59.5,-40.1,59,-20,57.7,-1.2C56.5,17.6,54.7,35.2,44.9,47.8C35.2,60.5,17.6,68.1,3.2,64.9C-11.2,61.7,-22.4,47.7,-38.4,35C-54.3,22.4,-75.1,11.2,-78.5,-3.5C-82,-18.2,-68.3,-36.3,-52.3,-50.2C-36.3,-64,-18.2,-73.6,0.9,-74.5C20,-75.4,40.1,-67.8,49.8,-53.9Z;
M57,-48.9C73.5,-40.6,86,-20.3,87.4,1.4C88.9,23.1,79.1,46.2,62.7,60.4C46.2,74.5,23.1,79.7,0.4,79.2C-22.3,78.8,-44.5,72.8,-58.8,58.7C-73,44.5,-79.2,22.3,-76.9,2.4C-74.5,-17.5,-63.6,-35.1,-49.3,-43.4C-35.1,-51.6,-17.5,-50.6,1.4,-52C20.3,-53.4,40.6,-57.1,57,-48.9Z;
M50.3,-46C65.3,-35.3,77.6,-17.7,78.5,0.9C79.4,19.4,68.8,38.8,53.8,51.2C38.8,63.6,19.4,69,4.8,64.2C-9.8,59.5,-19.6,44.4,-32.6,32C-45.7,19.6,-61.9,9.8,-64.7,-2.8C-67.5,-15.4,-56.8,-30.7,-43.8,-41.5C-30.7,-52.2,-15.4,-58.3,1.1,-59.5C17.7,-60.6,35.3,-56.8,50.3,-46Z;
M46,-53.9C54.5,-37.5,52.9,-18.7,51.6,-1.3C50.3,16.2,49.4,32.4,40.9,41.4C32.4,50.4,16.2,52.2,0.2,52.1C-15.9,51.9,-31.8,49.8,-40.4,40.8C-49.1,31.8,-50.5,15.9,-48,2.5C-45.5,-10.9,-39.1,-21.8,-30.4,-38.2C-21.8,-54.6,-10.9,-76.5,3.9,-80.4C18.7,-84.4,37.5,-70.3,46,-53.9Z;
M43.5,-46.8C53.7,-33.3,57.4,-16.7,60.6,3.2C63.7,23,66.4,46,56.2,54C46,62,23,55,0.2,54.8C-22.5,54.6,-45.1,61.1,-59.2,53.1C-73.2,45.1,-78.8,22.5,-73.7,5.1C-68.5,-12.3,-52.7,-24.5,-38.6,-38C-24.5,-51.4,-12.3,-66.1,2.2,-68.3C16.7,-70.5,33.3,-60.2,43.5,-46.8Z;">
                </animate>
            </path>
        </svg>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="20vw" height="20vw" class="cutout rm">
            <path fill="#000000" transform="translate(100 100)">
                <animate
                    attributeName="d"
                    dur="10000ms"
                    repeatCount="indefinite"
                    values="
M45.3,-50.5C56.4,-34.2,61.6,-17.1,63.7,2.1C65.7,21.2,64.7,42.4,53.5,55.2C42.4,68,21.2,72.4,2.3,70.1C-16.6,67.9,-33.3,58.9,-44.8,46.1C-56.4,33.3,-62.9,16.6,-64.1,-1.2C-65.3,-19.1,-61.3,-38.1,-49.7,-54.5C-38.1,-70.8,-19.1,-84.5,-1,-83.5C17.1,-82.5,34.2,-66.9,45.3,-50.5Z;
M42,-43.6C56.3,-27.6,71.2,-13.8,70.3,-0.9C69.4,12,52.7,24,38.4,39.7C24,55.3,12,74.6,-3.4,78C-18.7,81.3,-37.4,68.7,-53.6,53.1C-69.8,37.4,-83.5,18.7,-80.6,2.9C-77.7,-12.8,-58.1,-25.7,-41.9,-41.7C-25.7,-57.7,-12.8,-76.9,0.5,-77.4C13.8,-77.9,27.6,-59.6,42,-43.6Z;
M50.3,-52.5C63.7,-37,71.8,-18.5,74.1,2.2C76.3,23,72.6,45.9,59.3,56C45.9,66,23,63.1,2.1,61C-18.8,58.9,-37.6,57.7,-51,47.7C-64.4,37.6,-72.3,18.8,-73.4,-1.1C-74.5,-21.1,-68.9,-42.2,-55.6,-57.8C-42.2,-73.3,-21.1,-83.3,-1.3,-82C18.5,-80.7,37,-68.1,50.3,-52.5Z;
M40.5,-45.3C52.2,-28.9,61,-14.5,61,0C61,14.5,52.3,29.1,40.7,38.2C29.1,47.3,14.5,51.1,-2.3,53.3C-19.1,55.6,-38.3,56.5,-48.6,47.4C-59,38.3,-60.6,19.1,-59,1.6C-57.4,-15.9,-52.6,-31.8,-42.2,-48.2C-31.8,-64.6,-15.9,-81.5,-0.7,-80.8C14.5,-80,28.9,-61.7,40.5,-45.3Z;
M60.1,-58.6C74.9,-45.3,81.9,-22.6,77,-5C72,12.7,55.1,25.4,40.2,37.7C25.4,50,12.7,61.8,-4.8,66.6C-22.4,71.4,-44.7,69.3,-54.1,57C-63.5,44.7,-60,22.4,-58.6,1.4C-57.2,-19.5,-57.9,-39.1,-48.5,-52.4C-39.1,-65.7,-19.5,-72.8,1.6,-74.4C22.6,-76,45.3,-71.9,60.1,-58.6Z;
M61.5,-61.4C77.5,-45.4,86.8,-22.7,84,-2.8C81.2,17.1,66.3,34.2,50.2,50.4C34.2,66.5,17.1,81.8,-3.2,85C-23.5,88.2,-47.1,79.4,-61.4,63.2C-75.6,47.1,-80.6,23.5,-76.3,4.3C-71.9,-14.8,-58.2,-29.7,-44,-45.7C-29.7,-61.6,-14.8,-78.8,3.9,-82.7C22.7,-86.6,45.4,-77.4,61.5,-61.4Z;
M45.3,-50.5C56.4,-34.2,61.6,-17.1,63.7,2.1C65.7,21.2,64.7,42.4,53.5,55.2C42.4,68,21.2,72.4,2.3,70.1C-16.6,67.9,-33.3,58.9,-44.8,46.1C-56.4,33.3,-62.9,16.6,-64.1,-1.2C-65.3,-19.1,-61.3,-38.1,-49.7,-54.5C-38.1,-70.8,-19.1,-84.5,-1,-83.5C17.1,-82.5,34.2,-66.9,45.3,-50.5Z;">
                </animate>
            </path>
        </svg>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="45vw" height="45vw" class="cutout cl">
            <path fill="#000000" transform="translate(100 100)">
                <animate
                    attributeName="d"
                    dur="10000ms"
                    repeatCount="indefinite"
                    values="
M43.5,-46.8C53.7,-33.3,57.4,-16.7,60.6,3.2C63.7,23,66.4,46,56.2,54C46,62,23,55,0.2,54.8C-22.5,54.6,-45.1,61.1,-59.2,53.1C-73.2,45.1,-78.8,22.5,-73.7,5.1C-68.5,-12.3,-52.7,-24.5,-38.6,-38C-24.5,-51.4,-12.3,-66.1,2.2,-68.3C16.7,-70.5,33.3,-60.2,43.5,-46.8Z;
M57,-48.9C73.5,-40.6,86,-20.3,87.4,1.4C88.9,23.1,79.1,46.2,62.7,60.4C46.2,74.5,23.1,79.7,0.4,79.2C-22.3,78.8,-44.5,72.8,-58.8,58.7C-73,44.5,-79.2,22.3,-76.9,2.4C-74.5,-17.5,-63.6,-35.1,-49.3,-43.4C-35.1,-51.6,-17.5,-50.6,1.4,-52C20.3,-53.4,40.6,-57.1,57,-48.9Z;
M46,-53.9C54.5,-37.5,52.9,-18.7,51.6,-1.3C50.3,16.2,49.4,32.4,40.9,41.4C32.4,50.4,16.2,52.2,0.2,52.1C-15.9,51.9,-31.8,49.8,-40.4,40.8C-49.1,31.8,-50.5,15.9,-48,2.5C-45.5,-10.9,-39.1,-21.8,-30.4,-38.2C-21.8,-54.6,-10.9,-76.5,3.9,-80.4C18.7,-84.4,37.5,-70.3,46,-53.9Z;
M49.8,-53.9C59.5,-40.1,59,-20,57.7,-1.2C56.5,17.6,54.7,35.2,44.9,47.8C35.2,60.5,17.6,68.1,3.2,64.9C-11.2,61.7,-22.4,47.7,-38.4,35C-54.3,22.4,-75.1,11.2,-78.5,-3.5C-82,-18.2,-68.3,-36.3,-52.3,-50.2C-36.3,-64,-18.2,-73.6,0.9,-74.5C20,-75.4,40.1,-67.8,49.8,-53.9Z;
M50.3,-46C65.3,-35.3,77.6,-17.7,78.5,0.9C79.4,19.4,68.8,38.8,53.8,51.2C38.8,63.6,19.4,69,4.8,64.2C-9.8,59.5,-19.6,44.4,-32.6,32C-45.7,19.6,-61.9,9.8,-64.7,-2.8C-67.5,-15.4,-56.8,-30.7,-43.8,-41.5C-30.7,-52.2,-15.4,-58.3,1.1,-59.5C17.7,-60.6,35.3,-56.8,50.3,-46Z;
M43.5,-46.8C53.7,-33.3,57.4,-16.7,60.6,3.2C63.7,23,66.4,46,56.2,54C46,62,23,55,0.2,54.8C-22.5,54.6,-45.1,61.1,-59.2,53.1C-73.2,45.1,-78.8,22.5,-73.7,5.1C-68.5,-12.3,-52.7,-24.5,-38.6,-38C-24.5,-51.4,-12.3,-66.1,2.2,-68.3C16.7,-70.5,33.3,-60.2,43.5,-46.8Z;">
                </animate>
            </path>
        </svg>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="40vw" height="40vw" class="cutout cr">
            <path fill="#000000" transform="translate(100 100)">
                <animate
                    attributeName="d"
                    dur="10000ms"
                    repeatCount="indefinite"
                    values="
M34.5,-33.1C45.2,-23.8,54.7,-11.9,56.4,1.7C58.1,15.3,52,30.6,41.3,41.7C30.6,52.9,15.3,59.9,-2,61.9C-19.3,63.9,-38.5,60.9,-52.5,49.7C-66.4,38.5,-75,19.3,-73.6,1.3C-72.3,-16.6,-61,-33.2,-47.1,-42.5C-33.2,-51.8,-16.6,-53.9,-2.3,-51.5C11.9,-49.2,23.8,-42.4,34.5,-33.1Z;
M57,-48.9C73.5,-40.6,86,-20.3,87.4,1.4C88.9,23.1,79.1,46.2,62.7,60.4C46.2,74.5,23.1,79.7,0.4,79.2C-22.3,78.8,-44.5,72.8,-58.8,58.7C-73,44.5,-79.2,22.3,-76.9,2.4C-74.5,-17.5,-63.6,-35.1,-49.3,-43.4C-35.1,-51.6,-17.5,-50.6,1.4,-52C20.3,-53.4,40.6,-57.1,57,-48.9Z;
M46,-53.9C54.5,-37.5,52.9,-18.7,51.6,-1.3C50.3,16.2,49.4,32.4,40.9,41.4C32.4,50.4,16.2,52.2,0.2,52.1C-15.9,51.9,-31.8,49.8,-40.4,40.8C-49.1,31.8,-50.5,15.9,-48,2.5C-45.5,-10.9,-39.1,-21.8,-30.4,-38.2C-21.8,-54.6,-10.9,-76.5,3.9,-80.4C18.7,-84.4,37.5,-70.3,46,-53.9Z;
M41.2,-44C54.2,-28.3,66,-14.1,69.4,3.4C72.8,20.9,67.7,41.8,54.8,52.3C41.8,62.9,20.9,63.1,-0.8,63.9C-22.5,64.6,-45,66.1,-56.6,55.5C-68.3,45,-69.1,22.5,-66.4,2.7C-63.7,-17.1,-57.5,-34.2,-45.9,-49.9C-34.2,-65.6,-17.1,-80,-1.5,-78.5C14.1,-77,28.3,-59.7,41.2,-44Z;
M34.5,-33.1C45.2,-23.8,54.7,-11.9,56.4,1.7C58.1,15.3,52,30.6,41.3,41.7C30.6,52.9,15.3,59.9,-2,61.9C-19.3,63.9,-38.5,60.9,-52.5,49.7C-66.4,38.5,-75,19.3,-73.6,1.3C-72.3,-16.6,-61,-33.2,-47.1,-42.5C-33.2,-51.8,-16.6,-53.9,-2.3,-51.5C11.9,-49.2,23.8,-42.4,34.5,-33.1Z">
                </animate>
            </path>
        </svg>
    </div>

    <div class="image-overlay">
        <img id="astronaut" class="astronaut floating-element"
             src="https://cdn.discordapp.com/attachments/1011438176054804590/1133039913282064456/mshtk_astronaut_in_the_style_of_graphic_black_and_white_foresho_1b7481ab-8ddb2c-408f-b695-678fa907844b.png">
        <img class="ufo floating-element"
             src="https://cdn.discordapp.com/attachments/1011438176054804590/1133042117124567160/mshtk_astronaut_in_the_stylb.png">
        <img class="planet1 floating-element"
             src="https://cdn.discordapp.com/attachments/1011438176054804590/1133042495014588467/pl2.png">
        <img class="planet2 floating-element"
             src="https://cdn.discordapp.com/attachments/1011438176054804590/1133042495262044191/pl3.png">
        <img class="rocket floating-element"
             src="https://cdn.discordapp.com/attachments/1011438176054804590/1133052707322744852/rocket.png">
    </div>
</section>
@endsection
@push('script')
@endpush
