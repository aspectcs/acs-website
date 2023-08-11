$(window).scroll(function(){
    var sticky = $('.fixed-top'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('stuck');
    else sticky.removeClass('stuck');
});


particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 250,
            "density": {
                "enable": true,
                "value_area": 789.1476416322727
            }
        },
        "color": {
            "value": "#ffffff"
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
        },
        "opacity": {
            "value": 0.48927153781200905,
            "random": false,
            "anim": {
                "enable": true,
                "speed": 2.9,
                "opacity_min": 0,
                "sync": false
            }
        },
        "size": {
            "value": 3,
            "random": true,
            "anim": {
                "enable": true,
                "speed": 1,
                "size_min": 0,
                "sync": false
            }
        },
        "line_linked": {
            "enable": false,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0,
            "width": 0
        },
        /*"move": {
            "enable": true,
            "speed": 0.2,
            "direction": "none",
            "random": true,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }*/
    },
});


// Define the animation function for the elements with the "hover" class
function animateHoverElements(elements) {
    elements.forEach((element) => {
        const tl = gsap.timeline({ repeat: -1, yoyo: true });
        const duration = Math.min(Math.max(Math.random() * 4, 1.3), 4);
        const distance = Math.min(Math.max(Math.random() * 50, 20), 80);

        tl.to(element, { y: -distance, duration: duration, ease: 'power1.inOut' });
        tl.to(element, { y: 0, duration: duration, ease: 'power1.inOut' });
    });
}

// Call the function to apply the animation to the "hover" elements
animateHoverElements(document.querySelectorAll('.floating-element'));