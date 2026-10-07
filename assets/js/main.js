// Muestra cada sección con una animación suave cuando entra en pantalla.
document.addEventListener('DOMContentLoaded', () => {
    const secciones = document.querySelectorAll('.revelar');

    if (!('IntersectionObserver' in window)) {
        secciones.forEach(s => s.classList.add('visible'));
        return;
    }

    const observador = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('visible');
                observador.unobserve(entrada.target);
            }
        });
    }, { threshold: 0.12 });

    secciones.forEach(s => observador.observe(s));
});
