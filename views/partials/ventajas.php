<section id="ventajas" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">03</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>

        <div class="rejilla rejilla--2">
            <div class="lista lista--pro">
                <h3 class="lista__titulo">Ventajas</h3>
                <ul>
                    <?php foreach ($s['pros'] as $p): ?>
                        <li><?= e($p) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="lista lista--contra">
                <h3 class="lista__titulo">Desventajas</h3>
                <ul>
                    <?php foreach ($s['contras'] as $p): ?>
                        <li><?= e($p) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>