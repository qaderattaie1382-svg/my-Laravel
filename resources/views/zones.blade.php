@extends('layouts.app')

@section('title', 'پارکینگ‌ها — پارک‌ نوی دایکندی')

@section('content')
<div class="page-header">
  <h1>📍 پارکینگ‌های نوی دایکندی</h1>
  <p>اطلاعات زنده ظرفیت و رزرو آنلاین</p>
</div>

<div class="zones-layout">
  <aside class="filter-sidebar">
    <div class="filter-box">
      <h3>🔍 جستجو</h3>
      <input type="text" class="search-input" placeholder="نام یا آدرس..."/>
    </div>
    <div class="filter-box">
      <h3>📊 وضعیت</h3>
      <div class="filter-option"><input type="checkbox" checked/><label>🟢 جای خالی دارد</label></div>
      <div class="filter-option"><input type="checkbox" checked/><label>🟡 نیمه پر</label></div>
      <div class="filter-option"><input type="checkbox"/><label>🔴 تقریباً پر</label></div>
    </div>
    <div class="filter-box">
      <h3>🚗 نوع وسیله</h3>
      <div class="filter-option"><input type="checkbox" checked/><label>سواری</label></div>
      <div class="filter-option"><input type="checkbox" checked/><label>موتورسیکلت</label></div>
      <div class="filter-option"><input type="checkbox"/><label>⚡ خودروی برقی</label></div>
      <div class="filter-option"><input type="checkbox"/><label>♿ معلولین</label></div>
    </div>
    <div class="filter-box">
      <h3>💰 هزینه ساعتی</h3>
      <div class="filter-option"><input type="checkbox" checked/><label>زیر ۲۰ افغانی</label></div>
      <div class="filter-option"><input type="checkbox" checked/><label>۲۰–۵۰ افغانی</label></div>
      <div class="filter-option"><input type="checkbox"/><label>بالای ۵۰ افغانی</label></div>
    </div>
  </aside>

  <main>
    <div class="status-tabs">
      <div class="status-tab active">همه</div>
      <div class="status-tab">🟢 خالی</div>
      <div class="status-tab">🟡 نیمه‌پر</div>
      <div class="status-tab">🔴 پر</div>
    </div>
    <div id="zonesContainer"></div>
  </main>
</div>

<div id="bookingModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:2000; justify-content:center; align-items:center;">
  <div style="background:white; border-radius:24px; max-width:450px; width:90%; padding:2rem; text-align:center;">
    <h3 style="margin-bottom:1rem">📅 رزرو پارکینگ</h3>
    <div id="modalParkingName" style="font-weight:bold; color:var(--primary); margin-bottom:1rem"></div>
    <div class="form-group">
      <label class="form-label">تعداد ساعت <span style="color:red">*</span></label>
      <input type="number" id="bookingHours" class="form-input" min="1" max="24" value="1" style="text-align:center"/>
      <div id="hoursError" class="error-message"></div>
    </div>
    <div style="margin:1rem 0">
      <div>💰 هزینه کل: <span id="totalPrice" style="font-size:1.5rem; font-weight:bold; color:var(--primary)">0</span> افغانی</div>
      <div style="font-size:0.8rem; color:var(--text-muted)">قیمت ساعتی: <span id="hourlyRate"></span> افغانی</div>
    </div>
    <div style="display:flex; gap:1rem; justify-content:center">
      <button id="cancelBookingBtn" class="btn-ghost">انصراف</button>
      <button id="confirmBookingBtn" class="btn-primary">تأیید رزرو</button>
    </div>
  </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('js/zones.js') }}"></script>
@endpush