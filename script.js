document.getElementById("toggleButton").addEventListener("click", function() {
    let lista = document.getElementById("miLista");
    if (lista.classList.contains("nav-links")) {
        lista.classList.remove("nav-links");
        this.textContent = "☰"

    } else {
        lista.classList.add("nav-links");
        this.textContent = "☰"
    }
});