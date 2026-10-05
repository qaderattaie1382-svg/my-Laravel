// js/main.js
const menuBtn = document.getElementById('mobileMenuBtn');
const mobileNav = document.getElementById('mobileNav');
const overlay = document.getElementById('mobileOverlay');

function toggleMenu() {
  mobileNav?.classList.toggle('open');
  overlay?.classList.toggle('active');
  document.body.style.overflow = mobileNav?.classList.contains('open') ? 'hidden' : '';
}

function closeMenu() {
  mobileNav?.classList.remove('open');
  overlay?.classList.remove('active');
  document.body.style.overflow = '';
}

if (menuBtn) menuBtn.addEventListener('click', toggleMenu);
if (overlay) overlay.addEventListener('click', closeMenu);

document.querySelectorAll('.mobile-nav a').forEach(link => {
  link.addEventListener('click', closeMenu);
});

const currentPath = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.mobile-nav a, nav ul a').forEach(link => {
  const href = link.getAttribute('href');
  if (href === currentPath || (currentPath === '' && href === 'index.html')) {
    link.classList.add('active');
  }
});