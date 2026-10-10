<?php $graficos = require __DIR__ . '/datos-graficos.php'; ?>
<!-- Estilos y script propios de esta sección: no modifican a las demás -->
<link rel="stylesheet" href="assets/css/datos.css">

<section id="datos" class="seccion revelar">
    <!-- Punta de flecha compartida por los dibujos -->
    <svg width="0" height="0" style="position:absolute" aria-hidden="true">
        <defs>
            <marker id="dt-flecha" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                <path class="dt-flecha-punta" d="M0 0L10 5L0 10z"/>
            </marker>
        </defs>
    </svg>

    <div class="contenedor">
        <p class="seccion__num">03</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <?php foreach ($s['grupos'] as $g => $grupo): ?>
            <div class="dt-grupo">
                <p class="dt-grupo__titulo"><?= e($grupo['titulo']) ?><?php if ($g === 0): ?> <span class="dt-ayuda">· <?= e($s['ayuda']) ?></span><?php endif; ?></p>

                <div class="rejilla rejilla--<?= (int) $grupo['columnas'] ?> dt-rejilla">
                    <?php foreach ($grupo['items'] as $i => $it): ?>
                        <?php $id = 'dt-' . $g . '-' . $i; ?>
                        <article class="servicio dt-card <?= !empty($it['destacada']) ? 'tarjeta--destacada' : '' ?>">
                            <h3 class="dt-card__h">
                                <button type="button" class="dt-card__cabeza" aria-expanded="false" aria-controls="<?= $id ?>">
                                    <span class="dt-card__titulos">
                                        <span class="servicio__cat"><?= e($it['categoria']) ?></span>
                                        <span class="servicio__nombre"><?= e($it['nombre']) ?></span>
                                    </span>
                                    <span class="dt-card__icono" aria-hidden="true">+</span>
                                </button>
                            </h3>
                            <!-- Al abrirse, el script lo coloca debajo de la fila de recuadros -->
                            <div class="dt-card__detalle" id="<?= $id ?>">
                                <div class="dt-grafico"><?= $graficos[$it['grafico']] ?></div>
                                <div>
                                    <p class="servicio__cat"><?= e($it['categoria']) ?> · <?= e($it['nombre']) ?></p>
                                    <p class="tarjeta__texto"><?= e($it['texto']) ?></p>
                                    <?php if (!empty($it['pie'])): ?>
                                        <p class="tarjeta__pie"><?= e($it['pie']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="rejilla rejilla--2">
            <div class="lista lista--pro">
                <h3 class="lista__titulo">Buenas prácticas</h3>
                <ul>
                    <?php foreach ($s['practicas'] as $p): ?>
                        <li><?= e($p) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="lista lista--contra">
                <h3 class="lista__titulo">Errores frecuentes</h3>
                <ul>
                    <?php foreach ($s['errores'] as $p): ?>
                        <li><?= e($p) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Así se crea en el día a día una cuenta de almacenamiento segura -->
        <div class="terminal" role="region" aria-label="Ejemplo de Azure CLI">
            <div class="terminal__barra">
                <span></span><span></span><span></span>
                <p>azure cli — cuenta de almacenamiento para producción</p>
            </div>
            <pre class="terminal__cuerpo"><?php foreach ($s['cli'] as $linea): ?><?php if (str_starts_with($linea, '#')): ?><span class="t-clave"><?= e($linea) ?></span><?php elseif (str_starts_with($linea, 'az ')): ?><span class="t-clave">$</span> <span class="t-valor"><?= e($linea) ?></span><?php else: ?><span class="t-valor">  <?= e($linea) ?></span><?php endif; ?><?= "\n" ?><?php endforeach; ?></pre>
        </div>
    </div>
</section>

<script src="assets/js/datos.js" defer></script>
