window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const logo_boxes = document.querySelectorAll('.logo_box');
  
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
    logo_boxes.forEach(el => el.classList.add('scrolled'));
  } else {
    header.classList.remove('scrolled');
    logo_boxes.forEach(el => el.classList.remove('scrolled'));
  }
}, { passive: true });
