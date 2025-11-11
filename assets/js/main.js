/**
 * CAM Service Testing - JavaScript Principal
 * Scripts interactivos para la plataforma de pruebas
 */

// Esperar a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎥 CAM Service Testing Platform - Inicializado');
    
    // Inicializar todas las funciones
    initRangeSlider();
    initCanvas();
    initInteractiveElements();
    initSmoothScroll();
    initFormValidation();
    initAnimationObserver();
    initColorChanger();
    
    // Mostrar información de la página
    displayPageInfo();
});

/**
 * Inicializar el control deslizante de rango
 */
function initRangeSlider() {
    const rangeInput = document.getElementById('range');
    const rangeValue = document.getElementById('range-value');
    
    if (rangeInput && rangeValue) {
        rangeInput.addEventListener('input', function() {
            rangeValue.textContent = this.value + '%';
            rangeValue.style.color = `hsl(${this.value * 1.2}, 70%, 50%)`;
        });
    }
}

/**
 * Inicializar el canvas con animación
 */
function initCanvas() {
    const canvas = document.getElementById('test-canvas');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    let particles = [];
    let animationId;
    
    // Crear partículas
    class Particle {
        constructor() {
            this.reset();
        }
        
        reset() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vx = (Math.random() - 0.5) * 2;
            this.vy = (Math.random() - 0.5) * 2;
            this.radius = Math.random() * 3 + 1;
            this.color = `hsl(${Math.random() * 360}, 70%, 60%)`;
        }
        
        update() {
            this.x += this.vx;
            this.y += this.vy;
            
            if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
            if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
        }
        
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.fill();
        }
    }
    
    // Crear partículas iniciales
    for (let i = 0; i < 50; i++) {
        particles.push(new Particle());
    }
    
    // Animar
    function animate() {
        ctx.fillStyle = 'rgba(26, 26, 26, 0.1)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        
        // Dibujar conexiones
        particles.forEach((p1, i) => {
            particles.slice(i + 1).forEach(p2 => {
                const dx = p1.x - p2.x;
                const dy = p1.y - p2.y;
                const distance = Math.sqrt(dx * dx + dy * dy);
                
                if (distance < 100) {
                    ctx.beginPath();
                    ctx.strokeStyle = `rgba(255, 255, 255, ${1 - distance / 100})`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(p1.x, p1.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.stroke();
                }
            });
        });
        
        animationId = requestAnimationFrame(animate);
    }
    
    // Iniciar animación
    animate();
    
    // Limpiar al salir
    window.addEventListener('beforeunload', () => {
        cancelAnimationFrame(animationId);
    });
}

/**
 * Inicializar elementos interactivos
 */
function initInteractiveElements() {
    // Agregar efectos hover a las tarjetas
    const cards = document.querySelectorAll('.card, .info-card, .image-item');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Agregar contador de clics a los botones
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        let clickCount = 0;
        button.addEventListener('click', function(e) {
            if (this.type !== 'submit') {
                clickCount++;
                console.log(`Botón "${this.textContent}" clickeado ${clickCount} veces`);
            }
        });
    });
}

/**
 * Scroll suave para los enlaces de navegación
 */
function initSmoothScroll() {
    const navLinks = document.querySelectorAll('a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            
            if (targetId === '#top' || targetId === '#') {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            } else {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Validación de formulario
 */
function initFormValidation() {
    const form = document.querySelector('.test-form');
    if (!form) return;
    
    form.addEventListener('submit', function(e) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.style.borderColor = '#F44336';
            } else {
                field.style.borderColor = '#4CAF50';
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            showAlert('Por favor, completa todos los campos requeridos', 'error');
        }
    });
    
    // Limpiar error al escribir
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.style.borderColor = '#ddd';
        });
    });
}

/**
 * Observer para animar elementos al entrar en viewport
 */
function initAnimationObserver() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    const sections = document.querySelectorAll('.test-section');
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
}

/**
 * Cambiar colores aleatorios en elementos específicos
 */
function initColorChanger() {
    const colorElements = document.querySelectorAll('.animation-item .box');
    
    setInterval(() => {
        colorElements.forEach(element => {
            if (Math.random() > 0.7) {
                const hue = Math.floor(Math.random() * 360);
                element.style.filter = `hue-rotate(${hue}deg)`;
            }
        });
    }, 3000);
}

/**
 * Mostrar alerta personalizada
 */
function showAlert(message = '¡Botón clickeado!', type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type}`;
    alertDiv.style.position = 'fixed';
    alertDiv.style.top = '20px';
    alertDiv.style.right = '20px';
    alertDiv.style.zIndex = '10000';
    alertDiv.style.minWidth = '300px';
    alertDiv.style.animation = 'slideInRight 0.5s ease';
    alertDiv.textContent = message;
    
    document.body.appendChild(alertDiv);
    
    setTimeout(() => {
        alertDiv.style.animation = 'slideInRight 0.5s ease reverse';
        setTimeout(() => {
            alertDiv.remove();
        }, 500);
    }, 3000);
}

// Función global para el botón de prueba
window.showAlert = showAlert;

/**
 * Mostrar información de la página
 */
function displayPageInfo() {
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('🎥 CAM Service Testing Platform');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('📊 Información del Navegador:');
    console.log('  - User Agent:', navigator.userAgent);
    console.log('  - Idioma:', navigator.language);
    console.log('  - Plataforma:', navigator.platform);
    console.log('  - Cookies:', navigator.cookieEnabled ? 'Habilitadas' : 'Deshabilitadas');
    console.log('  - Online:', navigator.onLine ? 'Sí' : 'No');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('📐 Información de Pantalla:');
    console.log('  - Resolución:', screen.width + 'x' + screen.height);
    console.log('  - Viewport:', window.innerWidth + 'x' + window.innerHeight);
    console.log('  - Color Depth:', screen.colorDepth + ' bits');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('⏰ Información de Tiempo:');
    console.log('  - Fecha:', new Date().toLocaleDateString('es-ES'));
    console.log('  - Hora:', new Date().toLocaleTimeString('es-ES'));
    console.log('  - Timestamp:', Date.now());
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
}

/**
 * Utilidad para detectar rendimiento
 */
function checkPerformance() {
    if (window.performance && window.performance.timing) {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
        const connectTime = perfData.responseEnd - perfData.requestStart;
        const renderTime = perfData.domComplete - perfData.domLoading;
        
        console.log('⚡ Métricas de Rendimiento:');
        console.log('  - Tiempo de carga:', pageLoadTime + 'ms');
        console.log('  - Tiempo de conexión:', connectTime + 'ms');
        console.log('  - Tiempo de renderizado:', renderTime + 'ms');
    }
}

// Verificar rendimiento cuando la página termine de cargar
window.addEventListener('load', checkPerformance);

/**
 * Manejador de eventos de teclado
 */
document.addEventListener('keydown', function(e) {
    // Ctrl + Shift + D para mostrar info de debug
    if (e.ctrlKey && e.shiftKey && e.key === 'D') {
        e.preventDefault();
        displayPageInfo();
        checkPerformance();
    }
});

/**
 * Monitorear cambios de tamaño de ventana
 */
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        console.log('📐 Ventana redimensionada:', window.innerWidth + 'x' + window.innerHeight);
    }, 250);
});

/**
 * Detectar cuando la página se vuelve visible/oculta
 */
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        console.log('👁️ Página oculta');
    } else {
        console.log('👁️ Página visible');
    }
});

// Log final
console.log('✅ Todos los scripts inicializados correctamente');
