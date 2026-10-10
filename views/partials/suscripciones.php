<section id="suscripciones" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">02</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['lead']) ?></p>

        <div class="rejilla rejilla--4">
            <?php foreach ($s['items'] as $i => $sub): ?>
                <article class="suscripcion-card">
                    <div class="suscripcion-card__num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></div>
                    <span class="tarjeta__sigla"><?= e($sub['sigla']) ?></span>
                    <h3 class="tarjeta__titulo"><?= e($sub['nombre']) ?></h3>
                    <p class="suscripcion-card__precio"><?= e($sub['precio']) ?></p>
                    <p class="suscripcion-card__detalle"><?= e($sub['detalle']) ?></p>
                    <p class="tarjeta__texto"><?= e($sub['texto']) ?></p>
                    <p class="tarjeta__pie"><?= e($sub['pie']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
