 let slideIndex = 0;
 const slides = document.querySelectorAll('#frame input[type="radio"]');
 function showSlide(n) {
     slides[slideIndex].checked = false; 
     slideIndex = (n + slides.length) % slides.length;
     slides[slideIndex].checked = true;
 }
 function nextSlide() {
     showSlide(slideIndex + 1);
 }
 setInterval(nextSlide, 3000); 