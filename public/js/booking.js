// js/booking.js
function renderUserBookings() {
  const container = document.getElementById('userBookings');
  if (!container) return;
  
  const user = API.getCurrentUser();
  if (!user) {
    container.innerHTML = '<p>لطفاً وارد حساب خود شوید.</p>';
    return;
  }
  
  const bookings = API.getUserBookings();
  
  if (bookings.length === 0) {
    container.innerHTML = '<p>شما هنوز رزروی ندارید.</p>';
    return;
  }
  
  container.innerHTML = `
    <div class="bookings-list">
      ${bookings.map(b => `
        <div class="booking-item" style="border:1px solid var(--border);border-radius:12px;padding:1rem;margin-bottom:1rem">
          <div><strong>${b.parkingName}</strong></div>
          <div>⏱ ${b.hours} ساعت | 💰 ${b.totalPrice} افغانی</div>
          <div>📅 ${new Date(b.createdAt).toLocaleDateString('fa-IR')}</div>
        </div>
      `).join('')}
    </div>
  `;
}

if (document.getElementById('userBookings')) {
  renderUserBookings();
}