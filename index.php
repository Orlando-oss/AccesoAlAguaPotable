<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Agua Potable - Un Desafío Global</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Datos para la página
    $titulo = "El Acceso al Agua Potable: Un Desafío Global";
    $subtitulo = "Millones de personas en el mundo carecen de acceso a agua limpia y segura";
    
    $estadisticas = [
        [
            "numero" => "2.2 mil millones",
            "descripcion" => "de personas no tienen acceso a servicios de agua potable gestionados de forma segura"
        ],
        [
            "numero" => "4.2 mil millones",
            "descripcion" => "de personas no tienen acceso a servicios de saneamiento gestionados de forma segura"
        ],
        [
            "numero" => "297,000",
            "descripcion" => "niños menores de 5 años mueren cada año por enfermedades relacionadas con agua insalubre"
        ]
    ];
    
    $causas = [
        [
            "titulo" => "Cambio Climático",
            "descripcion" => "Las sequías prolongadas y los patrones climáticos impredecibles reducen la disponibilidad de agua dulce.",
            "imagen" => "https://images.unsplash.com/photo-1569163139394-de44cb8b8e8b?w=800"
        ],
        [
            "titulo" => "Contaminación",
            "descripcion" => "La contaminación industrial y agrícola hace que muchas fuentes de agua sean inseguras para el consumo.",
            "imagen" => "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800"
        ],
        [
            "titulo" => "Infraestructura Insuficiente",
            "descripcion" => "La falta de infraestructura adecuada impide que el agua llegue a las comunidades más necesitadas.",
            "imagen" => "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800"
        ],
        [
            "titulo" => "Pobreza y Desigualdad",
            "descripcion" => "Las comunidades más pobres son las que más sufren la falta de acceso a agua potable.",
            "imagen" => "https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800"
        ]
    ];
    
    $consecuencias = [
        "Enfermedades transmitidas por el agua como cólera, diarrea y tifus",
        "Desnutrición debido a la falta de agua para la agricultura",
        "Falta de oportunidades educativas, especialmente para niñas que deben buscar agua",
        "Conflictos por recursos hídricos escasos",
        "Impacto económico negativo en comunidades y países"
    ];
    
    $soluciones = [
        [
            "titulo" => "Tecnología de Purificación",
            "descripcion" => "Implementar sistemas de filtración y purificación de agua accesibles y sostenibles.",
            "imagen" => "https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800"
        ],
        [
            "titulo" => "Infraestructura Sostenible",
            "descripcion" => "Construir pozos, sistemas de captación de lluvia y redes de distribución eficientes.",
            "imagen" => "https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?w=800"
        ],
        [
            "titulo" => "Educación y Concienciación",
            "descripcion" => "Enseñar sobre higiene, conservación del agua y prácticas sostenibles.",
            "imagen" => "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800"
        ],
        [
            "titulo" => "Políticas Públicas",
            "descripcion" => "Desarrollar políticas que garanticen el acceso al agua como derecho humano fundamental.",
            "imagen" => "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800"
        ]
    ];
    ?>

    <!-- Header / Hero Section -->
    <header class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1><?php echo htmlspecialchars($titulo); ?></h1>
            <p class="hero-subtitle"><?php echo htmlspecialchars($subtitulo); ?></p>
            <a href="#estadisticas" class="btn-primary">Conocer más</a>
        </div>
    </header>

    <!-- Navegación -->
    <nav class="navbar">
        <div class="container">
            <ul class="nav-menu">
                <li><a href="#estadisticas">Estadísticas</a></li>
                <li><a href="#causas">Causas</a></li>
                <li><a href="#consecuencias">Consecuencias</a></li>
                <li><a href="#soluciones">Soluciones</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sección de Estadísticas -->
    <section id="estadisticas" class="section statistics">
        <div class="container">
            <h2 class="section-title">Estadísticas Alarmantes</h2>
            <div class="stats-grid">
                <?php foreach ($estadisticas as $stat): ?>
                <div class="stat-card">
                    <div class="stat-number"><?php echo htmlspecialchars($stat['numero']); ?></div>
                    <p class="stat-description"><?php echo htmlspecialchars($stat['descripcion']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sección de Causas -->
    <section id="causas" class="section causes">
        <div class="container">
            <h2 class="section-title">Principales Causas</h2>
            <div class="causes-grid">
                <?php foreach ($causas as $causa): ?>
                <div class="cause-card">
                    <div class="cause-image">
                        <img src="<?php echo htmlspecialchars($causa['imagen']); ?>" 
                             alt="<?php echo htmlspecialchars($causa['titulo']); ?>"
                             loading="lazy">
                    </div>
                    <div class="cause-content">
                        <h3><?php echo htmlspecialchars($causa['titulo']); ?></h3>
                        <p><?php echo htmlspecialchars($causa['descripcion']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sección de Consecuencias -->
    <section id="consecuencias" class="section consequences">
        <div class="container">
            <h2 class="section-title">Consecuencias del Problema</h2>
            <div class="consequences-list">
                <?php foreach ($consecuencias as $consecuencia): ?>
                <div class="consequence-item">
                    <span class="consequence-icon">⚠️</span>
                    <p><?php echo htmlspecialchars($consecuencia); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="consequence-image">
                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?w=1200" 
                     alt="Consecuencias del acceso limitado al agua"
                     loading="lazy">
            </div>
        </div>
    </section>

    <!-- Sección de Soluciones -->
    <section id="soluciones" class="section solutions">
        <div class="container">
            <h2 class="section-title">Soluciones Posibles</h2>
            <div class="solutions-grid">
                <?php foreach ($soluciones as $solucion): ?>
                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo htmlspecialchars($solucion['imagen']); ?>" 
                             alt="<?php echo htmlspecialchars($solucion['titulo']); ?>"
                             loading="lazy">
                    </div>
                    <div class="solution-content">
                        <h3><?php echo htmlspecialchars($solucion['titulo']); ?></h3>
                        <p><?php echo htmlspecialchars($solucion['descripcion']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="section contact">
        <div class="container">
            <h2 class="section-title">¿Quieres Ayudar?</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    <p>Si deseas contribuir o obtener más información sobre cómo ayudar a resolver este problema global, contáctanos.</p>
                    <div class="contact-details">
                        <p><strong>Email:</strong> info@aguapotable.org</p>
                        <p><strong>Teléfono:</strong> +1 (555) 123-4567</p>
                        <p><strong>Dirección:</strong> Calle Principal 123, Ciudad</p>
                    </div>
                </div>
                <div class="contact-form">
                    <form method="POST" action="contacto.php">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Acceso al Agua Potable. Todos los derechos reservados.</p>
            <p>Esta página es informativa y tiene como objetivo crear conciencia sobre el acceso al agua potable.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>