$( document ).ready(function() {



    $('.js-scroll-to').click(function(e){
        e.preventDefault();
        sElement = $(this).attr('href');
        scrollToSection(sElement);
    })



    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('#back-to-top').fadeTo(1000, 1);
        } else {
            $('#back-to-top').fadeTo(1000, 0);
        }
    });

    $('#back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    if (window.location.hash) {
        const anchorId = window.location.hash.substring(1);

        // Verzögere den Start des sanften Scrollens leicht
        setTimeout(function() {
            scrollToSection('#' + anchorId);
        }, 50); // Etwas längere Verzögerung hier könnte sicherer sein


    }
    function scrollToSection(sElement){
        element = $(sElement);
        $('html, body').animate({
            scrollTop: element.offset().top - 110
        }, 500);
    }

})


