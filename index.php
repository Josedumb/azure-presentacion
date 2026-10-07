<?php
/**
 * Punto de entrada (front controller).
 * Carga contenido y helpers, y arma la página con las vistas parciales.
 */
declare(strict_types=1);

date_default_timezone_set('America/Guatemala');

require __DIR__ . '/app/helpers.php';
$c = require __DIR__ . '/app/contenido.php';
$servidor = infoServidor();

require __DIR__ . '/views/layout.php';
