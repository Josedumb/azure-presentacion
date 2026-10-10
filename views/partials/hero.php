<section id="inicio" class="hero">
    <div class="hero__brillo" aria-hidden="true"></div>
    <div class="contenedor hero__contenido">
        <div class="hero__emblema-wrapper" id="hero-emblema-wrapper">
            <div class="hero__emblema-aura" aria-hidden="true"></div>
            <img src="azure.png" alt="Microsoft Azure Logo" class="hero__emblema" id="hero-emblema">
        </div>
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
