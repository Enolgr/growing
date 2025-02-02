let currentIndex = 0;

function changeSlide(index) {
    currentIndex = index;
    const slider = document.getElementById("slider");
    // Mover el slider según el índice seleccionado (33.333% por slide)
    slider.style.transform = `translateX(-${index * 33.333}%)`;
    // Actualiza la apariencia de los puntos
    updateDots();
}

function updateDots() {
    const dots = document.querySelectorAll(".dot");
    dots.forEach((dot, idx) => {
        dot.classList.toggle("active", idx === currentIndex);
    });
}

/* 
  Opcional: Inicializa en la primera diapositiva 
  para que el primer punto aparezca activo.
*/
document.addEventListener("DOMContentLoaded", () => {
    changeSlide(0);
});