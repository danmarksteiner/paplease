// Site Scripts
(function() {

    // Responsive variables
    var xs = 0;
    sm = 320,
    md = 480,
    lg = 768,
    xl = 1024,
    xxl = 1367;

    // Hides page until fully loaded and fires either mobile or desktop events
    $(window).on('load', function () {
        docReady();
    });

    $(window).on('load', function () {
        if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i)) {
            eventSlider();
        }
    });
    
    // Once loaded reveal page 
    function docReady () {
        setTimeout(function(){
            $('.body-wrapper').removeClass('fade-out');
            // alert($(window).width());
            // alert($(window).height());
        }, 250);
        spotlightAnimation();
    }

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
    ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
            return false;
            } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
            };
        });
        }
    }
    $(".hamburger").removeClass("is-active");
    $('.navigation-off-canvas').removeClass("navigation-open");
    });

    $('.hamburger').on({ 'touchstart' : function(){
        $(this).toggleClass("is-active");
        $('.navigation-off-canvas').toggleClass("navigation-open");
    } });
    
    // Mobile Event slider 
    function eventSlider() {
        var slider = new MasterSlider();
        slider.setup('slider' , {
            width: 250,
            height: 550,
            dir: 'h',
            autoplay: false,
            layout: 'partialview',
            swipe: true,
            space: 22,
            preload: 0,
            loop: true
        });
        slider.control('arrows' , {
            autohide:false
        });
    }

    // Greensock Animations
    //banner animation	
    function spotlightAnimation() {

        tl1 = new TimelineMax({ease:Power2.easeOut});
        var dur = 0.25;

        // Frame 1
        tl1.from('#spotlightLogo', (2), {autoAlpha:0,  delay:1}, "frame1");
        tl1.from('#spotlightScroll', (2), {autoAlpha:0}, "frame1+=2");
    };

    // Services Items
    $('.services-item').on('click', function () {
        if (window.innerWidth < xl) {
        $(this).siblings(".services-reveal").slideToggle();
        $(this).toggleClass('active');
        $(this).siblings(".services-reveal-btn").toggleClass('active');
        } else {
            $(".services-reveal").removeClass('active');
            $(this).siblings(".services-reveal").addClass('active');
        }
    });
    $('.serviceClose').on('click', function () {
        $('.services-reveal').removeClass('active');
        $('.services-reveal-btn').removeClass('active');
    });

})();