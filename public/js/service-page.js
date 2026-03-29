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

window.submitForm2 = async function submitForm2(event) {
  event.preventDefault();
  const form = event.target;
  const button = form.querySelector('.form-submit2');
  const success = form.querySelector('#serviceFormSuccess');
  const errorBox = form.querySelector('#serviceFormError');
  const startedAt = form.querySelector('.form-started-at');

  if (!button) {
    return;
  }

  if (startedAt && !startedAt.value) {
    startedAt.value = Math.floor(Date.now() / 1000).toString();
  }
  if (success) success.classList.remove('show');
  if (errorBox) errorBox.textContent = '';

  const originalText = button.textContent;
  button.textContent = 'Sending...';
  button.disabled = true;

  try {
    const res = await fetch(form.action, {
      method: 'POST',
      headers: {
        Accept: 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: new FormData(form),
    });

    const payload = await res.json().catch(() => ({}));
    if (!res.ok) {
      const firstServerError = payload?.errors
        ? Object.values(payload.errors)[0]?.[0]
        : null;
      throw new Error(firstServerError || payload?.message || 'Could not submit your request. Please try again.');
    }

    form.reset();
    if (startedAt) {
      startedAt.value = Math.floor(Date.now() / 1000).toString();
    }
    if (success) {
      success.classList.add('show');
    }
  } catch (error) {
    if (errorBox) {
      errorBox.textContent = error.message || 'Could not submit your request. Please try again.';
    }
  } finally {
    button.textContent = originalText;
    button.disabled = false;
  }
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
  document.querySelectorAll('.form-started-at').forEach((input) => {
    if (!input.value) {
      input.value = Math.floor(Date.now() / 1000).toString();
    }
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
