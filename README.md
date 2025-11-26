# Página Web Informativa sobre el Acceso al Agua Potable

Esta es una página web informativa creada con PHP que aborda el tema del difícil acceso al agua potable en el mundo.

## Características

- **Diseño moderno y responsive**: Se adapta a diferentes tamaños de pantalla
- **Múltiples secciones informativas**:
  - Hero section con imagen de fondo
  - Estadísticas alarmantes
  - Principales causas del problema
  - Consecuencias
  - Soluciones posibles
  - Formulario de contacto

- **Imágenes**: Utiliza imágenes de Unsplash relacionadas con el tema
- **PHP dinámico**: Contenido gestionado con PHP para fácil mantenimiento
- **Formulario de contacto funcional**: Procesa y valida datos del formulario

## Estructura de Archivos

```
├── index.php          # Página principal
├── style.css          # Estilos CSS
├── script.js          # JavaScript para interactividad
├── contacto.php       # Procesamiento del formulario
└── README.md          # Este archivo
```

## Requisitos

- Servidor web con PHP (Apache, Nginx, etc.)
- PHP 7.0 o superior

## Instalación

1. Coloca todos los archivos en el directorio de tu servidor web
2. Asegúrate de que el servidor web tenga PHP habilitado
3. Accede a la página a través de tu navegador

## Uso

Simplemente abre `index.php` en tu navegador. La página incluye:

- Navegación suave entre secciones
- Animaciones al hacer scroll
- Formulario de contacto funcional
- Diseño responsive para móviles y tablets

## Personalización

Puedes modificar el contenido editando las variables PHP en `index.php`:
- `$estadisticas`: Estadísticas sobre el problema
- `$causas`: Causas principales
- `$consecuencias`: Consecuencias del problema
- `$soluciones`: Soluciones propuestas

## Notas

- Las imágenes utilizan URLs de Unsplash. Para producción, considera descargar las imágenes localmente.
- El formulario de contacto actualmente solo valida los datos. Para enviar emails, necesitarías configurar un servidor de correo o usar un servicio de terceros.

