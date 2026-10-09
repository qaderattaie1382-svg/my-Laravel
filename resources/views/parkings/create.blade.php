@extends('layouts.app')

@section('title', 'افزودن پارکینگ جدید')

@section('content')
<div class="page-header">
    <h1>➕ افزودن پارکینگ جدید</h1>
    <p>اطلاعات پارکینگ را وارد کنید</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام پارکینگ <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="name" placeholder="مثال: پارکینگ مرکزی">
            </div>

            <div class="form-group">
                <label class="form-label">آدرس <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="address" placeholder="آدرس کامل">
            </div>

            <div class="form-group">
                <label class="form-label">ظرفیت کل <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="total_spots" placeholder="200">
            </div>

            <div class="form-group">
                <label class="form-label">هزینه ساعتی (افغانی) <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="hourly_rate" placeholder="20">
            </div>

            <div class="form-group">
                <label class="form-label">وضعیت</label>
                <select class="form-select" name="status">
                    <option value="open">باز</option>
                    <option value="busy">نیمه پر</option>
                    <option value="full">پر</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">💾 ذخیره</button>
            <a href="{{ route('parkings.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection