// js/zones.js - نسخه کامل با والیدیشن رزرو
const statusConfig = {
  open: { label: 'جای خالی دارد', color: '#22c55e', class: 'sopen', dotClass: 'dg' },
  busy: { label: 'نیمه پر', color: '#f0a500', class: 'sbusy', dotClass: 'dy' },
  full: { label: 'تقریباً پر', color: '#ef4444', class: 'sfull', dotClass: 'dr' }
};

let currentParkingForBooking = null;
let modal = null;

async function renderZones(filters = {}) {
  const container = document.getElementById('zonesContainer');
  if (!container) return;
  
  container.innerHTML = '<div style="text-align:center;padding:2rem">⏳ در حال بارگذاری...</div>';
  
  let parkings = await API.getParkings();
  //   فیلتر جستجو
  if (filters.search) {
    parkings = parkings.filter(p => p.name.includes(filters.search) || p.address.includes(filters.search));
  }
  //   فیلتر وضعیت
  if (filters.status && filters.status.length > 0) {
    parkings = parkings.filter(p => filters.status.includes(p.status));
  }
  //   فیلتد قیمت
  if (filters.price) {
    parkings = parkings.filter(p => {
      if (filters.price === 'low') return p.hourlyRate < 20;
      if (filters.price === 'mid') return p.hourlyRate >= 20 && p.hourlyRate <= 50;
      if (filters.price === 'high') return p.hourlyRate > 50;
      return true;
    });
  }

  
  // فیلتر نوع وسیله نقلیه
  if (filters.vehicleTypes && filters.vehicleTypes.length > 0) {
    parkings = parkings.filter(p => {
      // بررسی می‌کنیم آیا پارکینگ حداقل یکی از نوع‌های انتخاب شده را دارد
      return filters.vehicleTypes.some(type => p.features.includes(type));
    });
  }


  
  if (parkings.length === 0) {
    container.innerHTML = '<div style="text-align:center;padding:2rem">❌ هیچ پارکینگی یافت نشد</div>';
    return;
  }
  
  container.innerHTML = parkings.map(p => createZoneCard(p)).join('');
  
  document.querySelectorAll('.reserve-btn').forEach(btn => {
    btn.addEventListener('click', async (e) => {
      const parkingId = parseInt(btn.dataset.id);
      const parking = await API.getParkingById(parkingId);
      if (parking) {
        showReserveModal(parking);
      }
    });
  });
}

function createZoneCard(parking) {
  const status = statusConfig[parking.status];
  const filledPercent = ((parking.totalSpots - parking.availableSpots) / parking.totalSpots) * 100;
  
  return `
    <div class="zone-card-full ${parking.status === 'open' ? 'sg' : parking.status === 'busy' ? 'sy' : 'sr'}">
      <img class="zone-card-img" src="${parking.image}" alt="${parking.name}"/>
      <div class="zone-card-body">
        <div class="zone-card-header">
          <div class="zone-title-area">
            <h3>🏛 ${parking.name}</h3>
            <div class="zone-address"> ${parking.address}</div>
          </div>
          <div class="zone-status-badge ${status.class}">
            <div class="sdot ${status.dotClass}"></div>${status.label}
          </div>
        </div>
        <div class="zone-stats-row">
          <div class="zone-stat">
            <div class="zs-num" style="color:${status.color}">${parking.availableSpots}</div>
            <div class="zs-label">جای خالی</div>
          </div>
          <div class="zone-stat">
            <div class="zs-num">${parking.totalSpots}</div>
            <div class="zs-label">ظرفیت کل</div>
          </div>
          <div class="zone-capacity-bar">
            <div class="cap-bar-bg">
              <div class="cap-bar-fill" style="width:${filledPercent}%;background:linear-gradient(90deg,${status.color},${status.color}88)"></div>
            </div>
            <div class="cap-pct">${Math.round(filledPercent)}٪ پر شده</div>
          </div>
        </div>
        <div class="zone-info-row">
          ${parking.features.map(f => `<span class="zone-info-tag">${getFeatureIcon(f)}</span>`).join('')}
          ${parking.is24h ? '<span class="zone-info-tag"> ۲۴ ساعته</span>' : ''}
        </div>
        <div class="zone-footer">
          <div><span class="zone-price-num">${parking.hourlyRate}</span><span class="zone-price-label">افغانی / ساعت</span></div>
          <div class="zone-actions">
            <button class="btn-primary reserve-btn" data-id="${parking.id}" style="font-size:.85rem;padding:.5rem 1.2rem">رزرو الان ←</button>
          </div>
        </div>
      </div>
    </div>
  `;
}

