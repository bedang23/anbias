let currentStep = 1;
const totalSteps = 3;
const phoneInput = document.getElementById('phone');
let intlPhone = null;

if (phoneInput && typeof window.intlTelInput === 'function') {
  intlPhone = window.intlTelInput(phoneInput, {
    initialCountry: 'in',
    preferredCountries: ['in', 'us', 'ae'],
    nationalMode: true,
    dropdownContainer: document.body,
    autoPlaceholder: 'aggressive',
    utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.0/build/js/utils.js',
  });
}

function updateProgress(step) {
  for (let i = 1; i <= totalSteps; i++) {
    const fpStep = document.getElementById('fpStep' + i);
    const dot = fpStep?.querySelector('.fp-dot');
    if (!fpStep || !dot) continue;
    fpStep.classList.remove('active', 'done');
    if (i < step) {
      fpStep.classList.add('done');
      dot.innerHTML = '✓';
    } else if (i === step) {
      fpStep.classList.add('active');
      dot.innerHTML = i;
    } else {
      dot.innerHTML = i;
    }
  }

  for (let i = 1; i < totalSteps; i++) {
    const line = document.getElementById('fpLine' + i);
    if (line) line.classList.toggle('done', step > i);
  }
}

function showStep(step) {
  document.querySelectorAll('.form-step').forEach((s) => s.classList.remove('active'));
  const target = document.getElementById('step' + step);
  if (target) {
    target.classList.add('active');
    target.closest('.form-card').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }
  currentStep = step;
  updateProgress(step);
}

function validateField(input) {
  const rule = input.dataset.validate || '';
  const val = input.value.trim();
  const id = input.id;
  const fg = document.getElementById('fg-' + id);
  if (!fg) return true;

  let valid = true;
  let msg = '';

  if (rule.includes('required') && !val) {
    valid = false;
    msg = 'This field is required.';
  } else if (rule.includes('email') && val && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
    valid = false;
    msg = 'Enter a valid email address.';
  } else if (rule.includes('url') && val && !/^https?:\/\/.+\..+/.test(val)) {
    valid = false;
    msg = 'Enter a valid URL starting with https://';
  } else if (id === 'phone' && val) {
    const hasIntlUtils = typeof window.intlTelInputUtils !== 'undefined';
    if (intlPhone && hasIntlUtils) {
      if (!intlPhone.isValidNumber()) {
        valid = false;
        msg = 'Please enter a valid phone number.';
      }
    } else {
      const digitsOnly = val.replace(/\D/g, '');
      if (!/^[0-9+()\-\s]{7,40}$/.test(val) || digitsOnly.length < 7 || digitsOnly.length > 15) {
        valid = false;
        msg = 'Please enter a valid phone number.';
      }
    }
  } else if (rule.includes('minlen')) {
    const min = parseInt(rule.match(/minlen:(\d+)/)?.[1] || 0, 10);
    if (val.length < min) {
      valid = false;
      msg = `Minimum ${min} characters required.`;
    }
  }

  const errEl = document.getElementById('err-' + id);
  if (errEl && msg) errEl.textContent = msg;

  fg.classList.toggle('is-valid', valid && val.length > 0);
  fg.classList.toggle('is-error', !valid);
  return valid;
}

document.querySelectorAll('[data-validate]').forEach((input) => {
  input.addEventListener('blur', () => validateField(input));
  input.addEventListener('input', () => {
    const fg = document.getElementById('fg-' + input.id);
    if (fg && fg.classList.contains('is-error')) validateField(input);
  });
});

if (phoneInput && intlPhone) {
  phoneInput.addEventListener('countrychange', () => {
    if (phoneInput.value.trim().length > 0) validateField(phoneInput);
  });
}

const formStartedAt = document.getElementById('formStartedAt');
if (formStartedAt) {
  formStartedAt.value = Math.floor(Date.now() / 1000).toString();
}

function validateStep(step) {
  let allValid = true;

  if (step === 1) {
    ['fullName', 'email', 'phone'].forEach((id) => {
      const el = document.getElementById(id);
      if (el && !validateField(el)) allValid = false;
    });

    const ws = document.getElementById('website');
    if (ws && ws.value.trim() && !validateField(ws)) allValid = false;
  } else if (step === 2) {
    const goalVal = document.getElementById('goalValue').value;
    const fg = document.getElementById('fg-goal');
    if (!goalVal) {
      allValid = false;
      fg.classList.add('is-error');
      fg.querySelector('.field-error').style.display = 'block';
    }
  } else if (step === 3) {
    const msg = document.getElementById('message');
    if (!validateField(msg)) allValid = false;
  }

  return allValid;
}

function goToStep(step) {
  if (step > currentStep && !validateStep(currentStep)) return;
  showStep(step);
}

