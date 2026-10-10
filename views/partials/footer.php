<footer class="pie">
    <div class="contenedor pie__fila">
        <p><?= e(implode(' · ', $c['equipo'])) ?></p>
        <p><?= e($c['sitio']['curso']) ?> · <?= date('Y') ?></p>
    </div>
</footer>
