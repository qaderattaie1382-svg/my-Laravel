<nav>
  <a href="{{ url('/') }}" class="nav-logo">
    <div class="nav-logo-icon">🅿</div>
    <div class="nav-logo-text">پارک<span> نوی دایکندی</span></div>
  </a>
  <ul>
    <li><a href="{{ url('/') }}">خانه</a></li>
    <li><a href="{{ url('/features') }}">امکانات</a></li>
    <li><a href="{{ url('/zones') }}">پارکینگ‌ها</a></li>
    <li><a href="{{ url('/pricing') }}">هزینه ها</a></li>
    <li><a href="{{ url('/about') }}">درباره ما</a></li>
    <li><a href="{{ url('/contact') }}">تماس</a></li>
    <li><a href="{{ url('/profile') }}" id="profileLink" style="display:none">👤 پروفایل</a></li>
  </ul>
  <div class="nav-actions">
    <a href="{{ url('/login') }}" class="btn-ghost">ورود</a>
    <a href="{{ url('/signup') }}" class="btn-primary">ثبت‌نام ←</a>
  </div>
  <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
</nav>