document.querySelectorAll('.stack-pill').forEach((pill) => {
  pill.addEventListener('click', () => {
    pill.classList.toggle('selected');
    const selected = [...document.querySelectorAll('.stack-pill.selected')].map((p) => p.dataset.val);
    document.getElementById('stackValue').value = selected.join(', ');
  });
});

function selectGoal(el) {
  document.querySelectorAll('.goal-card').forEach((c) => c.classList.remove('selected'));
  el.classList.add('selected');
  document.getElementById('goalValue').value = el.dataset.val;
  const fg = document.getElementById('fg-goal');
  if (fg) {
    fg.classList.remove('is-error');
    fg.querySelector('.field-error').style.display = 'none';
  }
}

function selectBudget(el) {
  document.querySelectorAll('.budget-opt').forEach((o) => o.classList.remove('selected'));
  el.classList.add('selected');
  document.getElementById('budgetValue').value = el.dataset.val;
}

function selectTimeline(el) {
  document.querySelectorAll('.timeline-opt').forEach((o) => o.classList.remove('selected'));
  el.classList.add('selected');
  document.getElementById('timelineValue').value = el.dataset.val;
}

function applyServerFieldError(serverKey, message) {
  const fieldMap = {
    full_name: 'fullName',
    email: 'email',
    phone_number: 'phone',
    website_url: 'website',
    message: 'message',
  };

  const id = fieldMap[serverKey];
  if (!id) return;

  const fg = document.getElementById('fg-' + id);
  const errEl = document.getElementById('err-' + id);
  if (!fg || !errEl) return;
  fg.classList.add('is-error');
  errEl.textContent = message;
}

document.getElementById('contactForm')?.addEventListener('submit', async function (e) {
  e.preventDefault();

  if (!validateStep(3)) {
    return;
  }

  const form = e.currentTarget;
  const btn = document.getElementById('submitBtn');
  const label = document.getElementById('submitLabel');
  const arrow = document.getElementById('submitArrow');
  const successBox = document.getElementById('formSuccess');
  const successEmail = document.getElementById('successEmail');
  const formError = document.getElementById('formErrorGlobal');

  if (formError) {
    formError.textContent = '';
  }

  if (btn && label && arrow) {
    btn.disabled = true;
    label.textContent = 'Sending...';
    arrow.textContent = '⏳';
  }

  if (phoneInput && intlPhone) {
    const normalizedPhone = intlPhone.getNumber();
    if (normalizedPhone) {
      phoneInput.value = normalizedPhone;
    }
  }

  try {
    const res = await fetch(form.dataset.action || form.action, {
      method: 'POST',
      headers: {
        Accept: 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: new FormData(form),
    });

    const payload = await res.json().catch(() => ({}));

    if (!res.ok) {
      if (payload?.errors) {
        Object.entries(payload.errors).forEach(([key, messages]) => {
          applyServerFieldError(key, Array.isArray(messages) ? messages[0] : String(messages));
        });
      }
      throw new Error(payload?.message || 'Could not submit your request. Please try again.');
    }

    if (successEmail) {
      successEmail.textContent = document.getElementById('email')?.value || '';
    }

    document.querySelectorAll('.form-step').forEach((stepEl) => stepEl.classList.remove('active'));
    document.querySelector('.form-progress')?.setAttribute('style', 'display:none');
    if (successBox) {
      successBox.classList.add('show');
    }
    form.reset();
    if (phoneInput && intlPhone) {
      intlPhone.setCountry('in');
      phoneInput.value = '';
    }
    if (formStartedAt) {
      formStartedAt.value = Math.floor(Date.now() / 1000).toString();
    }
  } catch (error) {
    if (formError) {
      formError.textContent = error.message || 'Could not submit your request. Please try again.';
    }
  } finally {
    if (btn && label && arrow) {
      btn.disabled = false;
      label.textContent = 'Claim My Strategy Session';
      arrow.textContent = '↗';
    }
  }
});

document.querySelectorAll('.btn-next, .btn-submit').forEach((btn) => {
  btn.addEventListener('mousemove', (e) => {
    const r = btn.getBoundingClientRect();
    const x = e.clientX - r.left - r.width / 2;
    const y = e.clientY - r.top - r.height / 2;
    btn.style.transform = `translate(${x * 0.18}px, ${y * 0.25}px)`;
  });

  btn.addEventListener('mouseleave', () => {
    btn.style.transform = '';
  });
});

const textarea = document.getElementById('message');
if (textarea) {
  const counter = document.createElement('span');
  counter.style.cssText = 'font-family:var(--mono);font-size:0.58rem;color:var(--text3);letter-spacing:0.06em;display:block;text-align:right;margin-top:4px';
  textarea.parentNode.appendChild(counter);

  textarea.addEventListener('input', () => {
    const len = textarea.value.length;
    counter.textContent = len + ' chars' + (len < 20 ? ` — ${20 - len} more to go` : '');
    counter.style.color = len >= 20 ? 'rgba(74,222,128,0.7)' : 'var(--text3)';
  });
}
