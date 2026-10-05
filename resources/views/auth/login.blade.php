@extends('layouts.app')

@section('title', 'ورود — پارک‌ نوی دایکندی')

@section('content')
<div class="auth-wrapper">
  <div class="auth-visual" style="background-image:linear-gradient(135deg,rgba(15,69,38,.9),rgba(45,158,95,.82)),url('{{ asset('images/photo-1506521781263-d8422e82f27a.jpeg') }}')">
    <div class="auth-visual-content">
      <span class="auth-big-icon">🅿</span>
      <h2>خوش برگشتید!</h2>
      <p>با ورود به حساب، تمام رزروها و تاریخچه خود را مدیریت کنید.</p>
      <ul class="auth-benefits">
        <li>رزرو سریع بدون وارد کردن اطلاعات</li>
        <li>تاریخچه کامل پارک‌های شما</li>
        <li>اعلان‌های هوشمند پیامکی</li>
        <li>گزارش ماهانه هزینه‌ها</li>
      </ul>
    </div>
  </div>

  <div class="auth-form-side">
    <div class="auth-form-box">
      <h1>ورود به حساب</h1>
      <p class="auth-subtitle">اطلاعات خود را وارد کنید</p>
      <form id="loginForm">
        <div class="form-group">
          <label class="form-label">شماره موبایل <span style="color:red">*</span></label>
          <input id="identifier" class="form-input" type="tel" placeholder="۰۷۰۱۰۲۰۹۶۳"/>
          <div id="identifierError" class="error-message"></div>
        </div>
        <div class="form-group">
          <div style="display:flex;justify-content:space-between">
            <label class="form-label">رمز عبور <span style="color:red">*</span></label>
            <a href="#" style="font-size:.8rem;color:var(--primary)">فراموشی رمز</a>
          </div>
          <input id="password" class="form-input" type="password" placeholder="رمز عبور خود را وارد کنید"/>
          <div id="passwordError" class="error-message"></div>
        </div>
        <button type="submit" class="auth-btn">🔐 ورود به حساب</button>
        <div class="auth-switch">حساب ندارید؟ <a href="{{ url('/signup') }}">ثبت‌نام کنید</a></div>
      </form>
    </div>
  </div>
</div>
@endsection