@extends('layouts.app')

@section('title', 'ویرایش کاربر')

@section('content')
<div class="page-header">
    <h1>✏️ ویرایش کاربر</h1>
    <p>ویرایش اطلاعات کاربر شماره {{ $id }}</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="first_name" value="قادر">
            </div>

            <div class="form-group">
                <label class="form-label">نام خانوادگی <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="last_name" value="عطایی">
            </div>

            <div class="form-group">
                <label class="form-label">شماره موبایل <span style="color:red">*</span></label>
                <input type="tel" class="form-input" name="phone" value="0701020963">
            </div>

            <div class="form-group">
                <label class="form-label">ایمیل</label>
                <input type="email" class="form-input" name="email" value="qader@example.com">
            </div>

            <button type="submit" class="submit-btn">💾 به‌روزرسانی</button>
            <a href="{{ route('users.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection