@extends('layouts.app')

@section('title', 'هزینه ها — پارک‌ نوی دایکندی')

@section('content')
<div class="page-header">
  <h1>💰 هزینه های پارکینگ نوی دایکندی</h1>
  <p>طرح مناسب خود را انتخاب کنید</p>
</div>

<section class="section" style="text-align:center;padding-bottom:1rem">
  <span class="section-label">💳 طرح‌های اشتراک</span>
  <h2 class="section-title">ساده، شفاف، <span>بدون هزینه پنهان</span></h2>
</section>

<div class="plans-grid">
  <div class="plan-card">
    <div class="plan-name">🌱 رایگان</div>
    <div class="plan-price"><span class="amount">۰</span><span class="unit">افغانی/ماه</span></div>
    <p class="plan-desc">برای استفاده شخصی و آشنایی با سیستم</p>
    <ul class="plan-features">
      <li>جستجوی پارکینگ‌</li>
      <li>مشاهده وضعیت زنده</li>
      <li>۳ رزرو در ماه</li>
      <li>پرداخت آنلاین</li>
      <li class="unavail">رزرو پیشرفته ۷ روزه</li>
      <li class="unavail">اعلان هوشمند</li>
      <li class="unavail">گزارش ماهانه</li>
    </ul>
    <a href="{{ url('/signup') }}" class="btn-ghost" style="width:100%;justify-content:center;padding:.75rem">شروع رایگان</a>
  </div>

  <div class="plan-card featured">
    <div class="plan-badge">⭐ محبوب‌ترین</div>
    <div class="plan-name" style="color:var(--primary)">🚀 پرمیوم</div>
    <div class="plan-price"><span class="amount" style="color:var(--primary)">۱۲۰</span><span class="unit">افغانی/ماه</span></div>
    <p class="plan-desc">برای راننده‌های روزانه</p>
    <ul class="plan-features">
      <li>جستجو و نقشه کامل</li>
      <li>رزروهای نامحدود</li>
      <li>رزرو پیشرفته ۷ روزه</li>
      <li>اعلان پیامکی هوشمند</li>
      <li>گزارش و تاریخچه کامل</li>
      <li>پشتیبانی اولویت‌دار</li>
      <li class="unavail">پنل مدیریت</li>
    </ul>
    <a href="{{ url('/signup') }}" class="btn-primary" style="width:100%;justify-content:center;padding:.75rem">شروع با پرمیوم</a>
  </div>

  <div class="plan-card">
    <div class="plan-name">🏢 سازمانی</div>
    <div class="plan-price"><span class="amount">۳۵۰</span><span class="unit">افغانی/ماه</span></div>
    <p class="plan-desc">برای مدیران پارکینگ و شرکت‌ها</p>
    <ul class="plan-features">
      <li>همه امکانات پرمیوم</li>
      <li>پنل مدیریت حرفه‌ای</li>
      <li>گزارش درآمد پیشرفته</li>
      <li>API اختصاصی</li>
      <li>پشتیبانی ۲۴/۷ اختصاصی</li>
    </ul>
    <a href="{{ url('/contact') }}" class="btn-secondary" style="width:100%;justify-content:center;padding:.75rem">تماس با فروش</a>
  </div>
</div>

<section style="background:var(--surface2);padding:5rem 5%">
  <div style="max-width:900px;margin:0 auto">
    <div style="text-align:center;margin-bottom:3rem">
      <span class="section-label">🚗 نرخ پارک</span>
      <h2 class="section-title">هزینه بر اساس <span>وسیله نقلیه</span></h2>
    </div>
    <div class="rates-table-wrapper">
      <table class="rates-table">
        <thead><tr><th>نوع وسیله</th><th>مرکز شهر</th><th>منطقه میانی</th><th>حومه</th></tr></thead>
        <tbody>
          <tr><td>🚗 سواری</td><td>۳۰ اف/ساعت</td><td>۲۰ اف/ساعت</td><td>۱۰ اف/ساعت</td></tr>
          <tr><td>🏍 موتورسیکلت</td><td>۱۰ اف/ساعت</td><td>۸ اف/ساعت</td><td>۵ اف/ساعت</td></tr>
          <tr><td>🚐 باربری کوچک</td><td>۷۰ اف/ساعت</td><td>۵۰ اف/ساعت</td><td>۳۰ اف/ساعت</td></tr>
          <tr><td>🚌 اتوبس</td><td>۱۲۰ اف/ساعت</td><td>۱۰۰ اف/ساعت</td><td>۷۰ اف/ساعت</td></tr>
          <tr><td>⚡ خودروی برقی</td><td>۲۰ اف/ساعت</td><td>۱۵ اف/ساعت</td><td>۱۰ اف/ساعت</td></tr>
          <tr><td>♿ معلولین</td><td colspan="3" style="text-align:center;color:var(--primary);font-weight:700">رایگان در تمام مناطق</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="cta-section">
  <h2>بدون محدودیت شروع کنید</h2>
  <p>۱۴ روز آزمایش رایگان پرمیوم — بدون نیاز به کارت بانکی</p>
  <div class="cta-btns">
    <a href="{{ url('/signup') }}" class="btn-white">🚀 آزمایش رایگان</a>
    <a href="{{ url('/contact') }}" class="btn-outline-white">سوال دارید؟</a>
  </div>
</section>
@endsection