// ScrollReveal

window.sr = ScrollReveal();


sr.reveal('.nuestros-servicios .cards .cartas-servicios .card-body', {
    duration: 2000,
    distance: '300px',
    origin: 'left'
});


// Smooth Scroll

$(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });