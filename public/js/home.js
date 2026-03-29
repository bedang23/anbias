function switchTab(evt, id) {
  document.querySelectorAll('.srv-tab').forEach((tab) => tab.classList.remove('active'));
  document.querySelectorAll('.services-panel').forEach((panel) => panel.classList.remove('active'));
  const current = evt?.currentTarget || evt?.target;
  if (current) current.classList.add('active');
  document.getElementById('panel-' + id).classList.add('active');
}

function toggleFaq2(btn) {
  const item = btn.closest('.faq2-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq2-item.open').forEach((i) => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

function submitForm2(e) {
  e.preventDefault();
  const btn = e.target.querySelector('.form-submit2');
  btn.textContent = '✓ Booked! We\'ll be in touch within 24 hours.';
  btn.style.background = '#27C93F';
  btn.disabled = true;
}

document.querySelectorAll('.sc-card').forEach((card) => {
  card.addEventListener('mousemove', (e) => {
    const r = card.getBoundingClientRect();
    card.style.setProperty('--mx', ((e.clientX - r.left) / r.width * 100) + '%');
    card.style.setProperty('--my', ((e.clientY - r.top) / r.height * 100) + '%');
  });
});
