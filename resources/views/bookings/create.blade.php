@extends('layouts.app')

@section('title', 'افزودن رزرو جدید')

@section('content')
<div class="page-header">
    <h1>➕ افزودن رزرو جدید</h1>
    <p>اطلاعات رزرو را وارد کنید</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام پارکینگ <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="parking_name" placeholder="نام پارکینگ">
            </div>

            <div class="form-group">
                <label class="form-label">تعداد ساعت <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="hours" placeholder="3">
            </div>

            <div class="form-group">
                <label class="form-label">تاریخ رزرو <span style="color:red">*</span></label>
                <input type="date" class="form-input" name="date">
            </div>

            <div class="form-group">
                <label class="form-label">شماره موبایل <span style="color:red">*</span></label>
                <input type="tel" class="form-input" name="user_phone" placeholder="۰۷۰۱۰۲۰۹۶۳">
            </div>

            <button type="submit" class="submit-btn">💾 ذخیره</button>
            <a href="{{ route('bookings.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection