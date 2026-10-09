@extends('layouts.app')

@section('title', 'ویرایش رزرو')

@section('content')
<div class="page-header">
    <h1>✏️ ویرایش رزرو</h1>
    <p>ویرایش اطلاعات رزرو شماره {{ $id }}</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام پارکینگ <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="parking_name" value="پارکینگ نوی دایکندی">
            </div>

            <div class="form-group">
                <label class="form-label">تعداد ساعت <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="hours" value="3">
            </div>

            <div class="form-group">
                <label class="form-label">تاریخ رزرو <span style="color:red">*</span></label>
                <input type="date" class="form-input" name="date" value="2026-04-04">
            </div>

            <button type="submit" class="submit-btn">💾 به‌روزرسانی</button>
            <a href="{{ route('bookings.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection