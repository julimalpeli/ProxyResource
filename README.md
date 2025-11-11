# 🎥 CAM Service Testing Platform

Complete PHP website for comprehensive screen sharing service (CAM service) testing. Includes multiple types of visual elements, animations, interactive forms, and multimedia resources.

## 📋 Features

### ✨ Included Elements

- **SVG Images**: Circles, squares, triangles, gradients, patterns, and custom logo
- **Advanced CSS Styles**: Multiple visual effects, shadows, borders, and gradients
- **CSS Animations**: Rotation, pulse, bounce, shake, fade, slide, scale, and more
- **Custom Fonts**: Different typographic families with special effects
- **Interactive Forms**: Inputs, selects, checkboxes, radios, range sliders, textareas
- **Animated Canvas**: Interactive particles with dynamic connections
- **Dynamic Tables**: With visual progress and status badges
- **Alerts and Notifications**: Different types (info, success, warning, error)
- **Responsive Cards**: With various hover effects
- **Sticky Navigation**: Fixed menu with smooth scrolling

### 🎨 Technologies Used

- **PHP**: Backend and dynamic content generation
- **HTML5**: Modern semantic structure
- **CSS3**: Advanced styles and animations
- **JavaScript (Vanilla)**: Interactivity without dependencies
- **SVG**: Scalable vector graphics

## 🚀 Installation and Usage

### Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, or PHP Built-in Server)
- Modern web browser

### Option 1: PHP Built-in Server (Recommended for testing)

```bash
# Navigate to project directory
cd /workspace

# Start PHP server on port 8000
php -S localhost:8000

# Open in browser
# http://localhost:8000
```

### Option 2: Apache/Nginx

1. Copy files to web server directory
2. Configure virtual host pointing to `/workspace`
3. Access through configured domain

### Option 3: Docker (Optional)

```bash
# Create a quick PHP container
docker run -d -p 8080:80 -v /workspace:/var/www/html php:apache

# Access at http://localhost:8080
```

## 📁 Project Structure

```
/workspace/
├── index.php                 # Main PHP file
├── README.md                 # This file
├── readme                    # Original readme
└── assets/
    ├── css/
    │   ├── styles.css       # Main styles
    │   └── animations.css   # CSS animations
    ├── js/
    │   └── main.js          # Interactive JavaScript
    ├── images/
    │   ├── circle-red.svg   # Red circle image
    │   ├── square-blue.svg  # Blue square
    │   ├── triangle-green.svg # Green triangle
    │   ├── gradient-bg.svg  # Gradient background
    │   ├── pattern.svg      # Decorative pattern
    │   └── logo.svg         # CAM Service logo
    └── fonts/
        └── custom-fonts.css # Font definitions
```

## 🎯 Test Sections

### 1. PHP Server Information
- PHP version
- Server information
- Current host
- Randomly generated color

### 2. Image Tests
- 6 different SVG images
- Different sizes and shapes
- Hover effects

### 3. Typography Tests
- Multiple font families
- Varied text styles
- Special effects (shadow, gradient, outline, 3D, neon, glitch)

### 4. Form Tests
- Text, email, phone, date inputs
- Select with PHP-generated options
- Checkboxes and radio buttons
- Range slider with visual feedback
- Textarea
- Real-time validation

### 5. Animation Tests
- 8 different CSS animation types
- Infinite animations
- Different timings and effects

### 6. Media Tests
- Video placeholder
- Canvas with particle animation
- Test iFrame

### 7. Table Tests
- Dynamic table with PHP data
- Status badges
- Animated progress bars
- Action buttons

### 8. Miscellaneous Elements
- Cards with different styles
- Colored alerts
- Footer with dynamic information

## 🔧 JavaScript Features

### Implemented Functionalities

- **Interactive Range Slider**: Real-time value updates
- **Animated Canvas**: 50 particles with simple physics and connections
- **Smooth Scrolling**: Fluid navigation between sections
- **Form Validation**: Immediate visual feedback
- **Intersection Observer**: Scroll-triggered animations
- **Color Changer**: Random color changes in animations
- **Custom Alerts**: Notification system
- **Performance Monitoring**: Load and rendering metrics
- **Event Handlers**: Keyboard, resize, visibility change

### Keyboard Shortcuts

- `Ctrl + Shift + D`: Display debug information in console

## 🎨 CSS Features

### Custom CSS Variables
```css
--primary-color: #2196F3
--secondary-color: #FF9800
--success-color: #4CAF50
--danger-color: #F44336
--warning-color: #FFC107
--info-color: #00BCD4
```

### Available Animations
- Spin (rotation)
- Pulse
- Bounce
- Shake
- Fade
- Slide
- Scale
- Gradient shift

## 📊 Recommended Tests for CAM Service

### Checklist

- [ ] Share full screen
- [ ] Share specific window
- [ ] Share browser tab
- [ ] Verify colors and gradients
- [ ] Verify CSS animations
- [ ] Verify interactive elements (forms, buttons)
- [ ] Verify animated canvas
- [ ] Verify tables and dynamic data
- [ ] Verify scrolling and navigation
- [ ] Verify different resolutions
- [ ] Verify typography and sizes
- [ ] Verify hover effects
- [ ] Verify alerts and notifications

## 🐛 Debug and Troubleshooting

### Verify PHP Installation

```bash
php -v
```

### View PHP Errors

If there are issues, enable error display in `index.php`:

```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
```

### Browser Console

Open DevTools (F12) and check the console to see:
- Initialization logs
- Browser information
- Performance metrics
- Detected events

### Verify Files

```bash
# List all files
find /workspace -type f

# Check permissions
ls -la /workspace/
```

## 📱 Responsive Design

The site is fully responsive and adapts to:
- 📱 Mobile (< 768px)
- 📱 Tablets (768px - 1024px)
- 🖥️ Desktop (> 1024px)

## 🌐 Browser Compatibility

- ✅ Chrome/Edge (90+)
- ✅ Firefox (88+)
- ✅ Safari (14+)
- ✅ Opera (76+)

## 🚀 Optimizations

- CSS and JS without external dependencies
- SVG for scalable images
- Animations with `will-change` for better performance
- Intersection Observer for lazy animations
- requestAnimationFrame for smooth animations
- Debounce on resize events

## 📈 Performance Metrics

The site includes automatic monitoring of:
- Total load time
- Connection time
- DOM rendering time
- Viewport information
- Color depth

## 🤝 Contributions

This is a test project. Feel free to:
- Add more test elements
- Improve animations
- Add new CSS effects
- Optimize JavaScript code

## 📝 Notes

- Fonts use system fonts for maximum compatibility
- All images are embedded SVGs
- No database required
- No npm/composer dependencies
- Completely standalone

## 🔒 Security

- PHP input sanitization with `htmlspecialchars()`
- Client and server form validation
- No unsanitized code execution

## 📞 Support

To report issues or suggestions:
1. Check browser console (F12)
2. Verify PHP server logs
3. Test in different browsers

## 📄 License

This project is open source and can be used freely for testing and development purposes.

---

**Developed for CAM Service testing** 🎥

*Last updated: 2025-11-11*