function getFeatureIcon(feature) {
  const icons = {
    car: '🚗 سواری',
    motorcycle: '🏍 موتور',
    disabled: '♿ معلولین',
    ev: '⚡ خودروی برقی'
  };
  return icons[feature] || feature;
}

function showReserveModal(parking) {
  const user = API.getCurrentUser();
  if (!user) {
    if (confirm('برای رزرو باید وارد حساب خود شوید. آیا به صفحه ورود بروید؟')) {
      window.location.href = '/login';
    }
    return;
  }
  
  if (parking.availableSpots <= 0) {
    alert('❌ متأسفیم! جای پارک خالی وجود ندارد.');
    return;
  }




  
  
  // === اضافه کنید: بررسی رزرو فعال برای این پارکینگ ===
  const userBookings = API.getUserBookings();
  const activeBooking = userBookings.find(b =>
    b.parkingId === parking.id &&
    b.status === 'active' &&
    new Date(b.date) > new Date(Date.now() - 24 * 60 * 60 * 1000) // رزروهای ۲۴ ساعت اخیر
  );
  
  if (activeBooking) {
    alert('❌ شما قبلاً برای این پارکینگ رزرو فعال دارید. تا ۲۴ ساعت بعد نمی‌توانید دوباره رزرو کنید.');
    return;
  }
  


  
  currentParkingForBooking = parking;
  modal = document.getElementById('bookingModal');
  if (!modal) return;
  
  document.getElementById('modalParkingName').innerHTML = ` ${parking.name}`;
  document.getElementById('hourlyRate').innerHTML = parking.hourlyRate;
  
  const hoursInput = document.getElementById('bookingHours');
  const totalPriceSpan = document.getElementById('totalPrice');
  
  function updateTotalPrice() {
    let hours = parseInt(hoursInput.value);
    if (isNaN(hours) || hours < 1) hours = 1;
    if (hours > 24) hours = 24;
    totalPriceSpan.innerHTML = parking.hourlyRate * hours;
  }
  
  hoursInput.value = 1;
  updateTotalPrice();
  
  hoursInput.oninput = () => {
    let hours = parseInt(hoursInput.value);
    if (isNaN(hours) || hours < 1) {
      Validator.showError(hoursInput, 'hoursError', 'تعداد ساعت باید حداقل ۱ باشد');
    } else if (hours > 24) {
      Validator.showError(hoursInput, 'hoursError', 'تعداد ساعت حداکثر ۲۴ ساعت می‌تواند باشد');
    } else {
      Validator.clearError(hoursInput, 'hoursError');
      updateTotalPrice();
    }
  };
  
  modal.style.display = 'flex';
  
  const confirmBtn = document.getElementById('confirmBookingBtn');
  const cancelBtn = document.getElementById('cancelBookingBtn');
  
  const newConfirmBtn = confirmBtn.cloneNode(true);
  const newCancelBtn = cancelBtn.cloneNode(true);
  confirmBtn.parentNode.replaceChild(newConfirmBtn, confirmBtn);
  cancelBtn.parentNode.replaceChild(newCancelBtn, cancelBtn);
  
  newCancelBtn.onclick = () => {
    modal.style.display = 'none';
    currentParkingForBooking = null;
  };





  
  newConfirmBtn.onclick = async () => {
  let hours = parseInt(hoursInput.value);
  
  if (isNaN(hours) || hours < 1) {
    Validator.showError(hoursInput, 'hoursError', 'تعداد ساعت باید حداقل ۱ باشد');
    return;
  }
  if (hours > 24) {
    Validator.showError(hoursInput, 'hoursError', 'تعداد ساعت حداکثر ۲۴ ساعت می‌تواند باشد');
    return;
  }
  
  const totalPrice = parking.hourlyRate * hours;
  
  if (parking.availableSpots <= 0) {
    alert('❌ متأسفیم! جای پارک خالی وجود ندارد.');
    modal.style.display = 'none';
    return;
  }
  
  const booking = {
    parkingId: parking.id,
    parkingName: parking.name,
    hours: hours,
    totalPrice: totalPrice,
    userPhone: API.getCurrentUser().phone,
    date: new Date().toISOString(),
    status: 'active'
  };
  
  API.saveBooking(booking);
  
  // کاهش ظرفیت با API جدید
  const newAvailableSpots = parking.availableSpots - 1;
  await API.updateParkingSpots(parking.id, newAvailableSpots);
  
  modal.style.display = 'none';
  alert(`✅ رزرو شما با موفقیت انجام شد!\n${parking.name}\n⏱ ${hours} ساعت\n💰 ${totalPrice} افغانی`);
  
  await renderZones();
  currentParkingForBooking = null;
};
}

