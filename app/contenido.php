<?php
/**
 * Capa de datos: todo el contenido de la presentación vive aquí.
 * No hay base de datos; para cambiar textos solo se edita este arreglo.
 */
return [
    'sitio' => [
        'titulo'   => 'Microsoft Azure',
        'subtitulo'=> 'La nube de Microsoft, explicada en una sola página.',
        'curso'    => 'Exposición — Ingeniería en Sistemas, UMG',
    ],

    'que_es' => [
        'titulo' => '¿Qué es Azure?',
        'texto'  => 'Azure es la plataforma de servicios en la nube de Microsoft. Ofrece cómputo, almacenamiento, redes, bases de datos, inteligencia artificial y más, desde centros de datos repartidos por el mundo, accesibles por internet.',
        'pago_por_uso' => 'Solo se paga lo que se consume (horas de cómputo, GB almacenados, transacciones). No hay inversión inicial en servidores, se puede subir o bajar recursos según la demanda y apagar lo que no se usa para dejar de pagarlo. Existe una capa gratuita para probar.',
        'datos'  => [
            ['valor' => '2010', 'etiqueta' => 'Año de lanzamiento'],
            ['valor' => '60+',  'etiqueta' => 'Regiones en el mundo'],
            ['valor' => '200+', 'etiqueta' => 'Servicios disponibles'],
            ['valor' => 'Pago por uso', 'etiqueta' => 'Modelo de cobro'],
        ],
    ],

    'infraestructura' => [
        'titulo' => 'Infraestructura: cómputo, contenedores y redes',
        'texto'  => 'Dónde y cómo vive la aplicación dentro de Azure: del servicio que la hospeda a la red que la conecta.',
        'items'  => [
            ['categoria' => 'Cómputo (PaaS)', 'nombre' => 'App Service',  'texto' => 'Hospeda la app ya lista: subes el código y Azure administra servidor, sistema operativo y runtime. Es donde corre esta misma demo.'],
            ['categoria' => 'Contenedores',   'nombre' => 'Docker',       'texto' => 'Empaqueta la app con todas sus dependencias en una imagen portátil que corre igual en local, en App Service o en Kubernetes.'],
            ['categoria' => 'Orquestación',   'nombre' => 'AKS',          'texto' => 'Azure Kubernetes Service: administra, escala y recupera automáticamente muchos contenedores cuando la app crece a microservicios.'],
            ['categoria' => 'Redes',          'nombre' => 'VNet',         'texto' => 'Virtual Network: la red privada de Azure que conecta y aísla los recursos entre sí y controla el tráfico hacia internet.'],
        ],
    ],

    'modelos' => [
        'titulo' => 'Modelos de servicio',
        'cierre' => 'En resumen de IaaS a SaaS se gana comodidad (menos que administrar) y se pierde control.',
        'items'  => [
            [
                'sigla' => 'IaaS',
                'nombre'=> 'Infraestructura como servicio',
                'texto' => 'Microsoft da servidores virtuales, redes y almacenamiento; el cliente administra el sistema operativo, las aplicaciones y los datos.',
                'ejemplo' => 'Azure Virtual Machines',
            ],
            [
                'sigla' => 'PaaS',
                'nombre'=> 'Plataforma como servicio',
                'texto' => 'Microsoft administra la infraestructura y el sistema operativo; el cliente solo pone su código y sus datos.',
                'ejemplo' => 'Azure App Service (donde corre esta misma página)',
            ],
            [
                'sigla' => 'SaaS',
                'nombre'=> 'Software como servicio',
                'texto' => 'Aplicación completa lista para usar; el cliente solo la configura y la usa.',
                'ejemplo' => 'Microsoft 365',
            ],
        ],
    ],

    'servicios' => [
        'titulo' => 'Servicios principales',
        'items'  => [
            ['categoria' => 'Cómputo',        'nombre' => 'Virtual Machines',    'texto' => 'Servidores Windows o Linux bajo demanda.'],
            ['categoria' => 'Web',            'nombre' => 'App Service',         'texto' => 'Hospeda aplicaciones web en PHP, .NET, Node, Python o Java.'],
            ['categoria' => 'Almacenamiento', 'nombre' => 'Blob Storage',        'texto' => 'Archivos, imágenes y respaldos a gran escala.'],
            ['categoria' => 'Bases de datos', 'nombre' => 'Azure SQL / Cosmos DB','texto' => 'Bases relacionales y NoSQL administradas.'],
            ['categoria' => 'Redes',          'nombre' => 'Virtual Network',     'texto' => 'Redes privadas, subredes, VPN y balanceadores.'],
            ['categoria' => 'Contenedores',   'nombre' => 'AKS',                 'texto' => 'Kubernetes administrado para microservicios.'],
            ['categoria' => 'Identidad',      'nombre' => 'Microsoft Entra ID',  'texto' => 'Usuarios, inicio de sesión único y control de acceso.'],
            ['categoria' => 'IA',             'nombre' => 'Azure AI Services',   'texto' => 'Visión, voz, traducción y modelos de lenguaje.'],
        ],
    ],

    'ventajas' => [
        'titulo' => 'Ventajas y desventajas',
        'pros' => [
            'Sin gasto inicial en hardware: se pasa de inversión a gasto por consumo.',
            'Escalabilidad rápida según la demanda.',
            'Alta disponibilidad y presencia global.',
            'Mantenimiento, parches y actualizaciones a cargo del proveedor.',
            'Seguridad y certificaciones de cumplimiento incluidas.',
            'Despliegue en minutos, como esta página desde GitHub.',
        ],
        'contras' => [
            'Vendor lock-in: al usar servicios propios de Azure, migrar a otro proveedor se vuelve costoso y lento.',
            'Los costos pueden dispararse si no se monitorean los recursos.',
            'Dependencia de la conexión a internet y de la disponibilidad del proveedor.',
            'Menos control sobre la infraestructura en PaaS y SaaS.',
        ],
    ],

    'demo' => [
        'titulo' => 'La demostración',
        'texto'  => 'Esta misma página es la demo: un repositorio Git con PHP que se despliega en Azure App Service.',
        'pasos'  => [
            ['n' => '01', 'titulo' => 'Repositorio Git',  'texto' => 'Creamos el proyecto PHP y lo versionamos con Git en GitHub.'],
            ['n' => '02', 'titulo' => 'App Service',      'texto' => 'En el portal de Azure creamos una Web App con pila PHP 8.x.'],
            ['n' => '03', 'titulo' => 'Centro de implementación', 'texto' => 'Conectamos la Web App al repositorio de GitHub.'],
            ['n' => '04', 'titulo' => 'Despliegue',       'texto' => 'Cada git push a main publica automáticamente la nueva versión.'],
        ],
    ],

    'equipo' => [
        'Jose Aguilar',
        'Compañero',
    ],
];
