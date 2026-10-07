<section id="que-es" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">01</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <div class="datos">
            <?php foreach ($s['datos'] as $d): ?>
                <div class="dato">
                    <span class="dato__valor"><?= e($d['valor']) ?></span>
                    <span class="dato__etiqueta"><?= e($d['etiqueta']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
