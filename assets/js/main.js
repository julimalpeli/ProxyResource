/**
 * CAM Service Testing - Main JavaScript
 * Interactive scripts for the testing platform
 */

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎥 CAM Service Testing Platform - Initialized');
    
    // Initialize all functions
    initRangeSlider();
    initCanvas();
    initInteractiveElements();
    initSmoothScroll();
    initFormValidation();
    initAnimationObserver();
    initColorChanger();
    
    // Display page information
    displayPageInfo();
});

/**
 * Initialize range slider control
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
 * Initialize canvas with animation
 */
function initCanvas() {
    const canvas = document.getElementById('test-canvas');
    if (!canvas) return;
    
    const ctx = canvas.getContext('2d');
    let particles = [];
    let animationId;
    
    // Create particles
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
    
    // Create initial particles
    for (let i = 0; i < 50; i++) {
        particles.push(new Particle());
    }
    
    // Animate
    function animate() {
        ctx.fillStyle = 'rgba(26, 26, 26, 0.1)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        
        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        
        // Draw connections
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
    
    // Start animation
    animate();
    
    // Clean up on exit
    window.addEventListener('beforeunload', () => {
        cancelAnimationFrame(animationId);
    });
}

/**
 * Initialize interactive elements
 */
function initInteractiveElements() {
    // Add hover effects to cards
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
    
    // Add click counter to buttons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        let clickCount = 0;
        button.addEventListener('click', function(e) {
            if (this.type !== 'submit') {
                clickCount++;
                console.log(`Button "${this.textContent}" clicked ${clickCount} times`);
            }
        });
    });
}

/**
 * Smooth scroll for navigation links
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
 * Form validation
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
            showAlert('Please complete all required fields', 'error');
        }
    });
    
    // Clear error when typing
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.style.borderColor = '#ddd';
        });
    });
}

/**
 * Observer to animate elements when entering viewport
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
 * Change random colors in specific elements
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
 * Show custom alert
 */
function showAlert(message = 'Button clicked!', type = 'info') {
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

// Global function for test button
window.showAlert = showAlert;

/**
 * Display page information
 */
function displayPageInfo() {
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('🎥 CAM Service Testing Platform');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('📊 Browser Information:');
    console.log('  - User Agent:', navigator.userAgent);
    console.log('  - Language:', navigator.language);
    console.log('  - Platform:', navigator.platform);
    console.log('  - Cookies:', navigator.cookieEnabled ? 'Enabled' : 'Disabled');
    console.log('  - Online:', navigator.onLine ? 'Yes' : 'No');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('📐 Screen Information:');
    console.log('  - Resolution:', screen.width + 'x' + screen.height);
    console.log('  - Viewport:', window.innerWidth + 'x' + window.innerHeight);
    console.log('  - Color Depth:', screen.colorDepth + ' bits');
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    console.log('⏰ Time Information:');
    console.log('  - Date:', new Date().toLocaleDateString('en-US'));
    console.log('  - Time:', new Date().toLocaleTimeString('en-US'));
    console.log('  - Timestamp:', Date.now());
    console.log('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
}

/**
 * Utility to detect performance
 */
function checkPerformance() {
    if (window.performance && window.performance.timing) {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
        const connectTime = perfData.responseEnd - perfData.requestStart;
        const renderTime = perfData.domComplete - perfData.domLoading;
        
        console.log('⚡ Performance Metrics:');
        console.log('  - Load time:', pageLoadTime + 'ms');
        console.log('  - Connection time:', connectTime + 'ms');
        console.log('  - Render time:', renderTime + 'ms');
    }
}

// Check performance when page finishes loading
window.addEventListener('load', checkPerformance);

/**
 * Keyboard event handler
 */
document.addEventListener('keydown', function(e) {
    // Ctrl + Shift + D to display debug info
    if (e.ctrlKey && e.shiftKey && e.key === 'D') {
        e.preventDefault();
        displayPageInfo();
        checkPerformance();
    }
});

/**
 * Monitor window resize changes
 */
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        console.log('📐 Window resized:', window.innerWidth + 'x' + window.innerHeight);
    }, 250);
});

/**
 * Detect when page becomes visible/hidden
 */
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        console.log('👁️ Page hidden');
    } else {
        console.log('👁️ Page visible');
    }
});

// Final log
console.log('✅ All scripts initialized successfully');
