# Presentación Microsoft Azure (PHP)

Página de una sola vista que explica qué es Azure. Sirve también como demostración: el repositorio se despliega en **Azure App Service** directamente desde GitHub.

Sin base de datos y sin frameworks: solo PHP 8, HTML, CSS y un poco de JavaScript.

## Estructura

```
azure-presentacion/
├── index.php              ← punto de entrada (front controller)
├── app/
│   ├── contenido.php      ← capa de datos: todos los textos de la página
│   └── helpers.php        ← funciones: e() para escapar, vista(), infoServidor()
├── views/
│   ├── layout.php         ← esqueleto HTML
│   └── partials/          ← una vista por sección (hero, que-es, modelos…)
└── assets/
    ├── css/tokens.css     ← colores, fuentes y radios (el "tema")
    ├── css/styles.css     ← estilos de componentes (usan los tokens)
    └── js/main.js         ← animación al hacer scroll
```

Separación por capas: **datos** (`app/contenido.php`) → **lógica** (`index.php`, `helpers.php`) → **presentación** (`views/`, `assets/`).

- Cambiar un texto → `app/contenido.php`
- Cambiar el estilo visual → `assets/css/tokens.css`

## Correr en local

```bash
php -S localhost:8000
```

Abrir http://localhost:8000. También funciona copiando la carpeta a `htdocs` de XAMPP o a `/var/www/html` en un servidor LAMP.

## Desplegar en Azure App Service

1. Subir este repositorio a GitHub.
2. En el [portal de Azure](https://portal.azure.com): **Crear un recurso → Aplicación web**.
   - Publicar: **Código**
   - Pila del entorno de ejecución: **PHP 8.x**
   - Sistema operativo: **Linux**
   - Plan: **Gratis F1** (suficiente para la demo)
3. Ya creada la app: **Centro de implementación → Origen: GitHub** → autorizar → elegir organización, repositorio y rama `main` → **Guardar**.
4. Azure crea un workflow de GitHub Actions. Al terminar, la página queda en `https://<nombre-app>.azurewebsites.net`.
5. Cada `git push` a `main` vuelve a publicar automáticamente.

La sección "La demostración" muestra datos que genera PHP en el servidor: si dice **Azure App Service**, la página está corriendo en la nube.
