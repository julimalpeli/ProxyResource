<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAM Service Testing - Testing Site</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/fonts/custom-fonts.css">
</head>
<body>
    <?php
    // PHP variables to demonstrate functionality
    $timestamp = date('Y-m-d H:i:s');
    $test_items = ['Images', 'CSS', 'Fonts', 'Animations', 'Forms', 'Video', 'Audio'];
    $random_color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    ?>
    
    <!-- Header with animated gradient -->
    <header class="main-header">
        <div class="container">
            <h1 class="animated-title">🎥 CAM Service Testing Platform</h1>
            <p class="subtitle">Complete website for screen sharing tests</p>
            <p class="timestamp">Generated: <?php echo $timestamp; ?></p>
        </div>
    </header>
<script id='glance-cobrowse' data-ws="www.myglance.net" src='https://staging-cdn.myglance.net/cobrowse/CobrowseJS.ashx?group=21549&site=staging&script=' data-groupid='21549' data-additionalgroupids='' data-site="staging" data-inputevents='{"ctrl-13":"showButton", "alt-13":"showTerms", "shift-13":"startSession"}' data-presence='on' charset='UTF-8' defer></script>
    <!-- Sticky navigation -->
    <nav class="main-nav sticky">
        <div class="container">
            <ul class="nav-list">
                <li><a href="#images">Images</a></li>
                <li><a href="#typography">Typography</a></li>
                <li><a href="#forms">Forms</a></li>
                <li><a href="#animations">Animations</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#tables">Tables</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
            
            <!-- PHP Information Section -->
            <section class="info-section gradient-bg">
                <h2>📊 PHP Server Information</h2>
                <div class="info-grid">
                    <div class="info-card">
                        <h3>PHP Version</h3>
                        <p class="highlight"><?php echo phpversion(); ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Server</h3>
                        <p class="highlight"><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Host</h3>
                        <p class="highlight"><?php echo $_SERVER['HTTP_HOST'] ?? 'localhost'; ?></p>
                    </div>
                    <div class="info-card">
                        <h3>Random Color</h3>
                        <p class="highlight" style="color: <?php echo $random_color; ?>;"><?php echo $random_color; ?></p>
                    </div>
                </div>
            </section>

            <!-- Images Section -->
            <section id="images" class="test-section">
                <h2>🖼️ Image Tests</h2>
                <p>Different formats and sizes of generated SVG images</p>
                
                <div class="image-grid">
                    <?php
                    $images = [
                        ['file' => 'circle-red.svg', 'title' => 'Red Circle', 'class' => 'img-small'],
                        ['file' => 'square-blue.svg', 'title' => 'Blue Square', 'class' => 'img-small'],
                        ['file' => 'triangle-green.svg', 'title' => 'Green Triangle', 'class' => 'img-small'],
                        ['file' => 'gradient-bg.svg', 'title' => 'Gradient', 'class' => 'img-medium'],
                        ['file' => 'pattern.svg', 'title' => 'Pattern', 'class' => 'img-medium'],
                        ['file' => 'logo.svg', 'title' => 'CAM Logo', 'class' => 'img-large']
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

            <!-- Typography Section -->
            <section id="typography" class="test-section">
                <h2>✍️ Typography and Font Tests</h2>
                
                <div class="typography-showcase">
                    <h1 class="font-display">Display Font - H1 Title</h1>
                    <h2 class="font-heading">Heading Font - H2 Title</h2>
                    <h3 class="font-body">Body Font - H3 Title</h3>
                    
                    <p class="font-display">Lorem ipsum dolor sit amet, consectetur adipiscing elit. (Display)</p>
                    <p class="font-heading">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. (Heading)</p>
                    <p class="font-body">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. (Body)</p>
                    <p class="font-mono">Monospace code: function test() { return true; } (Monospace)</p>
                    
                    <div class="text-styles">
                        <p class="text-bold">Bold text</p>
                        <p class="text-italic">Italic text</p>
                        <p class="text-underline">Underlined text</p>
                        <p class="text-strikethrough">Strikethrough text</p>
                        <p class="text-shadow">Text with shadow</p>
                        <p class="text-gradient">Text with gradient</p>
                    </div>
                </div>
            </section>

            <!-- Forms Section -->
            <section id="forms" class="test-section">
                <h2>📝 Form Tests</h2>
                
                <form class="test-form" method="post" action="">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="user@example.com" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" placeholder="+1234567890">
                        </div>
                        
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select id="category" name="category">
                            <option value="">Select...</option>
                            <?php
                            $categories = ['Video', 'Audio', 'Full Screen', 'Window', 'Tab'];
                            foreach ($categories as $cat) {
                                echo "<option value='" . strtolower($cat) . "'>$cat</option>";
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Test options:</label>
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
                        <label>Priority:</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="priority" value="low"> Low
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="priority" value="medium" checked> Medium
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="priority" value="high"> High
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="range">Quality level:</label>
                        <input type="range" id="range" name="range" min="0" max="100" value="75" class="range-input">
                        <span id="range-value" class="range-value">75%</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" placeholder="Write your message here..."></textarea>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                        <button type="button" class="btn btn-success" onclick="showAlert()">Test Alert</button>
                    </div>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    echo "<div class='alert alert-success'>";
                    echo "<strong>✓ Form received!</strong><br>";
                    echo "Name: " . htmlspecialchars($_POST['name'] ?? '') . "<br>";
                    echo "Email: " . htmlspecialchars($_POST['email'] ?? '') . "<br>";
                    echo "Category: " . htmlspecialchars($_POST['category'] ?? 'Not selected');
                    echo "</div>";
                }
                ?>
            </section>

            <!-- Animations Section -->
            <section id="animations" class="test-section">
                <h2>🎬 CSS Animation Tests</h2>
                
                <div class="animation-grid">
                    <div class="animation-item">
                        <div class="box spin-animation"></div>
                        <p>Spin</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box pulse-animation"></div>
                        <p>Pulse</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box bounce-animation"></div>
                        <p>Bounce</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box shake-animation"></div>
                        <p>Shake</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box fade-animation"></div>
                        <p>Fade</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box slide-animation"></div>
                        <p>Slide</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box scale-animation"></div>
                        <p>Scale</p>
                    </div>
                    
                    <div class="animation-item">
                        <div class="box gradient-animation"></div>
                        <p>Gradient</p>
                    </div>
                </div>
            </section>

            <!-- Media Section -->
            <section id="media" class="test-section">
                <h2>🎵 Media Element Tests</h2>
                
                <div class="media-grid">
                    <div class="media-item">
                        <h3>HTML5 Video</h3>
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
                        <h3>Interactive Canvas</h3>
                        <canvas id="test-canvas" width="400" height="225"></canvas>
                    </div>
                </div>
                
                <div class="iframe-container">
                    <h3>iFrame Test</h3>
                    <iframe src="about:blank" title="Test iFrame"></iframe>
                </div>
            </section>

            <!-- Tables Section -->
            <section id="tables" class="test-section">
                <h2>📋 Table Tests</h2>
                
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Progress</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $table_data = [
                                ['Test 1', 'Video', 'Completed', 100],
                                ['Test 2', 'Audio', 'In Progress', 75],
                                ['Test 3', 'Screen', 'Pending', 0],
                                ['Test 4', 'Image', 'Completed', 100],
                                ['Test 5', 'CSS', 'In Progress', 50],
                            ];
                            
                            foreach ($table_data as $index => $row) {
                                $status_class = $row[2] === 'Completed' ? 'status-complete' : 
                                              ($row[2] === 'In Progress' ? 'status-progress' : 'status-pending');
                                echo "<tr>";
                                echo "<td>" . ($index + 1) . "</td>";
                                echo "<td>{$row[0]}</td>";
                                echo "<td><span class='badge badge-primary'>{$row[1]}</span></td>";
                                echo "<td><span class='badge $status_class'>{$row[2]}</span></td>";
                                echo "<td><div class='progress-bar'><div class='progress-fill' style='width: {$row[3]}%'>{$row[3]}%</div></div></td>";
                                echo "<td><button class='btn-small btn-info'>View</button> <button class='btn-small btn-danger'>Delete</button></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Misc Elements Section -->
            <section class="test-section">
                <h2>🎨 Miscellaneous Elements</h2>
                
                <div class="misc-grid">
                    <div class="card card-1">
                        <h3>Card with Shadow</h3>
                        <p>This card has a pronounced shadow</p>
                    </div>
                    
                    <div class="card card-2">
                        <h3>Card with Border</h3>
                        <p>This card has a colored border</p>
                    </div>
                    
                    <div class="card card-3">
                        <h3>Card with Gradient</h3>
                        <p>This card has a gradient background</p>
                    </div>
                    
                    <div class="card card-4">
                        <h3>Hover Card</h3>
                        <p>Hover your mouse over it</p>
                    </div>
                </div>
                
                <div class="alert-section">
                    <div class="alert alert-info">ℹ️ This is an informational alert</div>
                    <div class="alert alert-success">✓ This is a success alert</div>
                    <div class="alert alert-warning">⚠️ This is a warning alert</div>
                    <div class="alert alert-danger">✗ This is an error alert</div>
                </div>
            </section>

        </div>
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> CAM Service Testing Platform</p>
            <p>Generated with PHP <?php echo phpversion(); ?> | Timestamp: <?php echo time(); ?></p>
            <div class="footer-links">
                <a href="#top">Back to top</a>
                <a href="#images">Images</a>
                <a href="#forms">Forms</a>
                <a href="#animations">Animations</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>
