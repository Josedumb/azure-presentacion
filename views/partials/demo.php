<section id="demo" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">06</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <ol class="pasos">
            <?php foreach ($s['pasos'] as $p): ?>
                <li class="paso">
                    <span class="paso__n"><?= e($p['n']) ?></span>
                    <div>
                        <h3 class="paso__titulo"><?= e($p['titulo']) ?></h3>
                        <p class="paso__texto"><?= e($p['texto']) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>

        <!-- Prueba en vivo: estos datos los genera PHP en el servidor donde corre la página -->
        <div class="terminal" role="region" aria-label="Información del servidor">
            <div class="terminal__barra">
                <span></span><span></span><span></span>
                <p>php info — generado en el servidor</p>
            </div>
            <pre class="terminal__cuerpo"><?php foreach ($servidor as $clave => $valor): ?><span class="t-clave"><?= e(str_pad($clave, 9)) ?></span> <span class="t-valor"><?= e((string) $valor) ?></span><?= "\n" ?><?php endforeach; ?></pre>
        </div>
    </div>
</section>
