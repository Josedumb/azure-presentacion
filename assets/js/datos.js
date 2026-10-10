// Sección 03: abre y cierra los recuadros. Solo uno abierto por grupo.
// El detalle se mueve debajo de la fila del recuadro para ocupar todo el ancho
// sin desacomodar los demás; al cerrarse regresa a su recuadro.
document.addEventListener('DOMContentLoaded', () => {
    const cerrar = (tarjeta) => {
        tarjeta.classList.remove('abierta');
        tarjeta.querySelector('.dt-card__cabeza').setAttribute('aria-expanded', 'false');
        tarjeta.appendChild(document.getElementById(tarjeta.dataset.detalle));
    };

    // Coloca el detalle después del último recuadro que está en la misma fila
    const colocar = (tarjeta) => {
        const fila = [...tarjeta.parentElement.querySelectorAll(':scope > .dt-card')]
            .filter(t => t.offsetTop === tarjeta.offsetTop);
        fila[fila.length - 1].after(document.getElementById(tarjeta.dataset.detalle));
    };

    document.querySelectorAll('.dt-card').forEach(tarjeta => {
        const boton = tarjeta.querySelector('.dt-card__cabeza');
        tarjeta.dataset.detalle = boton.getAttribute('aria-controls');

        boton.addEventListener('click', () => {
            const abrir = !tarjeta.classList.contains('abierta');
            tarjeta.parentElement.querySelectorAll('.dt-card.abierta').forEach(cerrar);
            if (!abrir) return;

            tarjeta.classList.add('abierta');
            boton.setAttribute('aria-expanded', 'true');
            colocar(tarjeta);
            document.getElementById(tarjeta.dataset.detalle)
                .scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    });

    // Si cambia el ancho de pantalla cambian las filas: se recoloca lo abierto
    window.addEventListener('resize', () => {
        document.querySelectorAll('.dt-card.abierta').forEach(tarjeta => {
            tarjeta.appendChild(document.getElementById(tarjeta.dataset.detalle));
            colocar(tarjeta);
        });
    });
});
