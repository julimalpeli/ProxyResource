<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAM Service Testing - Sitio de Pruebas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/fonts/custom-fonts.css">
</head>
<body>
    <?php
    // Variables PHP para demostrar funcionalidad
    $timestamp = date('Y-m-d H:i:s');
    $test_items = ['Imágenes', 'CSS', 'Fuentes', 'Animaciones', 'Formularios', 'Video', 'Audio'];
    $random_color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    ?>
    
    <!-- Header con gradiente animado -->
    <header class="main-header">
        <div class="container">
            <h1 class="animated-title">🎥 CAM Service Testing Platform</h1>
            <p class="subtitle">Sitio web completo para pruebas de compartir pantalla</p>
            <p class="timestamp">Generado: <?php echo $timestamp; ?></p>
        </div>
    </header>

    <!-- Navegación sticky -->
    <nav class="main-nav sticky">
        <div class="container">
            <ul class="nav-list">
                <li><a href="#images">Imágenes</a></li>
                <li><a href="#typography">Tipografía</a></li>
                <li><a href="#forms">Formularios</a></li>
                <li><a href="#animations">Animaciones</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#tables">Tablas</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            
            <!-- Sección de Información PHP -->
            <section class="info-section gradient-bg">
                <h2>📊 Información del Servidor PHP</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <h3>Versión PHP</h3>
                        <p class="highlight"><?php echo phpversion(); ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Servidor</h3>
                        <p class="highlight"><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Host</h3>
                        <p class="highlight"><?php echo $_SERVER['HTTP_HOST'] ?? 'localhost'; ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Color Aleatorio</h3>
                        <p class="highlight" style="color: <?php echo $random_color; ?>;"><?php echo $random_color; ?></p>
                    </div>
                </div>
            </section>

            <!-- Sección de Imágenes -->
            <section id="images" class="test-section">
                <h2>🖼️ Pruebas de Imágenes</h2>
                <p>Diferentes formatos y tamaños de imágenes SVG generadas</p>
                
                <div class="image-grid">
                    <?php
                    $images = [
                        ['file' => 'circle-red.svg', 'title' => 'Círculo Rojo', 'class' => 'img-small'],
                        ['file' => 'square-blue.svg', 'title' => 'Cuadrado Azul', 'class' => 'img-small'],
                        ['file' => 'triangle-green.svg', 'title' => 'Triángulo Verde', 'class' => 'img-small'],
                        ['file' => 'gradient-bg.svg', 'title' => 'Gradiente', 'class' => 'img-medium'],
                        ['file' => 'pattern.svg', 'title' => 'Patrón', 'class' => 'img-medium'],
                        ['file' => 'logo.svg', 'title' => 'Logo CAM', 'class' => 'img-large']
                    ];
                    
                    foreach ($images as $img) {
                        echo "<div class='image-item {$img['class']}'>";
                        echo "<img src='assets/images/{$img['file']}' alt='{$img['title']}'>";
                        echo "<p class='image-caption'>{$img['title']}</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </section>

            <!-- Sección de Tipografía -->
            <section id="typography" class="test-section">
                <h2>✍️ Pruebas de Tipografía y Fuentes</h2>
                
                <div class="typography-showcase">
                    <h1 class="font-display">Fuente Display - Título H1</h1>
                    <h2 class="font-heading">Fuente Heading - Título H2</h2>
                    <h3 class="font-body">Fuente Body - Título H3</h3>
                    
                    <p class="font-display">Lorem ipsum dolor sit amet, consectetur adipiscing elit. (Display)</p>
                    <p class="font-heading">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. (Heading)</p>
                    <p class="font-body">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. (Body)</p>
                    <p class="font-mono">Código monospace: function test() { return true; } (Monospace)</p>
                    
                    <div class="text-styles">
                        <p class="text-bold">Texto en negrita</p>
                        <p class="text-italic">Texto en cursiva</p>
                        <p class="text-underline">Texto subrayado</p>
                        <p class="text-strikethrough">Texto tachado</p>
                        <p class="text-shadow">Texto con sombra</p>
                        <p class="text-gradient">Texto con gradiente</p>
                    </div>
                </div>
            </section>

            <!-- Sección de Formularios -->
            <section id="forms" class="test-section">
                <h2>📝 Pruebas de Formularios</h2>
                
                <form class="test-form" method="post" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nombre Completo:</label>
                            <input type="text" id="name" name="name" placeholder="Juan Pérez" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="usuario@ejemplo.com" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input type="tel" id="phone" name="phone" placeholder="+1234567890">
                        </div>
                        
                        <div class="form-group">
                            <label for="date">Fecha:</label>
                            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Categoría:</label>
                        <select id="category" name="category">
                            <option value="">Seleccionar...</option>
                            <?php
                            $categories = ['Video', 'Audio', 'Pantalla Completa', 'Ventana', 'Tab'];
                            foreach ($categories as $cat) {
                                echo "<option value='" . strtolower($cat) . "'>$cat</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Opciones de prueba:</label>
                        <div class="checkbox-group">
                            <?php
                            foreach ($test_items as $item) {
                                $id = strtolower(str_replace(' ', '_', $item));
                                echo "<label class='checkbox-label'>";
                                echo "<input type='checkbox' name='items[]' value='$id'> $item";
                                echo "</label>";
                            }
                            ?>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Prioridad:</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="priority" value="low"> Baja
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="priority" value="medium" checked> Media
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="priority" value="high"> Alta
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="range">Nivel de calidad:</label>
                        <input type="range" id="range" name="range" min="0" max="100" value="75" class="range-input">
                        <span id="range-value" class="range-value">75%</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message" rows="4" placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-secondary">Limpiar</button>
                        <button type="button" class="btn btn-success" onclick="showAlert()">Probar Alert</button>
                    </div>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    echo "<div class='alert alert-success'>";
                    echo "<strong>✓ Formulario recibido!</strong><br>";
                    echo "Nombre: " . htmlspecialchars($_POST['name'] ?? '') . "<br>";
                    echo "Email: " . htmlspecialchars($_POST['email'] ?? '') . "<br>";
                    echo "Categoría: " . htmlspecialchars($_POST['category'] ?? 'No seleccionada');
                    echo "</div>";
                }
                ?>
            </section>

            <!-- Sección de Animaciones -->
            <section id="animations" class="test-section">
                <h2>🎬 Pruebas de Animaciones CSS</h2>
                
                <div class="animation-grid">
                    <div class="animation-item">
                        <div class="box spin-animation"></div>
                        <p>Rotación</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box pulse-animation"></div>
                        <p>Pulso</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box bounce-animation"></div>
                        <p>Rebote</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box shake-animation"></div>
                        <p>Vibración</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box fade-animation"></div>
                        <p>Fade</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box slide-animation"></div>
                        <p>Deslizar</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box scale-animation"></div>
                        <p>Escala</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box gradient-animation"></div>
                        <p>Gradiente</p>
                    </div>
                </div>
            </section>

            <!-- Sección de Media -->
            <section id="media" class="test-section">
                <h2>🎵 Pruebas de Media Elements</h2>
                
                <div class="media-grid">
                    <div class="media-item">
                        <h3>Video HTML5</h3>
                        <div class="video-placeholder">
                            <svg width="400" height="225" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="225" fill="#1a1a1a"/>
                                <circle cx="200" cy="112" r="40" fill="#4CAF50"/>
                                <polygon points="190,92 190,132 220,112" fill="white"/>
                                <text x="200" y="180" text-anchor="middle" fill="white" font-size="16">Video Placeholder</text>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="media-item">
                        <h3>Canvas Interactivo</h3>
                        <canvas id="test-canvas" width="400" height="225"></canvas>
                    </div>
                </div>
                
                <div class="iframe-container">
                    <h3>iFrame Test</h3>
                    <iframe src="about:blank" title="Test iFrame"></iframe>
                </div>
            </section>

            <!-- Sección de Tablas -->
            <section id="tables" class="test-section">
                <h2>📋 Pruebas de Tablas</h2>
                
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th>Progreso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $table_data = [
                                ['Test 1', 'Video', 'Completado', 100],
                                ['Test 2', 'Audio', 'En Progreso', 75],
                                ['Test 3', 'Pantalla', 'Pendiente', 0],
                                ['Test 4', 'Imagen', 'Completado', 100],
                                ['Test 5', 'CSS', 'En Progreso', 50],
                            ];
                            
                            foreach ($table_data as $index => $row) {
                                $status_class = $row[2] === 'Completado' ? 'status-complete' : 
                                              ($row[2] === 'En Progreso' ? 'status-progress' : 'status-pending');
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>{$row[0]}</td>";
                                echo "<td><span class='badge badge-primary'>{$row[1]}</span></td>";
                                echo "<td><span class='badge $status_class'>{$row[2]}</span></td>";
                                echo "<td><div class='progress-bar'><div class='progress-fill' style='width: {$row[3]}%'>{$row[3]}%</div></div></td>";
                                echo "<td><button class='btn-small btn-info'>Ver</button> <button class='btn-small btn-danger'>Eliminar</button></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Sección de Elementos Varios -->
            <section class="test-section">
                <h2>🎨 Elementos Varios</h2>
                
                <div class="misc-grid">
                    <div class="card card-1">
                        <h3>Card con Sombra</h3>
                        <p>Esta tarjeta tiene una sombra pronunciada</p>
                    </div>
                    
                    <div class="card card-2">
                        <h3>Card con Borde</h3>
                        <p>Esta tarjeta tiene un borde de color</p>
                    </div>
                    
                    <div class="card card-3">
                        <h3>Card con Gradiente</h3>
                        <p>Esta tarjeta tiene fondo degradado</p>
                    </div>
                    
                    <div class="card card-4">
                        <h3>Card Hover</h3>
                        <p>Pasa el mouse por encima</p>
                    </div>
                </div>
                
                <div class="alert-section">
                    <div class="alert alert-info">ℹ️ Esta es una alerta informativa</div>
                    <div class="alert alert-success">✓ Esta es una alerta de éxito</div>
                    <div class="alert alert-warning">⚠️ Esta es una alerta de advertencia</div>
                    <div class="alert alert-danger">✗ Esta es una alerta de error</div>
                </div>
            </section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> CAM Service Testing Platform</p>
            <p>Generado con PHP <?php echo phpversion(); ?> | Timestamp: <?php echo time(); ?></p>
            <div class="footer-links">
                <a href="#top">Volver arriba</a>
                <a href="#images">Imágenes</a>
                <a href="#forms">Formularios</a>
                <a href="#animations">Animaciones</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
