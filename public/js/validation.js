// js/validation.js
// والیدیشن کامل و حرفه‌ای برای پروژه پارک نوی دایکندی

const Validator = {
  // قوانین والیدیشن
  rules: {
    // نام (فقط حروف فارسی و فاصله)
    name: {
  regex: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیa-zA-Z0-9\s]{2,20}$/,
  message: '  نام باید بین ۲ تا 2۰ کاراکتر باشد  '
},
 // نام خانوادگی
lastName: {
  regex: /^[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیa-zA-Z0-9\s]{2,20}$/,
  message: 'نام خانوادگی باید بین ۲ تا 2۰ کاراکتر باشد '
},


    // شماره موبایل افغانستان
    phone: {
      regex: /^(07|7)[0-9]{8}$/,
      message: 'شماره موبایل باید با ۰۷ شروع شود و ۱۰ رقم باشد (مثال: ۰۷۰۱۰۲۰۹۶۳)'
    },
    
    // ایمیل
    email: {
      regex: /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/,
      message: 'آدرس ایمیل معتبر نیست (مثال: name@example.com)'
    },
    
    // رمز عبور
    password: {
      minLength: 6,
      message: 'رمز عبور باید حداقل ۶ کاراکتر باشد'
    },
    
    // متن پیام
    message: {
      minLength: 10,
      maxLength: 500,
      message: 'پیام باید بین ۱۰ تا ۵۰۰ کاراکتر باشد'
    },
    
    // موضوع تماس
    subject: {
      required: true,
      message: 'لطفاً موضوع پیام را انتخاب کنید'
    }
  },
  
  // بررسی قدرت رمز عبور
  checkPasswordStrength(password) {
    let strength = 0;
    if (!password) return { level: 0, text: '' };
    
    if (password.length >= 6) strength++;
    if (password.length >= 8) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;
    
    if (strength <= 2) return { level: 1, text: 'ضعیف', class: 'strength-weak' };
    if (strength <= 4) return { level: 2, text: 'متوسط', class: 'strength-medium' };
    return { level: 3, text: 'قوی', class: 'strength-strong' };
  },
  
  // والیدیشن نام
  validateName(value) {
    if (!value) return { valid: false, message: 'نام خود را وارد کنید' };
    if (!this.rules.name.regex.test(value)) return { valid: false, message: this.rules.name.message };
    return { valid: true, message: '' };
  },
  
  // والیدیشن نام خانوادگی
  validateLastName(value) {
    if (!value) return { valid: false, message: 'نام خانوادگی را وارد کنید' };
    if (!this.rules.lastName.regex.test(value)) return { valid: false, message: this.rules.lastName.message };
    return { valid: true, message: '' };
  },
  
  // والیدیشن شماره موبایل
  validatePhone(value) {
    if (!value) return { valid: false, message: 'شماره موبایل را وارد کنید' };
    // حذف فاصله و علامت + از ابتدا
    let cleaned = value.replace(/\s/g, '').replace(/^\+93/, '0');
    if (!this.rules.phone.regex.test(cleaned)) return { valid: false, message: this.rules.phone.message };
    return { valid: true, message: '', cleaned };
  },
  
  // والیدیشن ایمیل
  validateEmail(value) {
    if (!value) return { valid: true, message: '' }; // اختیاری
    if (!this.rules.email.regex.test(value)) return { valid: false, message: this.rules.email.message };
    return { valid: true, message: '' };
  },
  
  // والیدیشن رمز عبور
  validatePassword(value) {
    if (!value) return { valid: false, message: 'رمز عبور را وارد کنید' };
    if (value.length < this.rules.password.minLength) return { valid: false, message: this.rules.password.message };
    return { valid: true, message: '' };
  },
  
  // والیدیشن تکرار رمز عبور
  validateConfirmPassword(password, confirmPassword) {
    if (!confirmPassword) return { valid: false, message: 'رمز عبور را تکرار کنید' };
    if (password !== confirmPassword) return { valid: false, message: 'رمز عبور و تکرار آن مطابقت ندارند' };
    return { valid: true, message: '' };
  },
  
  // والیدیشن پیام تماس
  validateMessage(value) {
    if (!value) return { valid: false, message: 'متن پیام را وارد کنید' };
    if (value.length < this.rules.message.minLength) {
      return { valid: false, message: `پیام باید حداقل ${this.rules.message.minLength} کاراکتر باشد (${value.length} کاراکتر)` };
    }
    if (value.length > this.rules.message.maxLength) {
      return { valid: false, message: `پیام باید حداکثر ${this.rules.message.maxLength} کاراکتر باشد` };
    }
    return { valid: true, message: '' };
  },
  
  // والیدیشن موضوع تماس
  validateSubject(value) {
    if (!value || value === 'انتخاب کنید...') {
      return { valid: false, message: this.rules.subject.message };
    }
    return { valid: true, message: '' };
  },
  
  // والیدیشن تیک قوانین
  validateTerms(checked) {
    if (!checked) return { valid: false, message: 'برای ثبت‌نام باید با قوانین و مقررات موافقت کنید' };
    return { valid: true, message: '' };
  },
  
  // نمایش خطا در کنار فیلد
  showError(inputElement, errorElementId, message) {
    const errorDiv = document.getElementById(errorElementId);
    if (inputElement) {
      inputElement.classList.add('error');
    }
    if (errorDiv) {
      errorDiv.innerHTML = message;
      errorDiv.style.display = 'block';
    }
  },
  
  // پاک کردن خطا از یک فیلد
  clearError(inputElement, errorElementId) {
    if (inputElement) {
      inputElement.classList.remove('error');
    }
    const errorDiv = document.getElementById(errorElementId);
    if (errorDiv) {
      errorDiv.innerHTML = '';
      errorDiv.style.display = 'none';
    }
  },
  
  // پاک کردن همه خطاهای یک فرم
  clearAllErrors(formId) {
    const form = document.getElementById(formId);
    if (!form) return;
    form.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
      input.classList.remove('error');
    });
    form.querySelectorAll('.error-message').forEach(error => {
      error.innerHTML = '';
      error.style.display = 'none';
    });
  },
  
  // نمایش پیام موفقیت
  showSuccess(formId, message) {
    const form = document.getElementById(formId);
    if (!form) return;
    let successDiv = document.getElementById('formSuccessMessage');
    if (!successDiv) {
      successDiv = document.createElement('div');
      successDiv.id = 'formSuccessMessage';
      successDiv.className = 'success-message';
      form.insertBefore(successDiv, form.firstChild);
    }
    successDiv.innerHTML = message;
    successDiv.style.display = 'block';
    setTimeout(() => {
      successDiv.style.display = 'none';
    }, 5000);
  }
};

