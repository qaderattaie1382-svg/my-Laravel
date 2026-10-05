// js/auth.js - نسخه کامل با والیدیشن حرفه‌ای

function handleSignup() {
  const form = document.getElementById('signupForm');
  if (!form) return;
  
  // راه‌اندازی اعتبارسنجی لحظه‌ای
  setupLiveValidation('firstName', (v) => Validator.validateName(v), 'firstNameError');
  setupLiveValidation('lastName', (v) => Validator.validateLastName(v), 'lastNameError');
  setupLiveValidation('phone', (v) => Validator.validatePhone(v), 'phoneError');
  setupLiveValidation('email', (v) => Validator.validateEmail(v), 'emailError');
  setupLiveValidation('password', (v) => Validator.validatePassword(v), 'passwordError');
  setupPasswordStrength('password', 'passwordStrength');
  
  // اعتبارسنجی لحظه‌ای برای تکرار رمز
  const passwordInput = document.getElementById('password');
  const confirmInput = document.getElementById('confirmPassword');
  if (passwordInput && confirmInput) {
    function validateConfirm() {
      const result = Validator.validateConfirmPassword(passwordInput.value, confirmInput.value);
      if (!result.valid && confirmInput.value !== '') {
        Validator.showError(confirmInput, 'confirmPasswordError', result.message);
      } else {
        Validator.clearError(confirmInput, 'confirmPasswordError');
      }
    }
    passwordInput.addEventListener('input', validateConfirm);
    confirmInput.addEventListener('input', validateConfirm);
  }
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // پاک کردن خطاهای قبلی
    Validator.clearAllErrors('signupForm');
    
    // گرفتن مقادیر
    const firstName = document.getElementById('firstName')?.value.trim();
    const lastName = document.getElementById('lastName')?.value.trim();
    let phone = document.getElementById('phone')?.value.trim();
    const email = document.getElementById('email')?.value.trim();
    const password = document.getElementById('password')?.value;
    const confirmPassword = document.getElementById('confirmPassword')?.value;
    const terms = document.getElementById('terms')?.checked;
    
    let isValid = true;
    
    // اعتبارسنجی نام
    const nameValidation = Validator.validateName(firstName);
    if (!nameValidation.valid) {
      Validator.showError(document.getElementById('firstName'), 'firstNameError', nameValidation.message);
      isValid = false;
    }
    
    // اعتبارسنجی نام خانوادگی
    const lastNameValidation = Validator.validateLastName(lastName);
    if (!lastNameValidation.valid) {
      Validator.showError(document.getElementById('lastName'), 'lastNameError', lastNameValidation.message);
      isValid = false;
    }
    
    // اعتبارسنجی شماره موبایل (و پاکسازی آن)
    const phoneValidation = Validator.validatePhone(phone);
    if (!phoneValidation.valid) {
      Validator.showError(document.getElementById('phone'), 'phoneError', phoneValidation.message);
      isValid = false;
    } else {
      phone = phoneValidation.cleaned || phone;
    }
    
    // اعتبارسنجی ایمیل (اختیاری)
    const emailValidation = Validator.validateEmail(email);
    if (!emailValidation.valid) {
      Validator.showError(document.getElementById('email'), 'emailError', emailValidation.message);
      isValid = false;
    }
    
    // اعتبارسنجی رمز عبور
    const passwordValidation = Validator.validatePassword(password);
    if (!passwordValidation.valid) {
      Validator.showError(document.getElementById('password'), 'passwordError', passwordValidation.message);
      isValid = false;
    }
    
    // اعتبارسنجی تکرار رمز
    const confirmValidation = Validator.validateConfirmPassword(password, confirmPassword);
    if (!confirmValidation.valid) {
      Validator.showError(document.getElementById('confirmPassword'), 'confirmPasswordError', confirmValidation.message);
      isValid = false;
    }
    
    // اعتبارسنجی تیک قوانین
    const termsValidation = Validator.validateTerms(terms);
    if (!termsValidation.valid) {
      Validator.showError(null, 'termsError', termsValidation.message);
      isValid = false;
    }
    
    if (!isValid) return;
    
    // ثبت‌نام
    try {
      const user = API.register({ firstName, lastName, phone, email: email || '', password });
      Validator.showSuccess('signupForm', `✅ ثبت‌نام موفق! خوش آمدید ${user.firstName}`);
      setTimeout(() => {
        window.location.href = 'index.html';
      }, 2000);
    } catch (error) {
      Validator.showError(null, 'termsError', error.message);
    }
  });
}

function handleLogin() {
  const form = document.getElementById('loginForm');
  if (!form) return;
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const identifier = document.getElementById('identifier')?.value.trim();
    const password = document.getElementById('password')?.value;
    
    // اعتبارسنجی ساده برای ورود
    if (!identifier) {
      alert('شماره موبایل را وارد کنید');
      return;
    }
    if (!password) {
      alert('رمز عبور را وارد کنید');
      return;
    }
    
    try {
      const user = API.login(identifier, password);
      alert(`✅ خوش آمدید ${user.firstName}`);
      window.location.href = 'index.html';
    } catch (error) {
      alert(error.message);
    }
  });
}

function updateNavUserStatus() {
  const user = API.getCurrentUser();
  const navActions = document.querySelector('.nav-actions');
  const mobileActions = document.querySelector('.nav-actions-mobile');
  
  if (user && navActions) {
    navActions.innerHTML = `
      <span style="display:flex;align-items:center;gap:0.8rem">
        👤 ${user.firstName}
        <button onclick="API.logout()" class="btn-ghost" style="padding:0.4rem 0.9rem">خروج</button>
      </span>
    `;
    
    if (mobileActions) {
      mobileActions.innerHTML = `
        <span style="display:flex;align-items:center;justify-content:space-between;gap:0.8rem">
          👤 ${user.firstName}
          <button onclick="API.logout()" class="btn-ghost" style="padding:0.4rem 0.9rem">خروج</button>
        </span>
      `;
    }
  }
}

// اجرا در صفحات مربوطه
if (document.getElementById('signupForm')) handleSignup();
if (document.getElementById('loginForm')) handleLogin();
updateNavUserStatus();