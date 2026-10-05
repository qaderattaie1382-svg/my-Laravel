@extends('layouts.app')

@section('title', 'پارک‌ نوی دایکندی — سیستم هوشمند پارکینگ عمومی')

@section('content')
<!-- HERO -->
<section>
  <div class="hero">
    <div class="hero-content">
      <span class="hero-eyebrow">وضعیت زنده پارکینگ‌</span>
      <h1 class="anim-up">پارکینگ <span class="highlight">هوشمند</span> برای شهر <span class="accent">فردا</span></h1>
      <p class="anim-up-1" style="color:var(--text-muted);font-size:1.05rem;line-height:1.85;max-width:480px;margin-bottom:2.5rem">
        جای پارک خود را در کمتر از ۳۰ ثانیه پیدا و رزرو کنید. سیستم هوشمند مدیریت پارکینگ‌های عمومی با اطلاعات لحظه‌به‌لحظه.
      </p>
      <div class="hero-actions anim-up-2">
        <a href="{{ url('/zones') }}" class="btn-primary btn-lg">🔍 جستجوی پارکینگ</a>
        <a href="{{ url('/features') }}" class="btn-ghost btn-lg">مشاهده امکانات</a>
      </div>
      <div class="hero-trust anim-up-3">
        <div class="trust-avatars">
          <span>👤</span><span>👤</span><span>👤</span><span>👤</span><span>👤</span>
        </div>
        <div class="trust-text">بیش از <strong>۵۰۰ راننده</strong> هر ماه از ما استفاده می‌کنند</div>
      </div>
    </div>
    <div class="hero-visual anim-up-1">
      <div style="position:relative;width:100%;max-width:520px">
        <img class="hero-img" src="{{ asset('images/ian-_TPM6Z12Hk4-unsplash.jpg') }}" alt="پارکینگ هوشمند"/>
        <div class="float-badge bottom-right">
          <span>⚡</span>
          <div>
            <div style="font-size:.75rem;color:var(--text-muted)">صرفه‌جویی امروز</div>
            <div class="fb-num">۲۳ دقیقه</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LIVE STATS -->
<section class="live-stats-section">
  <div class="live-stats-container">
    <div class="stats-grid-new">
      <div class="stat-card-new"><div class="stat-number">۵۰۰+</div><div class="stat-label">🚗 راننده فعال ماهانه</div></div>
      <div class="stat-card-new"><div class="stat-number">۲۳</div><div class="stat-label">⏱ دقیقه صرفه‌جویی روزانه</div></div>
      <div class="stat-card-new"><div class="stat-number">۹۸٪</div><div class="stat-label">⭐ رضایت کاربران</div></div>
      <div class="stat-card-new"><div class="stat-number">۲۴/۷</div><div class="stat-label">📞 پشتیبانی آنلاین</div></div>
    </div>
    <div class="smart-tip-box">
      <div class="smart-tip-content">
        <div class="smart-tip-icon">💡</div>
        <div>
          <div class="smart-tip-title">نکته هوشمند امروز</div>
          <div class="smart-tip-text">پارکینگ مرکزی معمولاً بین ۱۰ تا ۱۲ ظهر شلوغ‌ترین ساعت را دارد</div>
        </div>
      </div>
      <a href="{{ url('/zones') }}" class="smart-tip-btn">رزرو هوشمند ←</a>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="section">
  <div class="container">
    <span class="section-label">✨ امکانات</span>
    <h2 class="section-title">چرا <span>پارک‌ نوی دایکندی</span>؟</h2>
    <p class="section-sub">تمام ابزارهایی که برای مدیریت راحت پارکینگ نیاز دارید</p>
    <div class="features-grid">
      <div class="feature-card"><div class="feature-icon">🗺</div><h3>نقشه زنده پارکینگ</h3><p>وضعیت لحظه‌به‌لحظه تمام جاهای پارک را روی نقشه ببینید.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
      <div class="feature-card"><div class="feature-icon">📅</div><h3>رزرو آنلاین</h3><p>تا ۷ روز از پیش جای پارک خود را رزرو کنید.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
      <div class="feature-card"><div class="feature-icon">💳</div><h3>پرداخت دیجیتال</h3><p>با موبایل پرداخت کنید. فاکتور خودکار ارسال می‌شود.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
      <div class="feature-card"><div class="feature-icon">🔔</div><h3>اعلان هوشمند</h3><p>قبل از اتمام زمان پارک، پیامک دریافت کنید.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
      <div class="feature-card"><div class="feature-icon">📊</div><h3>گزارش مصرف</h3><p>تاریخچه و هزینه‌های ماهانه خود را مشاهده کنید.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
      <div class="feature-card"><div class="feature-icon">⚡</div><h3>شارژ خودروی برقی</h3><p>همزمان با پارک، خودروی برقی خود را شارژ کنید.</p><a href="{{ url('/features') }}" class="feature-link">بیشتر بدانید →</a></div>
    </div>
  </div>
