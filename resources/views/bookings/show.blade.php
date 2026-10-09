@extends('layouts.app')

@section('title', 'جزئیات رزرو')

@section('content')
<div class="page-header">
    <h1>👁 جزئیات رزرو</h1>
    <p>نمایش اطلاعات رزرو شماره {{ $id }}</p>
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
                <div class="info-icon">⏱</div>
                <div class="info-content">
                    <h4>تعداد ساعت</h4>
                    <p>3 ساعت</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">💰</div>
                <div class="info-content">
                    <h4>هزینه کل</h4>
                    <p>60 افغانی</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">📅</div>
                <div class="info-content">
                    <h4>تاریخ رزرو</h4>
                    <p>1405/01/15</p>
                </div>
            </div>
        </div>

        <div style="margin-top:2rem">
            <a href="{{ route('bookings.edit', $id) }}" class="btn-primary">✏️ ویرایش</a>
            <a href="{{ route('bookings.index') }}" class="btn-ghost">بازگشت به لیست</a>
        </div>
    </div>
</div>
@endsection