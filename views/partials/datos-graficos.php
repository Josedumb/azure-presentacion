<?php
/**
 * Dibujos SVG de la sección 03 (datos y almacenamiento).
 * Cada clave corresponde al campo 'grafico' de app/contenido.php.
 * Los colores salen de las clases .dt-svg en assets/css/datos.css.
 */
return [

    // 01 — Qué forma tiene el dato → qué servicio
    'forma' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 116" aria-hidden="true">
    <path class="c" d="M6 6h14l6 6v12H6z"/>
    <text x="34" y="18">Imagen, PDF</text>
    <line class="la" x1="98" y1="15" x2="124" y2="15" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="130" y="5" width="84" height="20" rx="4"/>
    <text class="ta" x="172" y="18" text-anchor="middle">Blob Storage</text>

    <path class="c" d="M6 36h8l3 3h11v15H6z"/>
    <text x="34" y="47">Carpeta</text>
    <line class="la" x1="98" y1="44" x2="124" y2="44" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="130" y="34" width="84" height="20" rx="4"/>
    <text class="ta" x="172" y="47" text-anchor="middle">Azure Files</text>

    <rect class="c" x="6" y="63" width="22" height="18"/>
    <path class="ln" d="M6 69h22M17 63v18"/>
    <text x="34" y="76">Tablas</text>
    <line class="la" x1="98" y1="73" x2="124" y2="73" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="130" y="63" width="84" height="20" rx="4"/>
    <text class="ta" x="172" y="76" text-anchor="middle">SQL / MySQL</text>

    <text class="ta" x="17" y="106" text-anchor="middle" font-size="12">{ }</text>
    <text x="34" y="105">JSON</text>
    <line class="la" x1="98" y1="102" x2="124" y2="102" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="130" y="92" width="84" height="20" rx="4"/>
    <text class="ta" x="172" y="105" text-anchor="middle">Cosmos DB</text>
</svg>
SVG,

    // 02 — Niveles de acceso: guardar vs. leer
    'frecuencia' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 124" aria-hidden="true">
    <text class="tt" x="32" y="12" text-anchor="middle">Hot</text>
    <text class="tt" x="84" y="12" text-anchor="middle">Cool</text>
    <text class="tt" x="136" y="12" text-anchor="middle">Cold</text>
    <text class="tt" x="188" y="12" text-anchor="middle">Archive</text>
    <text class="tn s" x="32" y="24" text-anchor="middle">diario</text>
    <text class="tn s" x="84" y="24" text-anchor="middle">30 días</text>
    <text class="tn s" x="136" y="24" text-anchor="middle">90 días</text>
    <text class="tn s" x="188" y="24" text-anchor="middle">180 días</text>

    <rect class="ba" x="14" y="40" width="16" height="60" rx="2"/>
    <rect class="bt" x="34" y="92" width="16" height="8" rx="2"/>
    <rect class="ba" x="66" y="60" width="16" height="40" rx="2"/>
    <rect class="bt" x="86" y="80" width="16" height="20" rx="2"/>
    <rect class="ba" x="118" y="74" width="16" height="26" rx="2"/>
    <rect class="bt" x="138" y="66" width="16" height="34" rx="2"/>
    <rect class="ba" x="170" y="90" width="16" height="10" rx="2"/>
    <rect class="bt" x="190" y="40" width="16" height="60" rx="2"/>
    <line class="ln" x1="8" y1="100" x2="212" y2="100"/>

    <rect class="ba" x="40" y="110" width="8" height="8" rx="2"/>
    <text x="52" y="117">costo guardar</text>
    <rect class="bt" x="128" y="110" width="8" height="8" rx="2"/>
    <text x="140" y="117">costo leer</text>
</svg>
SVG,

    // 03 — RPO y RTO en una línea de tiempo
    'perdida' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 122" aria-hidden="true">
    <path class="la" d="M50 50v-8h70v8"/>
    <text class="ta" x="85" y="34" text-anchor="middle">RPO · datos perdidos</text>

    <line class="ln" x1="10" y1="60" x2="210" y2="60"/>
    <circle class="cp" cx="50" cy="60" r="5"/>
    <circle class="ko" cx="120" cy="60" r="5"/>
    <circle class="ok" cx="190" cy="60" r="5"/>

    <path class="la" d="M120 70v8h70v-8"/>
    <text class="ta" x="155" y="92" text-anchor="middle">RTO · tiempo caído</text>

    <text class="tn" x="50" y="114" text-anchor="middle">respaldo</text>
    <text class="tn" x="120" y="114" text-anchor="middle">falla</text>
    <text class="tn" x="190" y="114" text-anchor="middle">en línea</text>
</svg>
SVG,

    // 04 — Escalar hacia arriba vs. hacia los lados
    'crecimiento' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 124" aria-hidden="true">
    <text class="tt" x="50" y="14" text-anchor="middle">SQL</text>
    <rect class="c" x="25" y="26" width="50" height="76" rx="3"/>
    <rect class="ca" x="25" y="58" width="50" height="44" rx="3"/>
    <line class="la" x1="88" y1="98" x2="88" y2="32" marker-end="url(#dt-flecha)"/>
    <text class="tn" x="55" y="118" text-anchor="middle">↑ más vCores</text>

    <line class="ln pt" x1="106" y1="10" x2="106" y2="106"/>

    <text class="tt" x="166" y="14" text-anchor="middle">Cosmos DB</text>
    <line class="la" x1="122" y1="34" x2="210" y2="34" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="120" y="50" width="20" height="52" rx="3"/>
    <rect class="ca" x="144" y="50" width="20" height="52" rx="3"/>
    <rect class="ca" x="168" y="50" width="20" height="52" rx="3"/>
    <rect class="ca" x="192" y="50" width="20" height="52" rx="3"/>
    <text class="ta s" x="130" y="80" text-anchor="middle">P1</text>
    <text class="ta s" x="154" y="80" text-anchor="middle">P2</text>
    <text class="ta s" x="178" y="80" text-anchor="middle">P3</text>
    <text class="ta s" x="202" y="80" text-anchor="middle">P4</text>
    <text class="tn" x="166" y="118" text-anchor="middle">→ más particiones</text>
</svg>
SVG,

    // Blob Storage — cuenta → contenedor → blobs
    'blob' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 120" aria-hidden="true">
    <rect class="c" x="6" y="6" width="208" height="108" rx="6"/>
    <text class="tn" x="16" y="22">cuenta: stpresentacionumg</text>
    <rect class="ca" x="16" y="32" width="188" height="72" rx="5"/>
    <text class="ta" x="26" y="48">contenedor: imagenes</text>
    <path class="c" d="M30 58h30l8 8v28H30z"/>
    <path class="c" d="M90 58h30l8 8v28H90z"/>
    <path class="c" d="M150 58h30l8 8v28H150z"/>
    <text class="tt" x="49" y="82" text-anchor="middle">.jpg</text>
    <text class="tt" x="109" y="82" text-anchor="middle">.mp4</text>
    <text class="tt" x="169" y="82" text-anchor="middle">.bak</text>
</svg>
SVG,

    // Azure Files — un recurso compartido montado por varios clientes
    'files' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 116" aria-hidden="true">
    <rect class="c" x="4" y="8" width="74" height="22" rx="4"/>
    <text class="tt" x="41" y="22" text-anchor="middle">Windows · SMB</text>
    <rect class="c" x="4" y="86" width="74" height="22" rx="4"/>
    <text class="tt" x="41" y="100" text-anchor="middle">Linux · NFS</text>
    <rect class="c" x="152" y="47" width="64" height="22" rx="4"/>
    <text class="tt" x="184" y="61" text-anchor="middle">App Service</text>

    <line class="la" x1="78" y1="22" x2="94" y2="44"/>
    <line class="la" x1="78" y1="94" x2="94" y2="80"/>
    <line class="la" x1="152" y1="58" x2="140" y2="60"/>

    <path class="ca" d="M92 42h16l5 5h27v35H92z"/>
    <text class="ta" x="116" y="69" text-anchor="middle">share</text>
</svg>
SVG,

    // Managed Disks — VM con disco y rendimiento por tipo
    'discos' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 120" aria-hidden="true">
    <rect class="c" x="8" y="16" width="60" height="44" rx="4"/>
    <text class="tt" x="38" y="42" text-anchor="middle">VM</text>
    <line class="la" x1="38" y1="60" x2="38" y2="70"/>
    <path class="ca" d="M18 76v18a20 5 0 0 0 40 0V76"/>
    <ellipse class="ca" cx="38" cy="76" rx="20" ry="5"/>
    <text class="tn" x="38" y="114" text-anchor="middle">disco</text>

    <text class="tn" x="151" y="14" text-anchor="middle">IOPS / rendimiento</text>
    <rect class="bt" x="92" y="90" width="22" height="10" rx="2"/>
    <rect class="bt" x="122" y="78" width="22" height="22" rx="2"/>
    <rect class="ba" x="152" y="58" width="22" height="42" rx="2"/>
    <rect class="ba" x="182" y="28" width="22" height="72" rx="2"/>
    <line class="ln" x1="88" y1="100" x2="210" y2="100"/>
    <text class="tn s" x="103" y="112" text-anchor="middle">HDD</text>
    <text class="tn s" x="133" y="112" text-anchor="middle">SSD</text>
    <text class="tn s" x="163" y="112" text-anchor="middle">Prem.</text>
    <text class="tn s" x="193" y="112" text-anchor="middle">Ultra</text>
</svg>
SVG,

    // Data Lake Gen2 — carpetas jerárquicas hacia motores de analítica
    'lake' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 116" aria-hidden="true">
    <text class="tt" x="8" y="18">datalake/</text>
    <text x="8" y="38">├─ raw/ventas/2026/</text>
    <text x="8" y="56">├─ curated/ventas/</text>
    <text x="8" y="74">└─ gold/reportes/</text>
    <line class="la" x1="122" y1="56" x2="146" y2="56" marker-end="url(#dt-flecha)"/>
    <rect class="ca" x="150" y="36" width="64" height="40" rx="4"/>
    <text class="ta" x="182" y="53" text-anchor="middle">Fabric</text>
    <text class="ta" x="182" y="67" text-anchor="middle">Databricks</text>
    <text class="tn" x="8" y="104">permisos (ACL) por carpeta</text>
</svg>
SVG,

    // Azure SQL — base primaria, respaldos y réplica en otra región
    'sql' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 124" aria-hidden="true">
    <rect class="ln pt" x="6" y="10" width="92" height="94" rx="5"/>
    <text class="tn" x="52" y="24" text-anchor="middle">Región A</text>
    <path class="ca" d="M30 40v30a22 6 0 0 0 44 0V40"/>
    <ellipse class="ca" cx="52" cy="40" rx="22" ry="6"/>
    <text class="ta s" x="52" y="64" text-anchor="middle">primaria</text>
    <text class="tn s" x="52" y="94" text-anchor="middle">respaldos ≤ 35 d</text>

    <rect class="ln pt" x="122" y="10" width="92" height="94" rx="5"/>
    <text class="tn" x="168" y="24" text-anchor="middle">Región B</text>
    <path class="c" d="M146 40v30a22 6 0 0 0 44 0V40"/>
    <ellipse class="c" cx="168" cy="40" rx="22" ry="6"/>
    <text class="tt s" x="168" y="64" text-anchor="middle">réplica</text>
    <text class="tn s" x="168" y="94" text-anchor="middle">solo lectura</text>

    <line class="la" x1="76" y1="56" x2="142" y2="56" marker-end="url(#dt-flecha)"/>
    <text class="tn" x="110" y="118" text-anchor="middle">geo-replicación</text>
</svg>
SVG,

    // PostgreSQL / MySQL — app y base dentro de la red privada
    'mysql' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 120" aria-hidden="true">
    <rect class="ln pt" x="6" y="10" width="208" height="88" rx="6"/>
    <text class="tn" x="14" y="24">VNet</text>
    <rect class="c" x="18" y="40" width="72" height="38" rx="4"/>
    <text class="tt" x="54" y="56" text-anchor="middle">App Service</text>
    <text class="tn" x="54" y="70" text-anchor="middle">PHP 8</text>
    <line class="la" x1="90" y1="59" x2="134" y2="59" marker-end="url(#dt-flecha)"/>
    <text class="tn s" x="112" y="52" text-anchor="middle">3306</text>
    <path class="ca" d="M140 42v34a26 6 0 0 0 52 0V42"/>
    <ellipse class="ca" cx="166" cy="42" rx="26" ry="6"/>
    <text class="ta" x="166" y="64" text-anchor="middle">MySQL</text>
    <text class="tn s" x="166" y="76" text-anchor="middle">flexible</text>
    <text class="tn" x="110" y="114" text-anchor="middle">sin IP pública: Private Endpoint</text>
</svg>
SVG,

    // Cosmos DB — réplicas en varias regiones
    'cosmos' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 124" aria-hidden="true">
    <text class="tn s" x="110" y="10" text-anchor="middle">99.999 % con varias regiones</text>
    <line class="la pt" x1="36" y1="44" x2="184" y2="44"/>
    <line class="la pt" x1="36" y1="44" x2="110" y2="102"/>
    <line class="la pt" x1="184" y1="44" x2="110" y2="102"/>
    <circle class="cs" cx="36" cy="44" r="22"/>
    <circle class="cs" cx="184" cy="44" r="22"/>
    <circle class="cs" cx="110" cy="102" r="18"/>
    <text class="ta" x="36" y="47" text-anchor="middle">EUA</text>
    <text class="ta" x="184" y="47" text-anchor="middle">Europa</text>
    <text class="ta" x="110" y="105" text-anchor="middle">Asia</text>
    <rect class="bg" x="58" y="52" width="104" height="28" rx="3"/>
    <text class="tt" x="110" y="64" text-anchor="middle">datos replicados</text>
    <text class="tn s" x="110" y="74" text-anchor="middle">lectura local &lt; 10 ms</text>
</svg>
SVG,

    // Redis — la caché responde antes que la base de datos
    'redis' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 120" aria-hidden="true">
    <rect class="c" x="6" y="44" width="50" height="30" rx="4"/>
    <text class="tt" x="31" y="63" text-anchor="middle">App</text>
    <line class="la" x1="56" y1="59" x2="84" y2="59" marker-end="url(#dt-flecha)"/>
    <text class="tok" x="70" y="38" text-anchor="middle">~1 ms</text>
    <rect class="ca" x="88" y="44" width="50" height="30" rx="4"/>
    <text class="ta" x="113" y="63" text-anchor="middle">Redis</text>
    <line class="ln pt" x1="138" y1="59" x2="164" y2="59" marker-end="url(#dt-flecha)"/>
    <text class="tn s" x="151" y="38" text-anchor="middle">si no está</text>
    <path class="c" d="M166 46v26a22 5 0 0 0 44 0V46"/>
    <ellipse class="c" cx="188" cy="46" rx="22" ry="5"/>
    <text class="tt" x="188" y="66" text-anchor="middle">BD</text>
    <text class="tn s" x="188" y="94" text-anchor="middle">decenas de ms</text>
    <text class="tn" x="110" y="114" text-anchor="middle">sesiones · carrito · consultas</text>
</svg>
SVG,

    // LRS — 3 copias en un solo centro de datos
    'lrs' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 116" aria-hidden="true">
    <rect class="ln pt" x="6" y="6" width="208" height="104" rx="6"/>
    <text class="tn" x="14" y="20">Región</text>
    <rect class="ca" x="16" y="30" width="58" height="66" rx="4"/>
    <rect class="c" x="81" y="30" width="58" height="66" rx="4"/>
    <rect class="c" x="146" y="30" width="58" height="66" rx="4"/>
    <text class="ta s" x="45" y="44" text-anchor="middle">Zona 1</text>
    <text class="tn s" x="110" y="44" text-anchor="middle">Zona 2</text>
    <text class="tn s" x="175" y="44" text-anchor="middle">Zona 3</text>
    <rect class="cp" x="23" y="56" width="12" height="12" rx="2"/>
    <rect class="cp" x="39" y="56" width="12" height="12" rx="2"/>
    <rect class="cp" x="55" y="56" width="12" height="12" rx="2"/>
    <text class="tt s" x="45" y="86" text-anchor="middle">3 copias</text>
    <text class="tn" x="110" y="70" text-anchor="middle">—</text>
    <text class="tn" x="175" y="70" text-anchor="middle">—</text>
</svg>
SVG,

    // ZRS — una copia en cada zona de disponibilidad
    'zrs' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 116" aria-hidden="true">
    <rect class="ln pt" x="6" y="6" width="208" height="104" rx="6"/>
    <text class="tn" x="14" y="20">Región</text>
    <rect class="ca" x="16" y="30" width="58" height="66" rx="4"/>
    <rect class="ca" x="81" y="30" width="58" height="66" rx="4"/>
    <rect class="ca" x="146" y="30" width="58" height="66" rx="4"/>
    <text class="ta s" x="45" y="44" text-anchor="middle">Zona 1</text>
    <text class="ta s" x="110" y="44" text-anchor="middle">Zona 2</text>
    <text class="ta s" x="175" y="44" text-anchor="middle">Zona 3</text>
    <rect class="cp" x="39" y="56" width="12" height="12" rx="2"/>
    <rect class="cp" x="104" y="56" width="12" height="12" rx="2"/>
    <rect class="cp" x="169" y="56" width="12" height="12" rx="2"/>
    <text class="tt s" x="45" y="86" text-anchor="middle">1 copia</text>
    <text class="tt s" x="110" y="86" text-anchor="middle">1 copia</text>
    <text class="tt s" x="175" y="86" text-anchor="middle">1 copia</text>
</svg>
SVG,

    // GRS — copia asíncrona a la región emparejada
    'grs' => <<<'SVG'
<svg class="dt-svg" viewBox="0 0 220 120" aria-hidden="true">
    <rect class="ln pt" x="6" y="10" width="92" height="80" rx="5"/>
    <text class="tn" x="52" y="24" text-anchor="middle">Región A</text>
    <rect class="cp" x="24" y="42" width="14" height="14" rx="2"/>
    <rect class="cp" x="45" y="42" width="14" height="14" rx="2"/>
    <rect class="cp" x="66" y="42" width="14" height="14" rx="2"/>
    <text class="tt s" x="52" y="78" text-anchor="middle">3 copias</text>

    <line class="la pt" x1="98" y1="49" x2="120" y2="49" marker-end="url(#dt-flecha)"/>

    <rect class="ln pt" x="122" y="10" width="92" height="80" rx="5"/>
    <text class="tn" x="168" y="24" text-anchor="middle">Región B (par)</text>
    <rect class="ca" x="140" y="42" width="14" height="14" rx="2"/>
    <rect class="ca" x="161" y="42" width="14" height="14" rx="2"/>
    <rect class="ca" x="182" y="42" width="14" height="14" rx="2"/>
    <text class="tt s" x="168" y="78" text-anchor="middle">3 copias</text>

    <text class="tn" x="110" y="110" text-anchor="middle">réplica asíncrona · RPO típico &lt; 15 min</text>
</svg>
SVG,

];
