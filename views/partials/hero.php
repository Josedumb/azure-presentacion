<section id="inicio" class="hero">
    <div class="hero__brillo" aria-hidden="true"></div>
    <div class="contenedor hero__contenido">
        <h1 class="hero__titulo">
            <?= e($c['sitio']['titulo']) ?>
        </h1>
        <p class="hero__sub"><?= e($c['sitio']['subtitulo']) ?></p>
        <div class="hero__acciones">
            <a href="#que-es" class="boton">Empezar</a>
        </div>
        <p class="hero__curso"><?= e($c['sitio']['curso']) ?></p>
    </div>
</section>
