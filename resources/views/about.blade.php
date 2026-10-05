@extends('layouts.app')

@section('title', 'درباره ما — پارک‌ نوی دایکندی')

@section('content')
<div class="about-hero" style="background-image:linear-gradient(135deg,rgba(23,88,51,.92),rgba(4,139,60,.85)),url('{{ asset('images/ali-kazal-RSRWOP43zzc-unsplash.jpg') }}')">
  <div style="max-width:700px;position:relative">
    <span class="section-label" style="background:rgba(255,255,255,0.12);color:rgb(255,255,255);margin-bottom:1rem">🏢 درباره ما</span>
    <h1>ما آمده‌ایم تا پارک کردن را متحول کنیم</h1>
    <p>پارک‌ نوی دایکندی در سال ۱۴۰۵ با یک ایده ساده شروع کرد: چرا راننده‌ها باید دقیقه‌ها وقت بگذارند تا جای پارک پیدا کنند؟</p>
  </div>
</div>

<div class="mission-section">
  <div>
    <span class="section-label">🎯 مأموریت ما</span>
    <h2 class="section-title">شهری <span>هوشمندتر</span> برای همه</h2>
    <p style="color:var(--text-muted);line-height:1.85;margin-bottom:2rem">ما باور داریم که مدیریت هوشمند پارکینگ یکی از کلیدی‌ترین راه‌حل‌ها برای کاهش ترافیک شهری است. وقتی راننده‌ها مستقیم به جای پارک می‌روند، آلودگی کمتر، وقت بیشتر و شهر بهتری خواهیم داشت.</p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap">
      <a href="{{ url('/signup') }}" class="btn-primary btn-lg">به ما بپیوندید</a>
      <a href="{{ url('/contact') }}" class="btn-ghost btn-lg">تماس با ما</a>
    </div>
  </div>
  <div class="mission-visual">
    <div class="mission-stat"><div class="ms-num">۵۰۰</div><div class="ms-label">کاربر فعال ماهانه</div></div>
    <div class="mission-stat"><div class="ms-num">۱</div><div class="ms-label">پارکینگ فعال در دایکندی</div></div>
    <div class="mission-stat"><div class="ms-num">۲۳ دقیقه</div><div class="ms-label">میانگین صرفه‌جویی هر روز</div></div>
    <div class="mission-stat"><div class="ms-num" style="color:var(--secondary-dark)">۴.۸ ⭐</div><div class="ms-label">میانگین امتیاز کاربران</div></div>
  </div>
</div>

<section class="section" style="background:var(--surface2)">
  <div class="container">
    <div style="text-align:center">
      <span class="section-label">💡 ارزش‌های ما</span>
      <h2 class="section-title">چه چیزی ما را <span>متمایز</span> می‌کند</h2>
    </div>
    <div class="values-grid">
      <div class="value-card"><span class="value-icon">🚀</span><h3>نوآوری مستمر</h3><p>هر هفته ویژگی جدیدی اضافه می‌کنیم.</p></div>
      <div class="value-card"><span class="value-icon">🔒</span><h3>امنیت اول</h3><p>رمزگذاری سطح بانکی در تمام معامله ها.</p></div>
      <div class="value-card"><span class="value-icon">🌿</span><h3>پایداری محیطی</h3><p>کاهش ترافیک و آلودگی هوا بخشی از مأموریت ماست.</p></div>
      <div class="value-card"><span class="value-icon">🤝</span><h3>همکاری با شهر</h3><p>با شهرداری‌ها همکاری نزدیک داریم.</p></div>
      <div class="value-card"><span class="value-icon">💬</span><h3>صادقانه با کاربر</h3><p>هیچ هزینه پنهانی نداریم.</p></div>
      <div class="value-card"><span class="value-icon">📱</span><h3>کاربرپسند بودن</h3><p>طراحی ما برای راننده‌های واقعی است.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="text-align:center">
      <span class="section-label">👥 تیم</span>
      <h2 class="section-title">سازنده <span>پارک‌ نوی دایکندی</span></h2>
    </div>
    <div class="team-grid">
      <div class="team-card">
        <div class="team-avatar"><img src="{{ asset('images/010.jpg') }}" alt="قادر عطایی"/></div>
        <div class="team-name">قادر عطایی</div>
        <div class="team-role">مدیرعامل و هم‌بنیانگذار</div>
        <div class="team-bio">محصل سال چهارم کمپیوتر ساینس</div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background:var(--surface2)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start;max-width:1000px;margin:0 auto">
      <div>
        <span class="section-label">📅 مسیر ما</span>
        <h2 class="section-title">از <span>ایده</span> تا واقعیت</h2>
        <p style="color:var(--text-muted);line-height:1.8">داستان پارک‌ نوی دایکندی با یک تجربه بد پارک کردن شروع شد و به یک پلتفرم ملی تبدیل شد.</p>
      </div>
      <div class="timeline">
        <div class="timeline-item"><div class="timeline-dot"></div><div class="timeline-year">بهار ۱۴۰۵</div><h4>تأسیس پارک‌ نوی دایکندی</h4><p>شروع با ۱ پارکینگ آزمایشی و ۱۰۰ کاربر اولیه</p></div>
        <div class="timeline-item"><div class="timeline-dot"></div><div class="timeline-year">بهار ۱۴۰۵</div><h4>همکاری با شاروالی</h4><p>قرارداد رسمی با شاروالی دایکندی</p></div>
        <div class="timeline-item"><div class="timeline-dot" style="background:var(--secondary)"></div><div class="timeline-year">هدف ۱۴۰۶</div><h4>گسترش ملی</h4><p>پوشش ۵ شهر بزرگ افغانستان با +۱۰ پارکینگ</p></div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>با ما همراه شوید</h2>
  <p>بخشی از جنبش پارکینگ هوشمند در افغانستان باشید</p>
  <div class="cta-btns">
    <a href="{{ url('/signup') }}" class="btn-white">🚀 ثبت‌نام رایگان</a>
    <a href="{{ url('/contact') }}" class="btn-outline-white">تماس با تیم</a>
  </div>
</section>
@endsection