<section id="devops" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">03</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <div class="rejilla rejilla--4">
            <?php foreach ($s['items'] as $it): ?>
                <article class="servicio">
                    <span class="servicio__cat"><?= e($it['categoria']) ?></span>
                    <h3 class="servicio__nombre"><?= e($it['nombre']) ?></h3>
                    <p class="servicio__texto"><?= e($it['texto']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="terminal" role="region" aria-label="Simulación de Azure Pipeline y entrega continua">
            <div class="terminal__barra">
                <span></span><span></span><span></span>
                <p>azure-pipelines.yml — ciclo de vida del software y entrega continua en Azure</p>
            </div>
            <pre class="terminal__cuerpo"><?php foreach ($s['pipeline'] as $p): ?><span class="t-clave"><?= e($p['paso']) ?></span> <span class="t-exito"><?= e($p['estado']) ?></span> <span class="t-valor"><?= e($p['detalle']) ?></span><?= "\n" ?><?php endforeach; ?></pre>
        </div>
    </div>
</section>
