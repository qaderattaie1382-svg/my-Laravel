@extends('layouts.app')

@section('title', 'لیست رزروها')

@section('content')
<div class="page-header">
    <h1>📅 لیست رزروها</h1>
    <p>همه رزروهای ثبت‌شده</p>
</div>

<div class="section">
    <div class="container">
        <a href="{{ route('bookings.create') }}" class="btn-primary">➕ افزودن رزرو جدید</a>

        <table class="rates-table" style="margin-top:2rem">
            <thead>
                <tr>
                    <th>#</th>
                    <th>نام پارکینگ</th>
                    <th>تعداد ساعت</th>
                    <th>هزینه کل</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>پارکینگ نوی دایکندی</td>
                    <td>3</td>
                    <td>60 افغانی</td>
                    <td>
                        <a href="{{ route('bookings.show', 1) }}" class="btn-ghost">مشاهده</a>
                        <a href="{{ route('bookings.edit', 1) }}" class="btn-ghost">ویرایش</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection