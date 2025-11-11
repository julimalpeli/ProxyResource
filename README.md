# 🎥 CAM Service Testing Platform

Sitio web completo en PHP para realizar pruebas exhaustivas de servicios de compartir pantalla (CAM service). Incluye múltiples tipos de elementos visuales, animaciones, formularios interactivos y recursos multimedia.

## 📋 Características

### ✨ Elementos Incluidos

- **Imágenes SVG**: Círculos, cuadrados, triángulos, gradientes, patrones y logo personalizado
- **Estilos CSS Avanzados**: Múltiples efectos visuales, sombras, bordes y gradientes
- **Animaciones CSS**: Rotación, pulso, rebote, vibración, fade, deslizamiento, escala y más
- **Fuentes Personalizadas**: Diferentes familias tipográficas con efectos especiales
- **Formularios Interactivos**: Inputs, selects, checkboxes, radios, range sliders, textareas
- **Canvas Animado**: Partículas interactivas con conexiones dinámicas
- **Tablas Dinámicas**: Con progreso visual y badges de estado
- **Alertas y Notificaciones**: Diferentes tipos (info, success, warning, error)
- **Cards Responsivas**: Con diversos efectos hover
- **Navegación Sticky**: Menú fijo con scroll suave

### 🎨 Tecnologías Utilizadas

- **PHP**: Backend y generación dinámica de contenido
- **HTML5**: Estructura semántica moderna
- **CSS3**: Estilos avanzados y animaciones
- **JavaScript (Vanilla)**: Interactividad sin dependencias
- **SVG**: Gráficos vectoriales escalables

## 🚀 Instalación y Uso

### Requisitos

- PHP 7.0 o superior
- Servidor web (Apache, Nginx, o PHP Built-in Server)
- Navegador web moderno

### Opción 1: Servidor Built-in de PHP (Recomendado para pruebas)

```bash
# Navegar al directorio del proyecto
cd /workspace

# Iniciar el servidor PHP en el puerto 8000
php -S localhost:8000

# Abrir en el navegador
# http://localhost:8000
```

### Opción 2: Apache/Nginx

1. Copiar los archivos al directorio del servidor web
2. Configurar el virtual host apuntando a `/workspace`
3. Acceder mediante el dominio configurado

### Opción 3: Docker (Opcional)

```bash
# Crear un contenedor PHP rápido
docker run -d -p 8080:80 -v /workspace:/var/www/html php:apache

# Acceder en http://localhost:8080
```

## 📁 Estructura del Proyecto

```
/workspace/
├── index.php                 # Archivo principal PHP
├── README.md                 # Este archivo
├── readme                    # Readme original
└── assets/
    ├── css/
    │   ├── styles.css       # Estilos principales
    │   └── animations.css   # Animaciones CSS
    ├── js/
    │   └── main.js          # JavaScript interactivo
    ├── images/
    │   ├── circle-red.svg   # Imagen circular roja
    │   ├── square-blue.svg  # Cuadrado azul
    │   ├── triangle-green.svg # Triángulo verde
    │   ├── gradient-bg.svg  # Fondo con gradiente
    │   ├── pattern.svg      # Patrón decorativo
    │   └── logo.svg         # Logo CAM Service
    └── fonts/
        └── custom-fonts.css # Definiciones de fuentes
```

## 🎯 Secciones de Prueba

### 1. Información del Servidor PHP
- Versión de PHP
- Información del servidor
- Host actual
- Color aleatorio generado dinámicamente

### 2. Pruebas de Imágenes
- 6 imágenes SVG diferentes
- Diferentes tamaños y formas
- Efectos hover

### 3. Pruebas de Tipografía
- Múltiples familias de fuentes
- Estilos de texto variados
- Efectos especiales (sombra, gradiente, outline, 3D, neón, glitch)

### 4. Pruebas de Formularios
- Inputs de texto, email, teléfono, fecha
- Select con opciones generadas por PHP
- Checkboxes y radio buttons
- Range slider con feedback visual
- Textarea
- Validación en tiempo real

### 5. Pruebas de Animaciones
- 8 tipos diferentes de animaciones CSS
- Animaciones infinitas
- Diferentes timings y efectos

### 6. Pruebas de Media
- Video placeholder
- Canvas con animación de partículas
- iFrame de prueba

### 7. Pruebas de Tablas
- Tabla dinámica con datos PHP
- Badges de estado
- Barras de progreso animadas
- Botones de acción

