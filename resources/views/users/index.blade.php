@extends('layouts.app')

@section('title', 'لیست کاربران')

@section('content')
<div class="page-header">
    <h1>👥 لیست کاربران</h1>
    <p>همه کاربران سیستم</p>
</div>

<div class="section">
    <div class="container">
        <a href="{{ route('users.create') }}" class="btn-primary">➕ افزودن کاربر جدید</a>

        <table class="rates-table" style="margin-top:2rem">
            <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>شماره موبایل</th>
                    <th>ایمیل</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>قادر عطایی</td>
                    <td>0701020963</td>
                    <td>qader@example.com</td>
                    <td>
                        <a href="{{ route('users.show', 1) }}" class="btn-ghost">مشاهده</a>
                        <a href="{{ route('users.edit', 1) }}" class="btn-ghost">ویرایش</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection