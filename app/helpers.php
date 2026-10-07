<?php
/**
 * Funciones auxiliares compartidas por las vistas.
 */

/** Escapa texto para imprimirlo en HTML (previene XSS). */
function e(string $texto): string
{
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

/** Carga una vista parcial pasándole variables. */
function vista(string $nombre, array $datos = []): void
{
    $ruta = __DIR__ . '/../views/partials/' . $nombre . '.php';
    if (!is_file($ruta)) {
        throw new RuntimeException("Vista no encontrada: {$nombre}");
    }
    extract($datos, EXTR_SKIP);
    require $ruta;
}

/** Devuelve información del servidor para mostrar en la demo. */
function infoServidor(): array
{
    // WEBSITE_SITE_NAME solo existe cuando la app corre dentro de Azure App Service.
    $enAzure = getenv('WEBSITE_SITE_NAME') !== false;

    return [
        'entorno'  => $enAzure ? 'Azure App Service' : 'Local',
        'sitio'    => $enAzure ? getenv('WEBSITE_SITE_NAME') : 'localhost',
        'region'   => getenv('REGION_NAME') ?: '—',
        'php'      => PHP_VERSION,
        'so'       => PHP_OS_FAMILY,
        'hora'     => date('d/m/Y H:i:s'),
    ];
}