</section>

<!-- DEMO -->
<section class="section" style="background:var(--surface2)">
  <div class="container">
    <div class="demo-container">
      <div class="demo-screen">
        <div class="demo-screen-bar">
          <div class="screen-dot" style="background:#ff5f57"></div>
          <div class="screen-dot" style="background:#ffbd2e"></div>
          <div class="screen-dot" style="background:#28c840"></div>
        </div>
        <img src="{{ asset('images/photo-1551650975-87deedd944c3 (1).jpeg') }}" alt="داشبورد"/>
      </div>
      <div>
        <span class="section-label">🎬 نمایش سیستم</span>
        <h3 style="font-size:1.6rem;font-weight:900;margin-bottom:1rem">داشبورد مدیریت هوشمند</h3>
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:1.5rem">همه چیز را در یک نگاه ببینید. کنترل کامل پارکینگ در دستان شماست.</p>
        <ul class="demo-features-list">
          <li>نمایش زنده تمام پارکینگ‌</li>
          <li>گزارش روزانه، هفتگی و ماهانه</li>
          <li>مدیریت رزروها و لغو خودکار</li>
          <li>پشتیبانی از موبایل، تبلت و دسکتاپ</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ZONES PREVIEW -->
<section class="section">
  <div class="container">
    <span class="section-label">پارکینگ‌ های فعال</span>
    <h2 class="section-title">وضعیت <span>لحظه‌ای</span> پارکینگ‌</h2>
    <div class="zones-preview">
      <div class="zone-mini">
        <img src="{{ asset('images/laryssa-ares-ky1Pd0Sa-3Q-unsplash.jpg') }}" alt="پارکینگ"/>
        <div class="zone-mini-body">
          <div class="zone-mini-header">
            <div><h4>🟢 پارکینگ نوی دایکندی</h4><div class="zone-mini-addr">نیلی، شهرک جدید</div></div>
            <span class="badge badge-green">۷۰٪ خالی</span>
          </div>
          <div class="zone-bar"><div class="zone-fill fill-g" style="width:30%"></div></div>
          <div class="zone-mini-stats">۱۴۰ جای خالی از ۲۰۰ · ۲۰ افغانی/ساعت</div>
        </div>
      </div>
      <div class="zone-mini">
        <img src="{{ asset('images/photo-1573348722427-f1d6819fdf98.jpeg') }}" alt="پارکینگ"/>
        <div class="zone-mini-body">
          <div class="zone-mini-header">
            <div><h4>🟡 پارکینگ مرکزی نیلی</h4><div class="zone-mini-addr">نیلی، مرکز شهر</div></div>
            <span class="badge badge-yellow">30٪ خالی</span>
          </div>
          <div class="zone-bar"><div class="zone-fill fill-y" style="width:55%"></div></div>
          <div class="zone-mini-stats">45 جای خالی از ۱۵۰ · ۳۰ افغانی/ساعت</div>
        </div>
      </div>
      <div class="zone-mini">
        <img src="{{ asset('images/parking-zaer.jpg') }}" alt="پارکینگ"/>
        <div class="zone-mini-body">
          <div class="zone-mini-header">
            <div><h4>🔴 پارکینگ جنوبی نیلی</h4><div class="zone-mini-addr">نیلی، جاده شرقی</div></div>
            <span class="badge badge-red">88٪ پر</span>
          </div>
          <div class="zone-bar"><div class="zone-fill fill-r" style="width:90%"></div></div>
          <div class="zone-mini-stats">12 جای خالی از ۱۰۰ · ۲۵ افغانی/ساعت</div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:2rem">
      <a href="{{ url('/zones') }}" class="btn-primary btn-lg">مشاهده پارکینگ ها ←</a>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section" style="background:var(--surface2)">
  <div class="container">
    <span class="section-label">💬 نظرات کاربران</span>
    <h2 class="section-title">رانندگان راضی از <span>پارک‌ نوی دایکندی</span></h2>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p class="testimonial-text">دیگه وقتم رو برای پیدا کردن جا تلف نمی‌کنم. قبل از رسیدن رزرو می‌کنم و مستقیم میرم.</p>
        <div class="testimonial-author">
          <div class="author-avatar"><img src="{{ asset('images/20250919_203251.jpg') }}" alt="کاربر"/></div>
          <div><div class="author-name">ابوالفضل علی زاده</div><div class="author-role">راننده روزانه. نیلی</div></div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="stars">★★★★★</div>
        <p class="testimonial-text">به عنوان مدیر پارکینگ، داشبورد پارک‌ نوی دایکندی کارم رو خیلی ساده‌تر کرده. ۳۰٪ درآمد بیشتر شد!</p>
        <div class="testimonial-author">
          <div class="author-avatar"><img src="{{ asset('images/IMG_6065.JPG') }}" alt="کاربر"/></div>
          <div><div class="author-name">قادر عطایی</div><div class="author-role">مدیر پارکینگ · نیلی</div></div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="stars">★★★★☆</div>
        <p class="testimonial-text">پرداخت دیجیتال عالیه. دیگه دنبال خرد نمیگردم. اعلان‌های اتمام وقت هم خیلی کمک می‌کنه.</p>
        <div class="testimonial-author">
          <div class="author-avatar"><img src="{{ asset('images/IMG_6064.JPG') }}" alt="کاربر"/></div>
          <div><div class="author-name">مختار یقوبی</div><div class="author-role">کارمند · نیلی</div></div>
        </div>
      </div>
    </div>
    <div class="client-logos">
      <div class="client-logo"><img src="{{ asset('images/images.png') }}" alt="شاروالی"/> شاروالی نیلی</div>
      <div class="client-logo"><img src="{{ asset('images/IMG-20230611-WA0039-q7t7tq2sm3xhxfylaz6l0hfb8a7clggkjjl03juhl4.jpg') }}" alt="مسافربری"/> شرکت های مسافر بری</div>
      <div class="client-logo"><img src="{{ asset('images/images (1).jpeg') }}" alt="دولتی"/> ارگان های دولتی</div>
      <div class="client-logo"><img src="{{ asset('images/images.jpeg') }}" alt="مردم"/> مردم عام</div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <div style="text-align:center">
      <span class="section-label">❓ سوالات متداول</span>
      <h2 class="section-title">پاسخ سوالات <span>شما</span></h2>
    </div>
    <div class="faq-list">
      <div class="faq-item"><div class="faq-question">آیا ثبت‌نام رایگان است؟</div><div class="faq-answer">بله! ثبت‌نام و استفاده پایه از پارک‌ نوی دایکندی کاملاً رایگان است.</div></div>
      <div class="faq-item"><div class="faq-question">اطلاعات پرداختم امن است؟</div><div class="faq-answer">تمام معامله ها با رمزگذاری SSL انجام می‌شوند. ما هیچ اطلاعات کارت بانکی ذخیره نمی‌کنیم.</div></div>
      <div class="faq-item"><div class="faq-question">آیا می‌توانم رزرو را لغو کنم؟</div><div class="faq-answer">بله، تا ۳۰ دقیقه قبل از ورود بدون جریمه لغو کنید و مبلغ به خود تان برمی‌گردد.</div></div>
      <div class="faq-item"><div class="faq-question">آیا برای موتورسیکلت هم رزرو وجود دارد؟</div><div class="faq-answer">بله! از سواری، موتور، ماشین باری کوچک، اتوبس و خودروهای برقی پشتیبانی می‌کنیم.</div></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="benefits-section">
  <div class="benefits-container">
    <div class="benefits-header">
      <span class="section-label">✨ مزایای ویژه</span>
      <h2 class="section-title">چرا <span>پارک نوی دایکندی</span> را انتخاب می‌کنند؟</h2>
      <p class="section-sub">۳ دلیل اصلی که رانندگان ما را دوست دارند</p>
    </div>
    <div class="benefits-grid">
      <div class="benefit-card">
        <div class="benefit-icon icon-green">💰</div>
        <h3 class="benefit-title">قیمت‌های منصفانه</h3>
        <p class="benefit-desc">تعرفه‌های شفاف و رقابتی. هیچ هزینه پنهانی وجود ندارد. جاهایی ویژه برای معلولین رایگان است.</p>
        <div class="benefit-footer">از ۱۰ افغانی/ساعت</div>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon icon-gold">🔒</div>
        <h3 class="benefit-title">امنیت تضمینی</h3>
        <p class="benefit-desc">دوربین مداربسته ۲۴ ساعته، نورپردازی مناسب و گشت امنیتی در تمام پارکینگ‌ها.</p>
        <div class="benefit-footer">۱۰۰٪ امن و مطمئن</div>
      </div>
      <div class="benefit-card">
        <div class="benefit-icon icon-dark">⚡</div>
        <h3 class="benefit-title">فناوری پیشرفته</h3>
        <p class="benefit-desc">سیستم تشخیص پلاک خودکار، رزرو آنلاین و نمایش زنده ظرفیت پارکینگ‌ها.</p>
        <div class="benefit-footer">به‌روزرسانی لحظه‌ای</div>
      </div>
    </div>
    <div class="benefits-btn-wrap">
      <a href="{{ url('/features') }}" class="btn-primary">مشاهده همه امکانات ←</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2>همین الان شروع کنید</h2>
  <p>به بیش از ۵۰۰ راننده بپیوندید که هر روز با پارک‌ نوی دایکندی وقت صرفه‌جویی می‌کنند.</p>
  <div class="cta-btns">
    <a href="{{ url('/signup') }}" class="btn-white">🚀 ثبت‌نام رایگان</a>
    <a href="{{ url('/zones') }}" class="btn-outline-white">🔍 جستجوی پارکینگ</a>
  </div>
</section>
@endsection