const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const slide = document.querySelector('.carousel-slide');
const images = document.querySelectorAll('.carousel-slide img');

let counter = 1;
const size = images[0].clientWidth;

slide.style.transform = 'translateX(' + (-size * counter) + 'px)';

function nextSlide() {
  if (counter >= images.length - 1) return;
  slide.style.transition = "transform 0.4s ease-in-out";
  counter++;
  slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

function prevSlide() {
  if (counter <= 0) return;
  slide.style.transition = "transform 0.4s ease-in-out";
  counter--;
  slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);
