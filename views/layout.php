<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($c['sitio']['titulo']) ?> — Presentación</title>
    <meta name="description" content="<?= e($c['sitio']['subtitulo']) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tokens.css">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?= filemtime(__DIR__ . '/../assets/css/styles.css') ?>">
</head>

<body>
    <?php vista('nav', ['c' => $c]); ?>
    <main>
        <?php vista('hero', ['c' => $c, 'servidor' => $servidor]); ?>
        <?php vista('que-es', ['s' => $c['que_es']]); ?>
        <?php vista('suscripciones', ['s' => $c['suscripciones']]); ?>
        <?php vista('modelos', ['s' => $c['modelos']]); ?>
        <?php vista('ventajas', ['s' => $c['ventajas']]); ?>
        <?php vista('infraestructura', ['s' => $c['infraestructura']]); ?>
        <?php vista('devops', ['s' => $c['devops']]); ?>
        <?php vista('datos', ['s' => $c['datos']]); ?>
        <?php vista('seguridad', ['s' => $c['seguridad']]); ?>
    </main>
    <?php vista('footer', ['c' => $c]); ?>
    <script src="assets/js/main.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.js') ?>" defer></script>
</body>

</html>