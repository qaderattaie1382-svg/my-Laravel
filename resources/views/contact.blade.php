@extends('layouts.app')

@section('title', 'تماس با ما — پارک‌ نوی دایکندی')

@section('content')
<div class="page-header">
  <h1>📬 تماس با ما</h1>
  <p>هر سوالی دارید، پاسخ آماده داریم</p>
</div>

<div class="contact-layout">
  <div>
    <span class="section-label">📞 اطلاعات تماس</span>
    <h2 class="section-title" style="font-size:1.8rem">همیشه در <span>دسترس</span> هستیم</h2>
    <p style="color:var(--text-muted);line-height:1.85;margin-bottom:1.5rem">تیم پشتیبانی پارک‌ نوی دایکندی آماده پاسخگویی به سوالات شماست.</p>
    <div class="info-cards">
      <div class="info-card"><div class="info-icon">📞</div><div class="info-content"><h4>تلفن تماس</h4><p><a href="tel:0701020963">۰۷۰۱۰۲۰۹۶۳</a> — خط اصلی</p></div></div>
      <div class="info-card"><div class="info-icon">✉️</div><div class="info-content"><h4>ایمیل</h4><p><a href="mailto:info@parknewdaikundi.ir">info@parknewdaikundi.ir</a></p></div></div>
      <div class="info-card"><div class="info-icon">📍</div><div class="info-content"><h4>آدرس دفتر</h4><p>دایکندی، نیلی، شهرک جدید نیلی، زیر مسجد جامع</p></div></div>
      <div class="info-card"><div class="info-icon">💬</div><div class="info-content"><h4>چت آنلاین</h4><p>پاسخ در کمتر از ۵ دقیقه</p></div></div>
    </div>
    <div class="working-hours">
      <h4>⏰ ساعات پشتیبانی</h4>
      <div class="hours-row"><span class="day">شنبه تا چهارشنبه</span><span class="time">۸:۰۰ — ۲۰:۰۰</span></div>
      <div class="hours-row"><span class="day">پنجشنبه</span><span class="time">۸:۰۰ — ۱۷:۰۰</span></div>
      <div class="hours-row"><span class="day">جمعه</span><span style="color:var(--text-light)">تعطیل</span></div>
    </div>
  </div>

  <div class="contact-form-box">
    <div class="form-title">📝 فرم تماس</div>
    <div class="form-sub">پیام خود را بنویسید، ظرف ۲۴ ساعت پاسخ می‌دهیم</div>
    <form id="contactForm">
      <div class="form-row-2">
        <div class="form-group">
          <label class="form-label">نام <span style="color:red">*</span></label>
          <input id="contactName" class="form-input" type="text" placeholder="نام شما"/>
          <div id="contactNameError" class="error-message"></div>
        </div>
        <div class="form-group">
          <label class="form-label">نام خانوادگی <span style="color:red">*</span></label>
          <input id="contactLastName" class="form-input" type="text" placeholder="نام خانوادگی"/>
          <div id="contactLastNameError" class="error-message"></div>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">ایمیل <span style="color:red">*</span></label>
        <input id="contactEmail" class="form-input" type="email" placeholder="name@example.com"/>
        <div id="contactEmailError" class="error-message"></div>
      </div>
      <div class="form-group">
        <label class="form-label">شماره موبایل</label>
        <input id="contactPhone" class="form-input" type="tel" placeholder="اختیاری - ۰۷۰۱۰۲۰۹۶۳"/>
        <div id="contactPhoneError" class="error-message"></div>
      </div>
      <div class="form-group">
        <label class="form-label">موضوع <span style="color:red">*</span></label>
        <select id="contactSubject" class="form-select">
          <option value="">انتخاب کنید...</option>
          <option value="problem">مشکل در رزرو</option>
          <option value="payment">مشکل در پرداخت</option>
          <option value="cooperation">همکاری</option>
          <option value="suggestion">پیشنهاد</option>
          <option value="other">سایر</option>
        </select>
        <div id="contactSubjectError" class="error-message"></div>
      </div>
      <div class="form-group">
        <label class="form-label">پیام <span style="color:red">*</span></label>
        <textarea id="contactMessage" class="form-textarea" placeholder="متن پیام..."></textarea>
        <div id="contactMessageError" class="error-message"></div>
      </div>
      <button type="submit" class="submit-btn">📤 ارسال پیام</button>
    </form>
  </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush