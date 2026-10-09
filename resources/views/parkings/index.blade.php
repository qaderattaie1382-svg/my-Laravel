@extends('layouts.app')

@section('title', 'لیست پارکینگ‌ها')

@section('content')
<div class="page-header">
    <h1>🚗 لیست پارکینگ‌ها</h1>
    <p>همه پارکینگ‌های سیستم</p>
</div>

<div class="section">
    <div class="container">
        <a href="{{ route('parkings.create') }}" class="btn-primary">➕ افزودن پارکینگ جدید</a>

        <table class="rates-table" style="margin-top:2rem">
            <thead>
                <tr>
                    <th>#</th>
                    <th>نام پارکینگ</th>
                    <th>آدرس</th>
                    <th>ظرفیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>پارکینگ نوی دایکندی</td>
                    <td>نیلی، شهرک جدید</td>
                    <td>200</td>
                    <td>
                        <a href="{{ route('parkings.show', 1) }}" class="btn-ghost">مشاهده</a>
                        <a href="{{ route('parkings.edit', 1) }}" class="btn-ghost">ویرایش</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>پارکینگ مرکزی نیلی</td>
                    <td>نیلی، مرکز شهر</td>
                    <td>150</td>
                    <td>
                        <a href="{{ route('parkings.show', 2) }}" class="btn-ghost">مشاهده</a>
                        <a href="{{ route('parkings.edit', 2) }}" class="btn-ghost">ویرایش</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection