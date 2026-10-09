@extends('layouts.app')

@section('title', 'افزودن کاربر جدید')

@section('content')
<div class="page-header">
    <h1>➕ افزودن کاربر جدید</h1>
    <p>اطلاعات کاربر را وارد کنید</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="first_name" placeholder="نام">
            </div>

            <div class="form-group">
                <label class="form-label">نام خانوادگی <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="last_name" placeholder="نام خانوادگی">
            </div>

            <div class="form-group">
                <label class="form-label">شماره موبایل <span style="color:red">*</span></label>
                <input type="tel" class="form-input" name="phone" placeholder="۰۷۰۱۰۲۰۹۶۳">
            </div>

            <div class="form-group">
                <label class="form-label">ایمیل</label>
                <input type="email" class="form-input" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group">
                <label class="form-label">رمز عبور <span style="color:red">*</span></label>
                <input type="password" class="form-input" name="password" placeholder="حداقل ۶ کاراکتر">
            </div>

            <button type="submit" class="submit-btn">💾 ذخیره</button>
            <a href="{{ route('users.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection