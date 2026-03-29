function toggleMobileNav() {
  const nav = document.getElementById('mNav');
  if (nav) nav.classList.toggle('open');
}

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
