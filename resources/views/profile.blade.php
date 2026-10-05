@extends('layouts.app')

@section('title', 'پروفایل کاربری — پارک نوی دایکندی')

@section('content')
<div class="page-header">
  <h1>👤 پروفایل من</h1>
  <p>اطلاعات شخصی و رزروهای شما</p>
</div>

<div class="container" style="padding:2rem 5%; max-width:800px; margin:0 auto">
  <div id="userInfo" style="background:var(--surface);border-radius:var(--radius-lg);padding:2rem;margin-bottom:2rem;box-shadow:var(--shadow-sm)">
    <div style="text-align:center">
      <div style="font-size:4rem">👤</div>
    </div>
  </div>

  <h3 style="margin-bottom:1rem">📋 رزروهای من</h3>
  <div id="userBookings"></div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('js/booking.js') }}"></script>
<script>
  const user = API.getCurrentUser();
  if (!user) {
    window.location.href = '{{ url('/login') }}';
  }

  if (user) {
    document.getElementById('userInfo').innerHTML = `
      <h2 style="margin-bottom:0.5rem">${user.firstName} ${user.lastName}</h2>
      <p style="color:var(--text-muted)">📞 ${user.phone}</p>
      <p style="color:var(--text-muted)">✉️ ${user.email || 'ثبت نشده'}</p>
      <button onclick="handleLogout()" class="btn-ghost" style="margin-top:1rem">🚪 خروج از حساب</button>
    `;

    const bookings = API.getUserBookings();
    const container = document.getElementById('userBookings');

    if (bookings.length === 0) {
      container.innerHTML = '<div style="background:var(--surface2);border-radius:var(--radius-md);padding:2rem;text-align:center">شما هنوز رزروی ندارید. <a href="{{ url('/zones') }}" class="btn-primary" style="display:inline-block;margin-top:1rem">مشاهده پارکینگ‌ها</a></div>';
    } else {
      container.innerHTML = bookings.map(b => `
        <div style="background:var(--surface2);border-radius:var(--radius-md);padding:1rem;margin-bottom:1rem;border-right:4px solid var(--primary)">
          <strong style="font-size:1rem">${b.parkingName}</strong><br>
          ⏱ ${b.hours} ساعت · 💰 ${b.totalPrice} افغانی<br>
          📅 ${new Date(b.date).toLocaleDateString('fa-IR')} ساعت ${new Date(b.date).toLocaleTimeString('fa-IR')}
        </div>
      `).join('');
    }
  }

  function handleLogout() {
    API.logout();
  }
</script>
@endpush