### 8. Elementos Varios
- Cards con diferentes estilos
- Alertas de colores
- Footer con información dinámica

## 🔧 Características JavaScript

### Funcionalidades Implementadas

- **Range Slider Interactivo**: Actualización en tiempo real del valor
- **Canvas Animado**: 50 partículas con física simple y conexiones
- **Scroll Suave**: Navegación fluida entre secciones
- **Validación de Formularios**: Feedback visual inmediato
- **Intersection Observer**: Animaciones al hacer scroll
- **Color Changer**: Cambio aleatorio de colores en animaciones
- **Alertas Personalizadas**: Sistema de notificaciones
- **Monitoreo de Performance**: Métricas de carga y renderizado
- **Event Handlers**: Teclado, resize, visibility change

### Atajos de Teclado

- `Ctrl + Shift + D`: Mostrar información de debug en consola

## 🎨 Características CSS

### Variables CSS Personalizadas
```css
--primary-color: #2196F3
--secondary-color: #FF9800
--success-color: #4CAF50
--danger-color: #F44336
--warning-color: #FFC107
--info-color: #00BCD4
```

### Animaciones Disponibles
- Spin (rotación)
- Pulse (pulso)
- Bounce (rebote)
- Shake (vibración)
- Fade (desvanecimiento)
- Slide (deslizamiento)
- Scale (escalado)
- Gradient shift (gradiente animado)

## 📊 Pruebas Recomendadas para CAM Service

### Lista de Verificación

- [ ] Compartir pantalla completa
- [ ] Compartir ventana específica
- [ ] Compartir tab del navegador
- [ ] Verificar colores y gradientes
- [ ] Verificar animaciones CSS
- [ ] Verificar elementos interactivos (formularios, botones)
- [ ] Verificar canvas animado
- [ ] Verificar tablas y datos dinámicos
- [ ] Verificar scroll y navegación
- [ ] Verificar diferentes resoluciones
- [ ] Verificar tipografías y tamaños
- [ ] Verificar efectos hover
- [ ] Verificar alertas y notificaciones

## 🐛 Debug y Troubleshooting

### Verificar Instalación PHP

```bash
php -v
```

### Ver Errores PHP

Si hay problemas, habilitar display de errores en `index.php`:

```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
```

### Consola del Navegador

Abrir DevTools (F12) y revisar la consola para ver:
- Logs de inicialización
- Información del navegador
- Métricas de performance
- Eventos detectados

### Verificar Archivos

```bash
# Listar todos los archivos
find /workspace -type f

# Verificar permisos
ls -la /workspace/
```

## 📱 Responsive Design

El sitio es completamente responsive y se adapta a:
- 📱 Móviles (< 768px)
- 📱 Tablets (768px - 1024px)
- 🖥️ Desktop (> 1024px)

## 🌐 Compatibilidad de Navegadores

- ✅ Chrome/Edge (90+)
- ✅ Firefox (88+)
- ✅ Safari (14+)
- ✅ Opera (76+)

## 🚀 Optimizaciones

- CSS y JS sin dependencias externas
- SVG para imágenes escalables
- Animaciones con `will-change` para mejor performance
- Intersection Observer para lazy animations
- requestAnimationFrame para animaciones suaves
- Debounce en eventos de resize

## 📈 Métricas de Performance

El sitio incluye monitoreo automático de:
- Tiempo de carga total
- Tiempo de conexión
- Tiempo de renderizado DOM
- Información de viewport
- Profundidad de color

## 🤝 Contribuciones

Este es un proyecto de prueba. Siéntete libre de:
- Agregar más elementos de prueba
- Mejorar animaciones
- Agregar nuevos efectos CSS
- Optimizar el código JavaScript

## 📝 Notas

- Las fuentes utilizan fonts del sistema para máxima compatibilidad
- Todas las imágenes son SVG embebidas
- No requiere base de datos
- No requiere dependencias npm/composer
- Completamente standalone

## 🔒 Seguridad

- Sanitización de inputs PHP con `htmlspecialchars()`
- Validación de formularios en cliente y servidor
- Sin ejecución de código no sanitizado

## 📞 Soporte

Para reportar problemas o sugerencias:
1. Revisar la consola del navegador (F12)
2. Verificar logs del servidor PHP
3. Probar en diferentes navegadores

## 📄 Licencia

Este proyecto es de código abierto y puede ser utilizado libremente para propósitos de prueba y desarrollo.

---

**Desarrollado para pruebas de CAM Service** 🎥

*Última actualización: 2025-11-11*
