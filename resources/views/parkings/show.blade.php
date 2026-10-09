@extends('layouts.app')

@section('title', 'جزئیات پارکینگ')

@section('content')
<div class="page-header">
    <h1>👁 جزئیات پارکینگ</h1>
    <p>نمایش اطلاعات پارکینگ شماره {{ $id }}</p>
</div>

<div class="section">
    <div class="container" style="max-width:700px">
        <div class="info-cards">
            <div class="info-card">
                <div class="info-icon">🚗</div>
                <div class="info-content">
                    <h4>نام پارکینگ</h4>
                    <p>پارکینگ نوی دایکندی</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">📍</div>
                <div class="info-content">
                    <h4>آدرس</h4>
                    <p>نیلی، شهرک جدید</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">🅿</div>
                <div class="info-content">
                    <h4>ظرفیت کل</h4>
                    <p>200 جای پارک</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">💰</div>
                <div class="info-content">
                    <h4>هزینه ساعتی</h4>
                    <p>20 افغانی</p>
                </div>
            </div>
        </div>

        <div style="margin-top:2rem">
            <a href="{{ route('parkings.edit', $id) }}" class="btn-primary">✏️ ویرایش</a>
            <a href="{{ route('parkings.index') }}" class="btn-ghost">بازگشت به لیست</a>
        </div>
    </div>
</div>
@endsection