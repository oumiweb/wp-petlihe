const form = document.querySelector('.wpcf7-form');
if (form) {
  const requiredFields = form.querySelectorAll('.wpcf7-validates-as-required');

  requiredFields.forEach(field => {
    field.addEventListener('blur', () => {
      const isEmpty = field.value.trim() === '';
      const wrap = field.closest('.p-contact-form__field') ?? field.parentElement;
      let tip = wrap.querySelector('.wpcf7-not-valid-tip');

      if (isEmpty) {
        field.classList.add('wpcf7-not-valid');
        if (!tip) {
          tip = document.createElement('span');
          tip.className = 'wpcf7-not-valid-tip';
          tip.textContent = '必須項目です。';
          wrap.appendChild(tip);
        }
      } else {
        field.classList.remove('wpcf7-not-valid');
        if (tip) tip.remove();
      }
    });
  });
}
