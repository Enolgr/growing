document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const slider = document.querySelector('.slider');
    let currentSlide = 0;
    const totalSlides = slides.length;
    let slideInterval;
  
    // Mostrar el slide actual desplazándolo lateralmente
    function showSlide(index) {
      slider.style.transform = `translateX(-${index * 100}%)`;
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });
    }
  
    // Ir al siguiente slide
    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    }
  
    // Ir a un slide específico (cuando se hace clic en un punto)
    function goToSlide(index) {
      currentSlide = index;
      showSlide(currentSlide);
      resetAutoSlide();
    }
  
    // Reiniciar el temporizador del slider automático
    function resetAutoSlide() {
      clearInterval(slideInterval);
      startAutoSlide();
    }
  
    // Slider automático
    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, 5000);
    }
  
    // Asignar eventos a los puntos de navegación
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => goToSlide(index));
    });
  
    // Inicialización
    showSlide(currentSlide);
    startAutoSlide();
  });
  