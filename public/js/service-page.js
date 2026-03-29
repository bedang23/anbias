window.toggleTech = function toggleTech(header) {
  const category = header.closest('.tech-category');

  if (!category) {
    return;
  }

  const isOpen = category.classList.contains('open');
  document.querySelectorAll('.tech-category.open').forEach((item) => item.classList.remove('open'));

  if (!isOpen) {
    category.classList.add('open');
  }
};

window.toggleFaq2 = function toggleFaq2(button) {
  const item = button.closest('.faq2-item');

  if (!item) {
    return;
  }

  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq2-item.open').forEach((entry) => entry.classList.remove('open'));

  if (!isOpen) {
    item.classList.add('open');
  }
};

window.submitForm2 = function submitForm2(event) {
  event.preventDefault();
  const button = event.target.querySelector('.form-submit2');

  if (!button) {
    return;
  }

  button.textContent = "✓ Booked! We'll be in touch within 24 hours.";
  button.style.background = '#27C93F';
  button.disabled = true;
};

(function () {
  document.querySelectorAll('.result-card').forEach((card) => {
    card.addEventListener('mousemove', (event) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mx', ((event.clientX - rect.left) / rect.width) * 100 + '%');
      card.style.setProperty('--my', ((event.clientY - rect.top) / rect.height) * 100 + '%');
    });
  });
})();

(function () {
  document.querySelectorAll('.tech-badge').forEach((badge, index) => {
    badge.style.opacity = '0';
    badge.style.transform = 'translateX(20px)';
    badge.style.transition = `opacity 0.4s ${0.9 + index * 0.1}s, transform 0.4s ${0.9 + index * 0.1}s`;

    setTimeout(() => {
      badge.style.opacity = '1';
      badge.style.transform = 'none';
    }, (0.9 + index * 0.1) * 1000);
  });
})();
