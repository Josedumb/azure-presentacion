<section id="devops" class="seccion revelar">
    <div class="contenedor">
        <p class="seccion__num">03</p>
        <h2 class="seccion__titulo"><?= e($s['titulo']) ?></h2>
        <p class="seccion__lead"><?= e($s['texto']) ?></p>

        <!-- Tarjetas conceptuales de los 4 pilares -->
        <div class="rejilla rejilla--4">
            <?php foreach ($s['items'] as $it): ?>
                <article class="servicio">
                    <span class="servicio__cat"><?= e($it['categoria']) ?></span>
                    <h3 class="servicio__nombre"><?= e($it['nombre']) ?></h3>
                    <p class="servicio__texto"><?= e($it['texto']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Componente interactivo: Simulador de Pipeline CI/CD -->
        <div class="simulador" id="simulador-cicd">
            <div class="simulador__header">
                <div>
                    <span class="etiqueta">
                        <span class="punto punto--vivo"></span>
                        Simulación en tiempo real
                    </span>
                    <h3 class="simulador__titulo"><?= e($s['simulador']['titulo']) ?></h3>
                    <p class="simulador__sub"><?= e($s['simulador']['subtitulo']) ?></p>
                </div>
            </div>

            <div class="simulador__controles">
                <select id="sim-preset" class="simulador__select" aria-label="Seleccionar commit de ejemplo">
                    <option value="" disabled selected>Elegir ejemplo de cambio...</option>
                    <?php foreach ($s['simulador']['presets'] as $p): ?>
                        <option value="<?= e($p) ?>"><?= e($p) ?></option>
                    <?php endforeach; ?>
                </select>

                <input type="text" id="sim-commit" class="simulador__input" 
                       value="<?= e($s['simulador']['presets'][0]) ?>" 
                       placeholder="Escribe el mensaje de tu commit..." 
                       aria-label="Mensaje de commit">

                <button type="button" id="btn-iniciar-sim" class="boton boton--simular">
                    <span class="btn-icono">▶</span>
                    <span id="btn-texto">Simular Despliegue</span>
                </button>

                <button type="button" id="btn-reset-sim" class="boton boton--fantasma boton--chico" title="Reiniciar simulación">
                    ↺ Limpiar
                </button>
            </div>

            <!-- Fases visuales del pipeline -->
            <div class="pipeline-tracker" role="region" aria-label="Fases del Pipeline">
                <?php foreach ($s['simulador']['etapas'] as $idx => $et): ?>
                    <div class="pipeline-step" id="<?= e($et['id']) ?>" data-step="<?= $idx + 1 ?>">
                        <div class="pipeline-step__indicador">
                            <span class="step-num"><?= e($et['num']) ?></span>
                            <span class="step-check" aria-hidden="true">✔</span>
                            <span class="step-spinner" aria-hidden="true"></span>
                        </div>
                        <h4 class="pipeline-step__nombre"><?= e($et['nombre']) ?></h4>
                        <p class="pipeline-step__desc"><?= e($et['sub']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Terminal con logs en tiempo real -->
            <div class="terminal" role="region" aria-label="Consola de ejecución del pipeline">
                <div class="terminal__barra">
                    <span class="terminal__punto"></span><span class="terminal__punto"></span><span class="terminal__punto"></span>
                    <p>azure-pipelines.agent — runner: Ubuntu-22.04-x64</p>
                    <span id="terminal-badge" class="terminal__badge terminal__badge--espera">Listo</span>
                </div>
                <pre id="terminal-sim-log" class="terminal__cuerpo terminal__cuerpo--interactivo"><span class="t-tenue">[Esperando commit] Presiona "Simular Despliegue" para disparar el pipeline automático de Azure DevOps...</span></pre>
            </div>

            <!-- Resultado del despliegue -->
            <div id="sim-resultado" class="simulador__resultado" aria-live="polite">
                <div class="simulador__resultado-info">
                    <span class="simulador__resultado-icono">🚀</span>
                    <div>
                        <h4 class="simulador__resultado-titulo">¡Despliegue a la nube completado con éxito!</h4>
                        <p class="simulador__resultado-desc" id="sim-resultado-texto">
                            La versión ha sido validada, empaquetada en Azure Container Registry y desplegada en Azure App Service.
                        </p>
                    </div>
                </div>
                <div class="simulador__resultado-meta">
                    <div class="meta-tag">
                        <span class="meta-tag__k">Hash:</span>
                        <span class="meta-tag__v" id="meta-hash">771cd9b</span>
                    </div>
                    <div class="meta-tag">
                        <span class="meta-tag__k">Estado:</span>
                        <span class="meta-tag__v meta-tag__v--vivo">Online en App Service</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
