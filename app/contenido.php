<?php
/**
 * Capa de datos: todo el contenido de la presentación vive aquí.
 * No hay base de datos; para cambiar textos solo se edita este arreglo.
 */
return [
    'sitio' => [
        'titulo'   => 'Microsoft Azure',
        'subtitulo'=> 'La plataforma de computación en la nube abierta y flexible',
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

    'suscripciones' => [
        'titulo' => 'Tipos de suscripción de Azure y sus precios',
        'lead'   => 'Modelos de suscripción según el perfil del usuario: desde cuentas de prueba y estudiantes hasta acuerdos corporativos a gran escala.',
        'items'  => [
            [
                'sigla'   => 'Gratuito',
                'nombre'  => 'Azure gratuito (Free Account)',
                'precio'  => 'US$0 para comenzar',
                'detalle' => 'Crédito inicial de US$200 por 30 días.',
                'texto'   => 'Incluye cantidades gratuitas de determinados servicios durante 12 meses y otros permanentemente. Al terminar el crédito, debes cambiar a una suscripción de pago para continuar usando los servicios.',
                'pie'     => 'Microsoft Azure',
            ],
            [
                'sigla'   => 'Consumo',
                'nombre'  => 'Pago por uso (Pay-As-You-Go)',
                'precio'  => 'Sin cuota fija obligatoria',
                'detalle' => 'Pagas según los recursos que consumas.',
                'texto'   => 'El precio depende de las máquinas virtuales, bases de datos, almacenamiento y otros servicios. Puede costar desde centavos hasta cientos o miles de dólares mensuales.',
                'pie'     => 'Microsoft',
            ],
            [
                'sigla'   => 'Estudiantes',
                'nombre'  => 'Azure for Students',
                'precio'  => 'US$0 para estudiantes elegibles',
                'detalle' => 'Crédito de US$100 por 12 meses.',
                'texto'   => 'Permite practicar con servicios de Azure sin pagar mientras tengas crédito disponible y respetes los límites de la oferta. Está dirigido a estudiantes que cumplen los requisitos académicos.',
                'pie'     => 'Microsoft Learn',
            ],
            [
                'sigla'   => 'Empresarial',
                'nombre'  => 'Suscripciones empresariales',
                'precio'  => 'Precio personalizado',
                'detalle' => 'Para múltiples servicios y licencias.',
                'texto'   => 'Para empresas que necesitan administrar múltiples servicios, licencias, presupuestos y contratos. El costo depende del acuerdo comercial y del consumo; no existe una tarifa única para todas las empresas.',
                'pie'     => 'Enterprise Agreement',
            ],
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

    'devops' => [
        'titulo' => 'Cultura DevOps y CI/CD: Conectando el código con la nube',
        'texto'  => 'DevOps conecta el código con la infraestructura en la nube. Permite orquestar todo el ciclo de vida del software: desde la gestión de proyectos con Azure DevOps, la creación de pipelines automatizados para compilación y pruebas continuas, hasta el almacenamiento seguro de imágenes en Azure Container Registry y su despliegue.',
        'items'  => [
            [
                'categoria' => 'Gestión de proyectos (ALM)',
                'nombre'    => 'Azure DevOps',
                'texto'     => 'Orquesta el ciclo de vida del software con Azure Boards para tableros ágiles y Azure Repos para control de versiones Git colaborativo y trazable.',
            ],
            [
                'categoria' => 'Integración Continua (CI)',
                'nombre'    => 'Pipelines Automatizados',
                'texto'     => 'Compilación automática y ejecución de pruebas unitarias ante cada cambio de código, garantizando calidad antes del despliegue.',
            ],
            [
                'categoria' => 'Almacenamiento Seguro',
                'nombre'    => 'Azure Container Registry',
                'texto'     => 'Registro privado (ACR) para almacenar, versionar y escanear imágenes de contenedores Docker de forma segura para App Service y AKS.',
            ],
            [
                'categoria' => 'Entrega Continua (CD)',
                'nombre'    => 'Despliegue a la Nube',
                'texto'     => 'Conecta el código validado con la nube desplegando automáticamente a producción sin caídas de servicio ni intervención manual.',
            ],
        ],
        'pipeline' => [
            ['paso' => '[01. Plan & Repos]  ', 'estado' => '✔ OK      ', 'detalle' => 'Azure Boards & Git Repos — Gestión ágil y código versionado'],
            ['paso' => '[02. Build & Test]  ', 'estado' => '✔ PASADO  ', 'detalle' => 'Azure Pipelines — Compilación y pruebas unitarias continuas'],
            ['paso' => '[03. Imagen Docker] ', 'estado' => '✔ CREADA  ', 'detalle' => 'Docker Build — Empaquetado portátil de la aplicación'],
            ['paso' => '[04. Registro ACR]  ', 'estado' => '✔ SEGURO  ', 'detalle' => 'Azure Container Registry — Almacenamiento seguro de imágenes'],
            ['paso' => '[05. CD a la Nube]  ', 'estado' => '✔ EN VIVO ', 'detalle' => 'Despliegue automatizado hacia Azure App Service / AKS'],
        ],
        'simulador' => [
            'titulo' => 'Simulador en vivo: Ciclo de vida y despliegue automatizado',
            'subtitulo' => 'Escribe un cambio o selecciona un commit para ver cómo se orquesta la compilación, pruebas y entrega continua hacia Azure.',
            'presets' => [
                'feat: se crea vista de cicd y simulador interactivo',
                'fix: optimización de tiempos de respuesta en App Service',
                'refactor: actualización de imagen Docker en Azure Container Registry',
            ],
            'etapas' => [
                ['id' => 'step-repo',   'num' => '01', 'nombre' => 'Git Push',      'sub' => 'Azure Repos'],
                ['id' => 'step-ci',     'num' => '02', 'nombre' => 'CI & Pruebas',  'sub' => 'Azure Pipelines'],
                ['id' => 'step-docker', 'num' => '03', 'nombre' => 'Docker Build',  'sub' => 'Empaquetado'],
                ['id' => 'step-acr',    'num' => '04', 'nombre' => 'Push a ACR',    'sub' => 'Registro seguro'],
                ['id' => 'step-cd',     'num' => '05', 'nombre' => 'CD en Nube',    'sub' => 'App Service Live'],
            ],
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
                'ejemplo' => 'Azure App Service, Azure SQL Database',
            ],
            [
                'sigla' => 'SaaS',
                'nombre'=> 'Software como servicio',
                'texto' => 'Aplicación completa lista para usar; el cliente solo la configura y la usa.',
                'ejemplo' => 'Microsoft 365',
            ],
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

    // Sección 03: datos y almacenamiento. 'grafico' apunta a un dibujo de views/partials/datos-graficos.php
    'datos' => [
        'titulo' => 'Ecosistema de datos y almacenamiento',
        'texto'  => 'Toda aplicación genera datos: usuarios, archivos, transacciones y registros. Azure tiene un servicio distinto para cada tipo de dato, y elegir bien desde el inicio define el costo, el rendimiento y cuánto podrá crecer el sistema sin rehacerlo. La regla: primero se entiende el dato, después se elige el servicio.',
        'ayuda'  => 'Presiona cada recuadro para ver el detalle',
        'grupos' => [
            [
                'titulo'   => 'Antes de elegir: 4 preguntas',
                'columnas' => 4,
                'items'    => [
                    ['categoria' => 'Pregunta 01', 'nombre' => '¿Qué forma tiene el dato?',  'grafico' => 'forma',       'texto' => 'Archivos sueltos van a Blob Storage; una carpeta compartida, a Azure Files; tablas con relaciones y transacciones, a Azure SQL, PostgreSQL o MySQL; documentos JSON con esquema cambiante y escala global, a Cosmos DB.'],
                    ['categoria' => 'Pregunta 02', 'nombre' => '¿Con qué frecuencia se lee?', 'grafico' => 'frecuencia',  'texto' => 'Blob cobra según el nivel: Hot para uso diario, Cool (30 días mínimo), Cold (90) y Archive (180, tarda horas en recuperarse). Entre más frío, más barato guardar y más caro leer.'],
                    ['categoria' => 'Pregunta 03', 'nombre' => '¿Cuánto puedo perder?',      'grafico' => 'perdida',     'texto' => 'Con el negocio se acuerdan el RPO (cuántos datos se pueden perder) y el RTO (cuánto tiempo puede estar caído el sistema). Esos dos números deciden la redundancia, los respaldos y si hace falta otra región.'],
                    ['categoria' => 'Pregunta 04', 'nombre' => '¿Cuánto va a crecer?',       'grafico' => 'crecimiento', 'texto' => 'Una base relacional crece hacia arriba: más vCores en el mismo servidor. Cosmos DB crece hacia los lados, repartiendo datos por partition key; esa llave se elige al crear el contenedor y cambiarla obliga a migrar.'],
                ],
            ],
            [
                'titulo'   => 'Servicios',
                'columnas' => 4,
                'items'    => [
                    ['categoria' => 'Objetos',                'nombre' => 'Blob Storage',           'grafico' => 'blob',   'texto' => 'Imágenes, videos, respaldos y logs a escala casi ilimitada. Se organiza en cuenta → contenedor → blob, y es la base de casi todo el almacenamiento en Azure.'],
                    ['categoria' => 'Archivos compartidos',   'nombre' => 'Azure Files',            'grafico' => 'files',  'texto' => 'Carpetas de red por SMB o NFS que se montan en Windows, Linux o App Service. Reemplaza al servidor de archivos de la oficina sin cambiar las aplicaciones.'],
                    ['categoria' => 'Discos de VM',           'nombre' => 'Managed Disks',          'grafico' => 'discos', 'texto' => 'Discos para máquinas virtuales: Standard HDD, Standard SSD, Premium SSD y Ultra Disk. Se elige según las IOPS y la latencia que pida la carga.'],
                    ['categoria' => 'Analítica',              'nombre' => 'Data Lake Storage Gen2', 'grafico' => 'lake',   'texto' => 'Blob con carpetas jerárquicas y permisos por directorio. Es donde aterrizan los datos crudos para procesarlos con Fabric, Synapse o Databricks.'],
                    ['categoria' => 'Relacional',             'nombre' => 'Azure SQL Database',     'grafico' => 'sql',    'texto' => 'SQL Server administrado: respaldos automáticos, restauración a un punto en el tiempo y réplicas de solo lectura en otra región.'],
                    ['categoria' => 'Relacional open source', 'nombre' => 'PostgreSQL / MySQL',     'grafico' => 'mysql',  'texto' => 'Servidores flexibles administrados. Para una app PHP como esta demo, MySQL es la opción natural, conectada por red privada y sin IP pública.'],
                    ['categoria' => 'NoSQL',                  'nombre' => 'Cosmos DB',              'grafico' => 'cosmos', 'texto' => 'Base distribuida globalmente con latencia de milisegundos y hasta 99.999 % de disponibilidad en varias regiones. Se cobra por RU/s (unidades de solicitud).'],
                    ['categoria' => 'Caché en memoria',       'nombre' => 'Azure Managed Redis',    'grafico' => 'redis',  'texto' => 'Guarda en memoria sesiones y consultas frecuentes para responder en milisegundos y aliviar la base de datos. Sucesor de Azure Cache for Redis.'],
                ],
            ],
            [
                'titulo'   => 'Redundancia: dónde viven las copias',
                'columnas' => 3,
                'items'    => [
                    ['categoria' => 'Redundancia local',      'nombre' => 'LRS',        'grafico' => 'lrs', 'texto' => '3 copias dentro de un mismo centro de datos. Protege contra la falla de un disco o un rack, no contra la caída del edificio.', 'pie' => 'Uso: desarrollo, pruebas y datos que se pueden regenerar.'],
                    ['categoria' => 'Redundancia por zonas',  'nombre' => 'ZRS',        'grafico' => 'zrs', 'texto' => '3 copias en 3 zonas de disponibilidad (centros de datos separados) de la misma región. Si cae uno, la app sigue leyendo y escribiendo.', 'pie' => 'Uso: el punto de partida para producción.', 'destacada' => true],
                    ['categoria' => 'Redundancia geográfica', 'nombre' => 'GRS / GZRS', 'grafico' => 'grs', 'texto' => 'Además copia los datos a una región emparejada a cientos de kilómetros. La réplica es asíncrona: ante un desastre regional se pueden perder los últimos minutos.', 'pie' => 'Uso: datos críticos y continuidad del negocio.'],
                ],
            ],
        ],
        'practicas' => [
            'Acceder con Managed Identity y Entra ID en lugar de llaves o cadenas de conexión en el código.',
            'Guardar los secretos inevitables en Azure Key Vault, nunca en el repositorio Git.',
            'Usar Private Endpoints para que la base de datos y el storage solo se alcancen desde la VNet.',
            'Configurar políticas de ciclo de vida que muevan los blobs viejos a Cool o Archive automáticamente.',
            'Activar soft delete y versionado, y probar la restauración: un respaldo que nunca se restauró no está comprobado.',
            'Poner la app y sus datos en la misma región: la salida de datos entre regiones se cobra y agrega latencia.',
        ],
        'errores' => [
            'Dejar contenedores de Blob con acceso público anónimo: es una de las fugas de datos más comunes.',
            'Repartir la llave de la cuenta o tokens SAS sin fecha de expiración.',
            'Usar LRS en producción "porque es más barato".',
            'Mandar a Archive datos que se consultan seguido: recuperarlos tarda horas y tiene costo.',
            'Elegir mal la partition key en Cosmos DB: crea particiones calientes y desperdicia RU/s.',
            'Sobredimensionar la base "por si acaso" en vez de escalar según métricas.',
        ],
        'cli' => [
            '# Nombre: 3 a 24 minúsculas y números, único en todo Azure',
            'az storage account create \\',
            '    --name stpresentacionumg \\',
            '    --resource-group rg-presentacion \\',
            '    --location eastus2 \\',
            '    --sku Standard_ZRS \\',
            '    --kind StorageV2 \\',
            '    --access-tier Hot \\',
            '    --min-tls-version TLS1_2 \\',
            '    --allow-blob-public-access false',
        ],
    ],

    'seguridad' => [
        'titulo' => 'Seguridad proactiva e identidad',
        'texto'  => 'Para cerrar el ciclo, se protege el entorno: quién accede, dónde viven los secretos y cómo se detectan vulnerabilidades antes de desplegar.',
        'items'  => [
            ['categoria' => 'Identidad',  'nombre' => 'Microsoft Entra ID', 'texto' => 'Control de accesos centralizado: inicio de sesión único, MFA, roles (RBAC) y acceso condicional para usuarios y aplicaciones.'],
            ['categoria' => 'Secretos',   'nombre' => 'Azure Key Vault',    'texto' => 'Bóveda para variables de entorno, claves y certificados. App Service los lee con una identidad administrada, sin guardarlos en el código.'],
            ['categoria' => 'Código',     'nombre' => 'GitHub Advanced Security', 'texto' => 'Escaneo del código fuente: detecta vulnerabilidades (CodeQL), dependencias inseguras y secretos expuestos en cada push.'],
            ['categoria' => 'Pipeline',   'nombre' => 'Gitleaks',           'texto' => 'Se ejecuta en GitHub Actions y bloquea el despliegue si encuentra contraseñas o tokens en el repositorio.'],
        ],
    ],

    'equipo' => [
        'Grupo 8',
    ],
];
