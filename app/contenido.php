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
        'texto'  => 'Azure es la plataforma de computación en la nube de Microsoft. Ofrece cientos de servicios —servidores virtuales, bases de datos, almacenamiento, redes, inteligencia artificial— que se rentan por uso, sin comprar ni mantener hardware propio. Fue lanzada en 2010 como "Windows Azure" y hoy es uno de los tres grandes proveedores de nube junto a AWS y Google Cloud.',
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
        'items'  => [
            [
                'sigla' => 'IaaS',
                'nombre'=> 'Infraestructura como servicio',
                'texto' => 'Rentas la máquina virtual, la red y el disco. Tú instalas y administras el sistema operativo y todo lo demás.',
                'ejemplo' => 'Azure Virtual Machines',
            ],
            [
                'sigla' => 'PaaS',
                'nombre'=> 'Plataforma como servicio',
                'texto' => 'Azure administra el servidor y el sistema operativo. Tú solo subes tu código. Es lo que usamos en la demostración.',
                'ejemplo' => 'Azure App Service',
            ],
            [
                'sigla' => 'SaaS',
                'nombre'=> 'Software como servicio',
                'texto' => 'Usas una aplicación terminada desde el navegador, sin administrar nada de la infraestructura.',
                'ejemplo' => 'Microsoft 365, Outlook',
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
            'Escalabilidad: subir o bajar recursos en minutos.',
            'Pago por uso: no hay inversión inicial en hardware.',
            'Integración nativa con Windows, Office y Visual Studio.',
            'Presencia global y alta disponibilidad.',
            'Cuenta gratuita y créditos para estudiantes.',
        ],
        'contras' => [
            'Costos difíciles de predecir si no se monitorean.',
            'Curva de aprendizaje por la cantidad de servicios.',
            'Dependencia del proveedor (vendor lock-in).',
            'Requiere conexión a internet estable.',
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