// نمایش قدرت رمز عبور (لحظه‌ای)
function setupPasswordStrength(passwordInputId, strengthDisplayId) {
  const passwordInput = document.getElementById(passwordInputId);
  const strengthDisplay = document.getElementById(strengthDisplayId);
  if (!passwordInput || !strengthDisplay) return;
  
  passwordInput.addEventListener('input', function() {
    const strength = Validator.checkPasswordStrength(this.value);
    if (!this.value) {
      strengthDisplay.innerHTML = '';
      return;
    }
    strengthDisplay.innerHTML = `
      <div class="password-strength">
        <span>قوت رمز: ${strength.text}</span>
        <div class="strength-bar ${strength.class}"></div>
      </div>
    `;
  });
}

// اعتبارسنجی لحظه‌ای فیلدها
function setupLiveValidation(inputId, validateFunction, errorElementId) {
  const input = document.getElementById(inputId);
  if (!input) return;
  
  input.addEventListener('input', function() {
    let value = this.value;
    let result;
    
    if (validateFunction.name === 'validatePhone') {
      result = validateFunction(value);
    } else {
      result = validateFunction(value);
    }
    
    if (!result.valid && value !== '') {
      Validator.showError(this, errorElementId, result.message);
    } else {
      Validator.clearError(this, errorElementId);
    }
  });
  
  input.addEventListener('blur', function() {
    let value = this.value;
    let result;
    
    if (validateFunction.name === 'validatePhone') {
      result = validateFunction(value);
    } else {
      result = validateFunction(value);
    }
    
    if (!result.valid) {
      Validator.showError(this, errorElementId, result.message);
    } else {
      Validator.clearError(this, errorElementId);
    }
  });
}