function setupFilters() {
  const searchInput = document.querySelector('.search-input');
  if (searchInput) {
    searchInput.addEventListener('input', () => applyFilters());
  }
  
  document.querySelectorAll('.filter-option input').forEach(cb => {
    cb.addEventListener('change', () => applyFilters());
  });
  
  // وضعیت تب‌ها
  const tabs = document.querySelectorAll('.status-tab');
  tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      
      const filters = {};
      if (index === 1) filters.status = ['open'];
      else if (index === 2) filters.status = ['busy'];
      else if (index === 3) filters.status = ['full'];
      
      applyFilters(filters);
    });
  });
}


  async function applyFilters(customFilters = {}) {
  const filters = {};
  
  const searchInput = document.querySelector('.search-input');
  if (searchInput && searchInput.value) {
    filters.search = searchInput.value;
  }
  
  // فیلتر وضعیت
  if (!customFilters.status) {
    const statusChecked = [];
    document.querySelectorAll('.filter-box:nth-child(2) .filter-option input:checked').forEach(cb => {
      const label = cb.nextElementSibling?.innerText;
      if (label.includes('خالی')) statusChecked.push('open');
      else if (label.includes('نیمه')) statusChecked.push('busy');
      else if (label.includes('پر')) statusChecked.push('full');
    });
    if (statusChecked.length > 0 && statusChecked.length < 3) {
      filters.status = statusChecked;
    }
  } else {
    filters.status = customFilters.status;
  }
  
  // فیلتر قیمت
  const priceChecked = [];
  document.querySelectorAll('.filter-box:nth-child(4) .filter-option input:checked').forEach(cb => {
    const label = cb.nextElementSibling?.innerText;
    if (label.includes('زیر ۲۰')) priceChecked.push('low');
    else if (label.includes('۲۰–۵۰')) priceChecked.push('mid');
    else if (label.includes('بالای ۵۰')) priceChecked.push('high');
  });
  if (priceChecked.length === 1) {
    filters.price = priceChecked[0];
  }
  
  // فیلتر نوع وسیله
  const vehicleTypes = [];
  document.querySelectorAll('.filter-box:nth-child(3) .filter-option input:checked').forEach(cb => {
    const label = cb.nextElementSibling?.innerText;
    if (label.includes('سواری')) vehicleTypes.push('car');
    else if (label.includes('موتور')) vehicleTypes.push('motorcycle');
    else if (label.includes('برقی')) vehicleTypes.push('ev');
    else if (label.includes('معلولین')) vehicleTypes.push('disabled');
  });
  if (vehicleTypes.length > 0 && vehicleTypes.length < 4) {
    filters.vehicleTypes = vehicleTypes;
  }
  

  
  await renderZones(filters);
}

if (document.getElementById('zonesContainer')) {
  renderZones();
  setupFilters();
}