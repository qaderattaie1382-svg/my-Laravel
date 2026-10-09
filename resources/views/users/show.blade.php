@extends('layouts.app')

@section('title', 'جزئیات کاربر')

@section('content')
<div class="page-header">
    <h1>👁 جزئیات کاربر</h1>
    <p>نمایش اطلاعات کاربر شماره {{ $id }}</p>
</div>

<div class="section">
    <div class="container" style="max-width:700px">
        <div class="info-cards">
            <div class="info-card">
                <div class="info-icon">👤</div>
                <div class="info-content">
                    <h4>نام کامل</h4>
                    <p>قادر عطایی</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">📞</div>
                <div class="info-content">
                    <h4>شماره موبایل</h4>
                    <p>0701020963</p>
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon">✉️</div>
                <div class="info-content">
                    <h4>ایمیل</h4>
                    <p>qader@example.com</p>
                </div>
            </div>
        </div>

        <div style="margin-top:2rem">
            <a href="{{ route('users.edit', $id) }}" class="btn-primary">✏️ ویرایش</a>
            <a href="{{ route('users.index') }}" class="btn-ghost">بازگشت به لیست</a>
        </div>
    </div>
</div>
@endsection