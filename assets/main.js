
// Menu mobile
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    const isVisible = mobileMenu.classList.contains('hidden');
    if (isVisible) {
        mobileMenu.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
    }

    

    
});

  document.addEventListener('DOMContentLoaded', () => {
    const fields = [
      { id: 'object', type: 'select' },
      { id: 'firstname', type: 'text', min: 2 },
      { id: 'lastname', type: 'text', min: 2 },
      { id: 'email', type: 'email' },
      { id: 'telephone', type: 'tel', min: 10 },
      { id: 'message', type: 'textarea', min: 100 }
    ];

    const validateField = (input, type, min) => {
      let isValid = true;
      const value = input.value.trim();

      if (type === 'email') {
        isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
      } else if (type === 'tel') {
        isValid = /^[0-9]{10,12}$/.test(value);
      } else if (type === 'select') {
        isValid = value !== '';
      } else {
        isValid = value.length >= (min || 1);
      }

      if (!isValid) {
        input.classList.remove('border-slate-200');
        input.classList.add('border-red-500');
      } else {
        input.classList.remove('border-red-500');
        input.classList.add('border-slate-200');
      }

      return isValid;
    };

    fields.forEach(({ id, type, min }) => {
      const input = document.getElementById(id);
      if (!input) return;

      input.addEventListener('input', () => {
        validateField(input, type, min);
      });

      if (type === 'select') {
        input.addEventListener('change', () => {
          validateField(input, type, min);
        });
      }
    });

    const form = document.getElementById('contactForm');
    form.addEventListener('submit', (e) => {
      let allValid = true;
      fields.forEach(({ id, type, min }) => {
        const input = document.getElementById(id);
        if (!validateField(input, type, min)) {
          allValid = false;
        }
      });

      if (!allValid) e.preventDefault();
    });
  });

