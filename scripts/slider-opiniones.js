document.addEventListener('DOMContentLoaded', function () {
    // Array de reseñas
    const reviews = [
      {
        img: "img/images/persona-random1.webp",
        alt: "Laura Martínez",
        name: "Laura Martínez",
        text: "Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at."
      },
      {
        img: "img/images/persona-random2.webp",
        alt: "Chiara",
        name: "Chiara",
        text: "Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at."
      },
      {
        img: "img/images/persona-random1.webp",
        alt: "Usuario 3",
        name: "Usuario 3",
        text: "Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at."
      },
      {
        img: "img/images/persona-random2.webp",
        alt: "Usuario 4",
        name: "Usuario 4",
        text: "Lorem ipsum odor amet, consectetuer adipiscing elit. Elementum ultrices finibus sit duis aliquet et. Imperdiet cubilia ridiculus dui; interdum consectetur varius at."
      }
    ];
  
    // Referencias a contenedores
    const slider = document.getElementById('slider');
    const dotsContainer = document.getElementById('slider-dots');
  
    // Función para crear el elemento de una reseña
    function createOpinion(review) {
      const div = document.createElement('div');
      div.classList.add('opinion');
      div.innerHTML = `
        <img src="${review.img}" alt="${review.alt}" class="avatar">
        <p class="name-user">${review.name}</p>
        <p class="descripcion-reseña">${review.text}</p>
      `;
      return div;
    }
  
    // Construcción de los elementos del slider:
    // 1. Clon de la última reseña
    // 2. Todas las reseñas reales
    // 3. Clon de la primera reseña
    const sliderItems = [];
    sliderItems.push(createOpinion(reviews[reviews.length - 1])); // Clon final al inicio
    reviews.forEach(review => {
      sliderItems.push(createOpinion(review));
    });
    sliderItems.push(createOpinion(reviews[0])); // Clon del primero al final
  
    // Inyectamos los elementos en el DOM
    sliderItems.forEach(item => slider.appendChild(item));
  
    // Variables para el slider
    const realCount = reviews.length;         // Número de reseñas reales
    const totalItems = realCount + 2;           // Total (incluyendo clones)
    const slideWidth = 50;                      // Cada reseña ocupa el 50%
    let currentIndex = 1;                       // Iniciamos en la primera reseña real
  
    // Posición inicial
    slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
  
    // Generación de los dots (uno por cada reseña real)
    for (let i = 0; i < realCount; i++) {
      const dot = document.createElement('span');
      dot.classList.add('dot');
      if (i === 0) dot.classList.add('active');
      // Al hacer clic, se dirigirá a la posición correspondiente (índice = i+1)
      dot.dataset.index = i + 1;
      dotsContainer.appendChild(dot);
    }
  
    // Actualiza los dots en función de la posición actual
    function updateDots() {
      const dots = dotsContainer.querySelectorAll('.dot');
      dots.forEach(dot => dot.classList.remove('active'));
      // Si estamos en el clon final, mostramos el primer dot; si en el clon inicial (no implementado para retroceder) se podría hacer similar
      let dotIndex = currentIndex;
      if (currentIndex === totalItems - 1) dotIndex = 1;
      if (currentIndex === 0) dotIndex = realCount;
      dots[dotIndex - 1].classList.add('active');
    }
  
    // Función para mostrar el slide en la posición "index"
    function showSlide(index, animate = true) {
      slider.style.transition = animate ? 'transform 0.5s ease-in-out' : 'none';
      slider.style.transform = `translateX(-${index * slideWidth}%)`;
      updateDots();
    }
  
    // Función para avanzar al siguiente slide
    function nextSlide() {
      currentIndex++;
      showSlide(currentIndex);
      // Si llegamos al clon final (índice totalItems-1), después de la transición reseteamos a la posición 1 sin animación
      if (currentIndex === totalItems - 1) {
        setTimeout(() => {
          currentIndex = 1;
          showSlide(currentIndex, false);
        }, 500);
      }
    }
  
    // Slider automático
    let slideInterval = setInterval(nextSlide, 5000);
  
    function resetInterval() {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, 5000);
    }
  
    // Eventos en los dots para navegar manualmente
    const dots = dotsContainer.querySelectorAll('.dot');
    dots.forEach(dot => {
      dot.addEventListener('click', function () {
        currentIndex = Number(this.dataset.index);
        showSlide(currentIndex);
        resetInterval();
      });
    });
  });
  