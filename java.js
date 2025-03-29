document.addEventListener("DOMContentLoaded", function() {
    const hiddenElements = document.querySelectorAll(".hidden-card");

    function revealOnScroll() {
        hiddenElements.forEach((element) => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            const windowHeight = window.innerHeight;

            // Se activa cuando el elemento entra en pantalla desde arriba o abajo
            if (elementTop < windowHeight - 50 && elementBottom > 50) {
                element.classList.add("show");
            } else {
                element.classList.remove("show"); // Oculta al salir de la vista
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll(); // Para activar en la carga inicial
});