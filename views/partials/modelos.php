<section id="modelos" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">03</p>
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
        <?php if (!empty($s['cierre'])): ?>
            <p class="seccion__lead" style="margin-top: 32px; margin-bottom: 0;"><?= e($s['cierre']) ?></p>
        <?php endif; ?>
    </div>
</section>
