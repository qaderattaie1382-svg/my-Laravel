// js/contact.js
function handleContactForm() {
  const form = document.getElementById('contactForm');
  if (!form) return;
  
  // اعتبارسنجی لحظه‌ای
  setupLiveValidation('contactName', (v) => Validator.validateName(v), 'contactNameError');
  setupLiveValidation('contactLastName', (v) => Validator.validateLastName(v), 'contactLastNameError');
  setupLiveValidation('contactEmail', (v) => Validator.validateEmail(v), 'contactEmailError');
  setupLiveValidation('contactPhone', (v) => {
    if (!v) return { valid: true, message: '' };
    return Validator.validatePhone(v);
  }, 'contactPhoneError');
  setupLiveValidation('contactSubject', (v) => Validator.validateSubject(v), 'contactSubjectError');
  setupLiveValidation('contactMessage', (v) => Validator.validateMessage(v), 'contactMessageError');
  
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    Validator.clearAllErrors('contactForm');
    
    const name = document.getElementById('contactName')?.value.trim();
    const lastName = document.getElementById('contactLastName')?.value.trim();
    const email = document.getElementById('contactEmail')?.value.trim();
    const phone = document.getElementById('contactPhone')?.value.trim();
    const subject = document.getElementById('contactSubject')?.value;
    const message = document.getElementById('contactMessage')?.value.trim();
    
    let isValid = true;
    
    const nameValidation = Validator.validateName(name);
    if (!nameValidation.valid) {
      Validator.showError(document.getElementById('contactName'), 'contactNameError', nameValidation.message);
      isValid = false;
    }
    
    const lastNameValidation = Validator.validateLastName(lastName);
    if (!lastNameValidation.valid) {
      Validator.showError(document.getElementById('contactLastName'), 'contactLastNameError', lastNameValidation.message);
      isValid = false;
    }
    
    
const emailValidation = Validator.validateEmail(email);
if (!emailValidation.valid && email !== '') {  // فقط اگر ایمیل وارد شده باشد و نامعتبر باشد
  Validator.showError(document.getElementById('contactEmail'), 'contactEmailError', emailValidation.message);
  isValid = false;
}


    if (phone) {
      const phoneValidation = Validator.validatePhone(phone);
      if (!phoneValidation.valid) {
        Validator.showError(document.getElementById('contactPhone'), 'contactPhoneError', phoneValidation.message);
        isValid = false;
      }
    }
    
    const subjectValidation = Validator.validateSubject(subject);
    if (!subjectValidation.valid) {
      Validator.showError(document.getElementById('contactSubject'), 'contactSubjectError', subjectValidation.message);
      isValid = false;
    }
    
    const messageValidation = Validator.validateMessage(message);
    if (!messageValidation.valid) {
      Validator.showError(document.getElementById('contactMessage'), 'contactMessageError', messageValidation.message);
      isValid = false;
    }
    
    if (!isValid) return;
    
    // ذخیره پیام در localStorage (شبیه‌سازی ارسال)
    const contactMessage = {
      id: Date.now(),
      name: name + ' ' + lastName,
      email,
      phone: phone || 'ذکر نشده',
      subject,
      message,
      date: new Date().toISOString()
    };
    
    const messages = JSON.parse(localStorage.getItem('contactMessages') || '[]');
    messages.push(contactMessage);
    localStorage.setItem('contactMessages', JSON.stringify(messages));
    
    Validator.showSuccess('contactForm', '✅ پیام شما با موفقیت ارسال شد. به زودی با شما تماس می‌گیریم.');
    form.reset();
  });
}

if (document.getElementById('contactForm')) {
  handleContactForm();
}