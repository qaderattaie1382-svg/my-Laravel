@extends('layouts.app')

@section('title', 'ثبت‌نام — پارک‌ نوی دایکندی')

@section('content')
<div class="auth-wrapper">
  <div class="auth-visual" style="background-image:linear-gradient(135deg,rgba(13,45,28,.92),rgba(26,107,60,.85)),url('{{ asset('images/laryssa-ares-ky1Pd0Sa-3Q-unsplash.jpg') }}')">
    <div class="auth-visual-content">
      <h2>در ۲ دقیقه شروع کنید</h2>
      <p>ثبت‌نام رایگان، بدون نیاز به کارت بانکی.</p>
      <div class="steps-visual">
        <div class="step-v"><div class="step-v-num">۱</div><div>اطلاعات اولیه خود را وارد کنید</div></div>
        <div class="step-v"><div class="step-v-num">۲</div><div>شماره موبایل را تأیید کنید</div></div>
        <div class="step-v"><div class="step-v-num">۳</div><div>انتخاب پارکینگ و رزرو کنید!</div></div>
      </div>
    </div>
  </div>

  <div class="auth-form-side">
    <div class="auth-form-box">
      <h1>ایجاد حساب</h1>
      <p class="auth-subtitle">به پارک نوی دایکندی خوش آمدید</p>
      <form id="signupForm">
        <div class="form-row-2">
          <div class="form-group">
            <label class="form-label">نام <span style="color:red">*</span></label>
            <input id="firstName" class="form-input" type="text" placeholder="نام"/>
            <div id="firstNameError" class="error-message"></div>
          </div>
          <div class="form-group">
            <label class="form-label">نام خانوادگی <span style="color:red">*</span></label>
            <input id="lastName" class="form-input" type="text" placeholder="نام خانوادگی"/>
            <div id="lastNameError" class="error-message"></div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">شماره موبایل <span style="color:red">*</span></label>
          <input id="phone" class="form-input" type="tel" placeholder="۰۷۰۱۰۲۰۹۶۳"/>
          <div id="phoneError" class="error-message"></div>
        </div>
        <div class="form-group">
          <label class="form-label">ایمیل (اختیاری)</label>
          <input id="email" class="form-input" type="email" placeholder="name@example.com"/>
          <div id="emailError" class="error-message"></div>
        </div>
        <div class="form-group">
          <label class="form-label">رمز عبور <span style="color:red">*</span></label>
          <input id="password" class="form-input" type="password" placeholder="حداقل ۶ کاراکتر"/>
          <div id="passwordError" class="error-message"></div>
          <div id="passwordStrength" class="password-strength"></div>
        </div>
        <div class="form-group">
          <label class="form-label">تکرار رمز عبور <span style="color:red">*</span></label>
          <input id="confirmPassword" class="form-input" type="password" placeholder="رمز عبور را دوباره وارد کنید"/>
          <div id="confirmPasswordError" class="error-message"></div>
        </div>
        <div class="terms-row">
          <input id="terms" type="checkbox"/>
          <span>با <a href="#">قوانین و مقررات</a> و <a href="#">حریم خصوصی</a> موافقم <span style="color:red">*</span></span>
        </div>
        <div id="termsError" class="error-message"></div>
        <button type="submit" class="auth-btn">✅ ایجاد حساب رایگان</button>
      </form>
    </div>
  </div>
</div>
@endsection