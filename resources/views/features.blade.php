@extends('layouts.app')

@section('title', 'امکانات — پارک‌ نوی دایکندی')

@section('content')
<div class="page-header">
  <h1>✨ امکانات پارک‌ نوی دایکندی</h1>
  <p>همه چیز که نیاز دارید در یک پلتفرم است.</p>
</div>

<div class="main-feature">
  <div>
    <span class="section-label">🗺 نقشه زنده</span>
    <h2 class="section-title">وضعیت <span>لحظه‌ای</span> همه جاها</h2>
    <p style="color:var(--text-muted);line-height:1.85;margin-bottom:1.5rem">سنسورهای هوشمند اطلاعات دقیق خالی یا پر بودن را هر ۳۰ ثانیه به‌روز می‌کنند. دیگر نیازی به گشتن ندارید.</p>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:.7rem">
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> به‌روزرسانی هر ۳۰ ثانیه</li>
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> نمایش جای EV و معلولین جداگانه</li>
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> پیش‌بینی ظرفیت با هوش مصنوعی</li>
    </ul>
  </div>
  <div class="feature-visual">
    <div class="feature-visual-title">🗺 پارکینگ A — طبقه اول <span class="badge badge-green" style="margin-right:auto">زنده</span></div>
    <div>
      <div class="slot-row">
        <div class="slot slot-full2">🚗</div><div class="slot slot-empty">🅿</div>
        <div class="slot slot-empty">🅿</div><div class="slot slot-full2">🚗</div>
        <div class="slot slot-ev">⚡</div>
      </div>
      <div class="slot-row">
        <div class="slot slot-empty">🅿</div><div class="slot slot-full2">🚗</div>
        <div class="slot slot-res">⏳</div><div class="slot slot-empty">🅿</div>
        <div class="slot slot-full2">🚗</div>
      </div>
      <div class="slot-row">
        <div class="slot slot-dis">♿</div><div class="slot slot-dis">♿</div>
        <div class="slot slot-empty">🅿</div><div class="slot slot-empty">🅿</div>
        <div class="slot slot-full2">🚗</div>
      </div>
    </div>
  </div>
</div>

<div class="main-feature" style="background:var(--surface2)">
  <div class="feature-visual">
    <div class="feature-visual-title">💳 پرداخت سریع</div>
    <div class="payment-card">
      <div class="pc-label">مبلغ قابل پرداخت</div>
      <div class="pc-amount">۴۰ افغانی</div>
      <div style="font-size:.8rem;opacity:.7;margin-top:.3rem">۷ ساعت · پارکینگ نوی دایکندی</div>
    </div>
    <div>
      <span class="pay-method active">💳 کارت بانکی</span>
      <span class="pay-method">📱موبایل‌</span>
      <span class="pay-method">👛 کیف پول</span>
    </div>
  </div>
  <div>
    <span class="section-label">💳 پرداخت دیجیتال</span>
    <h2 class="section-title">پرداخت <span>بدون</span> دردسر</h2>
    <p style="color:var(--text-muted);line-height:1.85;margin-bottom:1.5rem">با تمام روش‌های پرداخت آنلاین افغانستان کار می‌کنیم. هیچ صف انتظاری، هیچ پول خردی لازم نیست.</p>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:.7rem">
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> پشتیبانی از تمام بانک‌ های افغانستان</li>
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> فاکتور دیجیتال خودکار</li>
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> پشتیبانی از کد تخفیف</li>
    </ul>
  </div>
</div>

<div class="main-feature">
  <div>
    <span class="section-label">🔔 اعلان هوشمند</span>
    <h2 class="section-title">هیچوقت <span>فراموش</span> نکنید</h2>
    <p style="color:var(--text-muted);line-height:1.85;margin-bottom:1.5rem">سیستم هوشمند قبل از اتمام زمان پارک، به شما یادآوری می‌کند. از جریمه جلوگیری کنید.</p>
    <ul style="list-style:none;display:flex;flex-direction:column;gap:.7rem">
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> پیامک ۳۰ و ۱۰ دقیقه قبل از اتمام</li>
      <li style="display:flex;align-items:center;gap:.7rem;color:var(--text-muted)"><span style="color:var(--primary);font-weight:900">✓</span> تمدید آنلاین بدون بازگشت به ماشین</li>
    </ul>
  </div>
  <div class="feature-visual">
    <div class="feature-visual-title">🔔 اعلان‌های اخیر</div>
    <div class="notif-item" style="border-right:3px solid var(--secondary)">
      <div class="notif-icon">⏰</div>
      <div class="notif-text"><strong>زمان پارک شما ۳۰ دقیقه دیگر تمام می‌شود</strong>پارکینگ نوی دایکندی · ردیف ب، جای ۴<div class="notif-time">۵ دقیقه پیش</div></div>
    </div>
    <div class="notif-item" style="border-right:3px solid var(--primary)">
      <div class="notif-icon">✅</div>
      <div class="notif-text"><strong>رزرو شما تأیید شد</strong>فردا ۱۴:۳۰ · پارکینگ نوی دایکندی<div class="notif-time">۲ ساعت پیش</div></div>
    </div>
  </div>
</div>

<section style="background:var(--surface2);padding:4rem 0">
  <div class="container" style="padding:0 5%;text-align:center;margin-bottom:3rem">
    <span class="section-label">📋 فهرست کامل</span>
    <h2 class="section-title">تمام امکانات <span>پارک‌ نوی دایکندی</span></h2>
  </div>
  <div class="features-all-grid">
    <div class="feat-mini-card"><div class="feat-mini-icon">🗺</div><h4>نقشه تعاملی</h4><p>نمایش زنده وضعیت پارکینگ‌ با زوم و فیلتر</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">📅</div><h4>رزرو پیشرفته</h4><p>رزرو تا ۷ روز از پیش با انتخاب جای دقیق</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">💳</div><h4>پرداخت آنلاین</h4><p>تمام روش‌های پرداخت افغانستان با امنیت بالا</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">🔔</div><h4>اعلان هوشمند</h4><p>یادآوری پیامکی قبل از اتمام زمان پارک</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">📊</div><h4>گزارش ماهانه</h4><p>تاریخچه و آنالیز هزینه‌های پارکینگ شما</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">⚡</div><h4>شارژ EV</h4><p>رزرو ایستگاه شارژ خودروی برقی</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">♿</div><h4>دسترسی معلولین</h4><p>جاهای ویژه رایگان</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">🔐</div><h4>ورود بی‌کارت</h4><p>ورود با QR کد یا پلاک خودکار</p></div>
    <div class="feat-mini-card"><div class="feat-mini-icon">👨‍💼</div><h4>پنل مدیریت</h4><p>داشبورد کامل برای مدیران پارکینگ</p></div>
  </div>
</section>

<section class="cta-section">
  <h2>آماده‌اید امتحان کنید؟</h2>
  <p>ثبت‌نام رایگان، بدون نیاز به کارت اعتباری</p>
  <div class="cta-btns">
    <a href="{{ url('/signup') }}" class="btn-white">🚀 شروع رایگان</a>
    <a href="{{ url('/pricing') }}" class="btn-outline-white">مشاهده هزینه ها</a>
  </div>
</section>
@endsection