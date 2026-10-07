<section id="inicio" class="hero">
    <div class="hero__brillo" aria-hidden="true"></div>
    <div class="contenedor hero__contenido">
        <p class="etiqueta">
            <span class="punto <?= $servidor['entorno'] === 'Azure App Service' ? 'punto--vivo' : '' ?>"></span>
            Corriendo en: <?= e($servidor['entorno']) ?>
        </p>
        <h1 class="hero__titulo">
            <?= e($c['sitio']['titulo']) ?>
        </h1>
        <p class="hero__sub"><?= e($c['sitio']['subtitulo']) ?></p>
        <div class="hero__acciones">
            <a href="#que-es" class="boton">Empezar</a>
            <a href="#demo" class="boton boton--fantasma">Ver la demo →</a>
        </div>
        <p class="hero__curso"><?= e($c['sitio']['curso']) ?></p>
    </div>
</section>
