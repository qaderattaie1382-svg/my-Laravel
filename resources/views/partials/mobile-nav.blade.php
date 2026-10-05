<div class="mobile-nav" id="mobileNav">
  <ul>
    <li><a href="{{ url('/') }}">خانه</a></li>
    <li><a href="{{ url('/features') }}">امکانات</a></li>
    <li><a href="{{ url('/zones') }}">پارکینگ‌ها</a></li>
    <li><a href="{{ url('/pricing') }}">هزینه ها</a></li>
    <li><a href="{{ url('/about') }}">درباره ما</a></li>
    <li><a href="{{ url('/contact') }}">تماس</a></li>
    <li><a href="{{ url('/profile') }}" id="mobileProfileLink" style="display:none">👤 پروفایل</a></li>
  </ul>
  <div class="nav-actions-mobile">
    <a href="{{ url('/login') }}" class="btn-ghost">ورود</a>
    <a href="{{ url('/signup') }}" class="btn-primary">ثبت‌نام ←</a>
  </div>
</div>

<div class="mobile-overlay" id="mobileOverlay"></div>