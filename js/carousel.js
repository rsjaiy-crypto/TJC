(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.querySelector('.hero-carousel');
    if (!carousel) return;

    var slides  = carousel.querySelectorAll('.hero-slide');
    var dots    = carousel.querySelectorAll('.hero-dot');
    var current = 0;
    var timer;

    function goTo(n) {
      slides[current].classList.remove('active');
      if (dots[current]) dots[current].classList.remove('active');
      current = ((n % slides.length) + slides.length) % slides.length;
      slides[current].classList.add('active');
      if (dots[current]) dots[current].classList.add('active');
    }

    function start() {
      timer = setInterval(function () { goTo(current + 1); }, 5000);
    }

    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        clearInterval(timer);
        goTo(i);
        start();
      });
    });

    goTo(0);
    start();
  });
})();
