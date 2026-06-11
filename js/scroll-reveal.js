(function () {
  if (
    window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches
  ) {
    return;
  }

  if (!('IntersectionObserver' in window)) return;

  var selectors = [
    '.section-label',
    '.marquee-intro',
    '.marquee-track',
    '.promise-quote',
    '.promise-body',
    '.promise-pillars',
    '.who-heading',
    '.who-body',
    '.craft-heading',
    '.craft-tile',
    '.why-heading',
    '.why-item',
    '.home-cta-heading',
    '.home-cta-body',
    '.page-hero-sub',
    '.page-hero-body',
    '.membership-tiles-heading',
    '.mem-tile',
    '.tier-inner--left',
    '.tier-inner--centre',
    '.tier-inner--right',
    '.how-heading',
    '.how-grid > div',
    '.page-cta-heading',
    '.page-cta-body',
    '.contact-heading',
    '.contact-intro',
    '.contact-email-link',
    '.contact-email-note',
    '.contact-note',
    '.contact-insta',
    '.footer-inner'
  ];

  var elements = document.querySelectorAll(selectors.join(', '));
  if (!elements.length) return;

  elements.forEach(function (el) {
    el.classList.add('reveal');
  });

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal--visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: '0px 0px -32px 0px' }
  );

  elements.forEach(function (el) {
    observer.observe(el);
  });
})();
