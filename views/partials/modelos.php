<section id="modelos" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">04</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>

        <div class="rejilla rejilla--3">
            <?php foreach ($s['items'] as $m): ?>
                <article class="tarjeta <?= $m['sigla'] === 'PaaS' ? 'tarjeta--destacada' : '' ?>">
                    <span class="tarjeta__sigla"><?= e($m['sigla']) ?></span>
                    <h3 class="tarjeta__titulo"><?= e($m['nombre']) ?></h3>
                    <p class="tarjeta__texto"><?= e($m['texto']) ?></p>
                    <p class="tarjeta__pie">Ej.: <?= e($m['ejemplo']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
