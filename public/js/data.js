// js/data.js - نسخه کامل ارتقا یافته

const API = {
  STORAGE_KEY_PARKINGS: 'parkings_data',
  STORAGE_KEY_BOOKINGS: 'bookings',
  STORAGE_KEY_USERS: 'users',
  STORAGE_KEY_CURRENT_USER: 'currentUser',
  STORAGE_KEY_CONTACT_MESSAGES: 'contactMessages',

  // ========== مدیریت پارکینگ‌ها ==========
  
  // دریافت لیست پارکینگ‌ها (با کش در localStorage)
  async getParkings() {
    try {
      const localParkings = localStorage.getItem(this.STORAGE_KEY_PARKINGS);
      if (localParkings) {
        return JSON.parse(localParkings);
      }
      
      const response = await fetch('/data/parking.json');
      const data = await response.json();
      
      localStorage.setItem(this.STORAGE_KEY_PARKINGS, JSON.stringify(data.parkings));
      return data.parkings;
    } catch (error) {
      console.error('خطا در دریافت اطلاعات:', error);
      return [];
    }
  },

  // دریافت یک پارکینگ با ID
  async getParkingById(id) {
    const parkings = await this.getParkings();
    return parkings.find(p => p.id === parseInt(id));
  },

  // به‌روزرسانی ظرفیت پارکینگ (با محاسبه خودکار وضعیت)
  async updateParkingSpots(parkingId, newAvailableSpots) {
    const parkings = await this.getParkings();
    const index = parkings.findIndex(p => p.id === parkingId);
    
    if (index !== -1) {
      parkings[index].availableSpots = newAvailableSpots;
      
      const total = parkings[index].totalSpots;
      const available = newAvailableSpots;
      
      // محاسبه خودکار وضعیت بر اساس درصد پر شدن
      if (available === 0) {
        parkings[index].status = 'full';
      } else if (available < total * 0.3) {
        parkings[index].status = 'busy';
      } else {
        parkings[index].status = 'open';
      }
      
      localStorage.setItem(this.STORAGE_KEY_PARKINGS, JSON.stringify(parkings));
      return true;
    }
    return false;
  },

  // افزایش ظرفیت (مثلاً هنگام خروج ماشین)
  async increaseParkingSpots(parkingId) {
    const parkings = await this.getParkings();
    const index = parkings.findIndex(p => p.id === parkingId);
    
    if (index !== -1 && parkings[index].availableSpots < parkings[index].totalSpots) {
      const newAvailable = parkings[index].availableSpots + 1;
      return this.updateParkingSpots(parkingId, newAvailable);
    }
    return false;
  },

  // کاهش ظرفیت (مثلاً هنگام ورود ماشین)
  async decreaseParkingSpots(parkingId) {
    const parkings = await this.getParkings();
    const index = parkings.findIndex(p => p.id === parkingId);
    
    if (index !== -1 && parkings[index].availableSpots > 0) {
      const newAvailable = parkings[index].availableSpots - 1;
      return this.updateParkingSpots(parkingId, newAvailable);
    }
    return false;
  },

  // بازنشانی داده‌ها از فایل اصلی
  async resetParkings() {
    localStorage.removeItem(this.STORAGE_KEY_PARKINGS);
    return this.getParkings();
  },

  // ========== مدیریت رزروها ==========

  // ذخیره رزرو جدید
  saveBooking(booking) {
    const bookings = this.getAllBookings();
    booking.id = Date.now();
    booking.createdAt = new Date().toISOString();
    booking.status = 'active';
    bookings.push(booking);
    localStorage.setItem(this.STORAGE_KEY_BOOKINGS, JSON.stringify(bookings));
    return booking;
  },

  // دریافت همه رزروها
  getAllBookings() {
    return JSON.parse(localStorage.getItem(this.STORAGE_KEY_BOOKINGS) || '[]');
  },

  // دریافت رزروهای کاربر فعلی
  getUserBookings() {
    const user = this.getCurrentUser();
    if (!user) return [];
    const bookings = this.getAllBookings();
    return bookings.filter(b => b.userPhone === user.phone);
  },

  // دریافت رزروهای فعال یک پارکینگ
  getParkingBookings(parkingId) {
    const bookings = this.getAllBookings();
    const oneDayAgo = Date.now() - 24 * 60 * 60 * 1000;
    return bookings.filter(b => 
      b.parkingId === parkingId && 
      b.status === 'active' &&
      new Date(b.createdAt).getTime() > oneDayAgo
    );
  },

  // لغو رزرو
  cancelBooking(bookingId) {
    const bookings = this.getAllBookings();
    const index = bookings.findIndex(b => b.id === bookingId);
    
    if (index !== -1) {
      bookings[index].status = 'cancelled';
      bookings[index].cancelledAt = new Date().toISOString();
      localStorage.setItem(this.STORAGE_KEY_BOOKINGS, JSON.stringify(bookings));
      return true;
    }
    return false;
  },

  // بررسی اینکه کاربر برای یک پارکینگ رزرو فعال دارد
  hasActiveBooking(parkingId, userId) {
    const bookings = this.getAllBookings();
    const oneDayAgo = Date.now() - 24 * 60 * 60 * 1000;
    return bookings.some(b => 
      b.parkingId === parkingId &&
      b.userPhone === userId &&
      b.status === 'active' &&
      new Date(b.createdAt).getTime() > oneDayAgo
    );
  },

  // ========== مدیریت کاربران ==========

  // دریافت کاربر فعلی
  getCurrentUser() {
    return JSON.parse(localStorage.getItem(this.STORAGE_KEY_CURRENT_USER) || 'null');
  },

  // تنظیم کاربر فعلی
  setCurrentUser(user) {
    localStorage.setItem(this.STORAGE_KEY_CURRENT_USER, JSON.stringify(user));
  },

  // ثبت‌نام کاربر جدید
  register(userData) {
    const users = this.getAllUsers();
    
    // بررسی تکراری نبودن شماره
    if (users.find(u => u.phone === userData.phone)) {
      throw new Error('این شماره قبلاً ثبت شده است');
    }
    
    userData.id = Date.now();
    userData.createdAt = new Date().toISOString();
    users.push(userData);
    localStorage.setItem(this.STORAGE_KEY_USERS, JSON.stringify(users));
    this.setCurrentUser(userData);
    return userData;
  },

  // ورود کاربر
  login(phone, password) {
    const users = this.getAllUsers();
    const user = users.find(u => u.phone === phone && u.password === password);
    if (!user) throw new Error('شماره یا رمز عبور اشتباه است');
    this.setCurrentUser(user);
    return user;
  },

  // خروج از حساب
  logout() {
  localStorage.removeItem(this.STORAGE_KEY_CURRENT_USER);
  window.location.href = '/';
},

  // دریافت همه کاربران
  getAllUsers() {
    return JSON.parse(localStorage.getItem(this.STORAGE_KEY_USERS) || '[]');
  },

  // به‌روزرسانی اطلاعات کاربر
  updateUserProfile(updates) {
    const user = this.getCurrentUser();
    if (!user) return null;
    
    const users = this.getAllUsers();
    const index = users.findIndex(u => u.id === user.id);
    
    if (index !== -1) {
      users[index] = { ...users[index], ...updates };
      localStorage.setItem(this.STORAGE_KEY_USERS, JSON.stringify(users));
      this.setCurrentUser(users[index]);
      return users[index];
    }
    return null;
  },

  // ========== مدیریت پیام‌های تماس ==========

  // ذخیره پیام تماس
  saveContactMessage(messageData) {
    const messages = this.getAllContactMessages();
    const newMessage = {
      id: Date.now(),
      ...messageData,
      date: new Date().toISOString(),
      status: 'unread'
    };
    messages.push(newMessage);
    localStorage.setItem(this.STORAGE_KEY_CONTACT_MESSAGES, JSON.stringify(messages));
    return newMessage;
  },

  // دریافت همه پیام‌های تماس
  getAllContactMessages() {
    return JSON.parse(localStorage.getItem(this.STORAGE_KEY_CONTACT_MESSAGES) || '[]');
  },

  // ========== ابزارهای کمکی ==========

  // پاک کردن همه داده‌ها (برای دیباگ)
  clearAllData() {
    localStorage.removeItem(this.STORAGE_KEY_PARKINGS);
    localStorage.removeItem(this.STORAGE_KEY_BOOKINGS);
    localStorage.removeItem(this.STORAGE_KEY_CURRENT_USER);
    // توجه: users و contactMessages پاک نمی‌شوند برای حفظ اطلاعات
  },

  // دریافت آمار کلی
  async getStats() {
    const parkings = await this.getParkings();
    const users = this.getAllUsers();
    const bookings = this.getAllBookings();
    
    const totalSpots = parkings.reduce((sum, p) => sum + p.totalSpots, 0);
    const availableSpots = parkings.reduce((sum, p) => sum + p.availableSpots, 0);
    
    return {
      totalParkings: parkings.length,
      totalSpots,
      availableSpots,
      occupancyRate: ((totalSpots - availableSpots) / totalSpots * 100).toFixed(1),
      totalUsers: users.length,
      totalBookings: bookings.length,
      activeBookings: bookings.filter(b => b.status === 'active').length
    };
  }
};