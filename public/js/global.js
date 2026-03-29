function toggleMobileNav() {
  const nav = document.getElementById('mNav');
  if (nav) nav.classList.toggle('open');
}

(function initLenisScroll() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (typeof window.Lenis !== 'function') return;

  const lenis = new window.Lenis({
    duration: 1.15,
    smoothWheel: true,
    syncTouch: true,
    syncTouchLerp: 0.08,
    wheelMultiplier: 0.95,
    touchMultiplier: 1,
  });

  window.anbiasLenis = lenis;

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  document.addEventListener('click', (event) => {
    const anchor = event.target.closest('a[href^="#"]');
    if (!anchor) return;

    const href = anchor.getAttribute('href');
    if (!href || href === '#') return;

    const target = document.querySelector(href);
    if (!target) return;

    event.preventDefault();
    lenis.scrollTo(target, { duration: 1, offset: -80 });
  });
})();

(function () {
  const rvEls = document.querySelectorAll('.rv');
  if (rvEls.length) {
    const rvObs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('vis');
          rvObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

    rvEls.forEach((el) => rvObs.observe(el));
  }
})();
