@extends('layouts.app')

@section('title', 'ویرایش پارکینگ')

@section('content')
<div class="page-header">
    <h1>✏️ ویرایش پارکینگ</h1>
    <p>ویرایش اطلاعات پارکینگ شماره {{ $id }}</p>
</div>

<div class="section">
    <div class="container" style="max-width:600px">
        <form class="contact-form-box">
            <div class="form-group">
                <label class="form-label">نام پارکینگ <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="name" value="پارکینگ نوی دایکندی">
            </div>

            <div class="form-group">
                <label class="form-label">آدرس <span style="color:red">*</span></label>
                <input type="text" class="form-input" name="address" value="نیلی، شهرک جدید">
            </div>

            <div class="form-group">
                <label class="form-label">ظرفیت کل <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="total_spots" value="200">
            </div>

            <div class="form-group">
                <label class="form-label">هزینه ساعتی (افغانی) <span style="color:red">*</span></label>
                <input type="number" class="form-input" name="hourly_rate" value="20">
            </div>

            <div class="form-group">
                <label class="form-label">وضعیت</label>
                <select class="form-select" name="status">
                    <option value="open">باز</option>
                    <option value="busy">نیمه پر</option>
                    <option value="full">پر</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">💾 به‌روزرسانی</button>
            <a href="{{ route('parkings.index') }}" class="btn-ghost" style="margin-top:1rem">بازگشت</a>
        </form>
    </div>
</div>
@endsection