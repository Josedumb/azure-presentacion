<section id="infraestructura" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">04</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <div class="rejilla rejilla--4">
            <?php foreach ($s['items'] as $sv): ?>
                <article class="servicio">
                    <span class="servicio__cat"><?= e($sv['categoria']) ?></span>
                    <h3 class="servicio__nombre"><?= e($sv['nombre']) ?></h3>
                    <p class="servicio__texto"><?= e($sv['texto']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
