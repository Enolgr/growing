document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.index-slide');
  const dots = document.querySelectorAll('.index-dot');
  const slider = document.querySelector('.index-slider');
  let currentSlide = 0;
  const totalSlides = slides.length;
  let slideInterval;

  // Clone first and last slides
  const firstSlideClone = slides[0].cloneNode(true);
  const lastSlideClone = slides[totalSlides - 1].cloneNode(true);
  slider.appendChild(firstSlideClone);
  slider.insertBefore(lastSlideClone, slides[0]);

  // Adjust initial position to show first real slide
  slider.style.transform = `translateX(-100%)`;

  function showSlide(index, transition = true) {
    if (transition) {
      slider.style.transition = 'transform 0.5s ease-in-out';
    } else {
      slider.style.transition = 'none';
    }
    
    // Adjust for cloned slides (index + 1 because of prepended clone)
    slider.style.transform = `translateX(-${(index + 1) * 100}%)`;
    
    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle('index-active', i === index);
    });
  }

  function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);

    // If we're at the clone of the first slide
    if (currentSlide === totalSlides) {
      setTimeout(() => {
        currentSlide = 0;
        showSlide(currentSlide, false);
      }, 500);
    }
  }

  function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);

    // If we're at the clone of the last slide
    if (currentSlide === -1) {
      setTimeout(() => {
        currentSlide = totalSlides - 1;
        showSlide(currentSlide, false);
      }, 500);
    }
  }

  function goToSlide(index) {
    currentSlide = index;
    showSlide(currentSlide);
    resetAutoSlide();
  }

  function resetAutoSlide() {
    clearInterval(slideInterval);
    startAutoSlide();
  }

  function startAutoSlide() {
    slideInterval = setInterval(nextSlide, 3000);
  }

  // Event listeners
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
  });

  // Touch events for mobile
  let touchStartX = 0;
  let touchEndX = 0;

  slider.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
  });

  slider.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    if (touchStartX - touchEndX > 50) {
      nextSlide();
    } else if (touchEndX - touchStartX > 50) {
      prevSlide();
    }
  });

  // Start automatic sliding
  startAutoSlide();
});