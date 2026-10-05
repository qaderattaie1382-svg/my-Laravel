<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'پارک نوی دایکندی')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
    <link rel="icon" href="data:,">
</head>
<body>

@include('partials.nav')
@include('partials.mobile-nav')

@yield('content')

@include('partials.footer')
@include('partials.scripts')

</body>
</html>