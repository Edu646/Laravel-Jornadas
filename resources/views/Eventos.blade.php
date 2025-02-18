<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada de Videojuegos - Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
/* Estilos generales */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', 'Segoe UI', sans-serif;
    line-height: 1.6;
    color: #2c3e50;
    background-color: #f7f9fc;
}

/* Barra de navegación */
.navbar {
    background-color: #2c3e50;
    padding: 15px 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.navbar-brand {
    font-weight: 700;
    font-size: 1.5rem;
    color: #f7f9fc !important;
}

.navbar-nav .nav-link {
    color: #ecf0f1 !important;
    font-weight: 500;
    margin: 0 10px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #3498db !important;
}

.navbar-nav .nav-item.active .nav-link {
    color: #3498db !important;
}

/* Encabezado simple */
.header {
    background-color: #2c3e50;
    color: #f7f9fc;
    text-align: center;
    padding: 50px 20px;
}

.header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

/* Contenedor principal */
.container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
}

/* Tarjetas de eventos */
.event-card {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    margin-bottom: 25px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: flex;
    flex-direction: column;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(52, 152, 219, 0.15);
}

.event-image {
    height: 200px;
    background-size: cover;
    background-position: center;
    border-bottom: 3px solid #3498db;
}

.event-body {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.event-date {
    display: inline-block;
    background-color: #3498db;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 0.85rem;
    margin-bottom: 12px;
}

.event-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #2c3e50;
}

.event-info {
    margin-bottom: 15px;
    color: #7f8c8d;
    font-size: 0.9rem;
}

.event-info i {
    color: #3498db;
    margin-right: 8px;
    width: 15px;
    text-align: center;
}

.event-description {
    color: #5d6d7e;
    margin-bottom: 20px;
    font-size: 0.95rem;
    flex-grow: 1;
}

.event-footer {
    margin-top: auto;
}

.btn-details {
    background-color: transparent;
    border: 2px solid #3498db;
    color: #3498db;
    padding: 8px 20px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
}

.btn-details:hover {
    background-color: #3498db;
    color: white;
}

/* Paginación */
.pagination {
    justify-content: center;
    margin-top: 40px;
}

.pagination .page-item .page-link {
    color: #3498db;
    padding: 8px 16px;
    border: 1px solid #e1e5eb;
    margin: 0 3px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.pagination .page-item.active .page-link {
    background-color: #3498db;
    border-color: #3498db;
    color: white;
}

.pagination .page-item .page-link:hover {
    background-color: #f7f9fc;
    color: #2980b9;
}

/* Footer simple */
footer {
    background-color: #2c3e50;
    color: #ecf0f1;
    text-align: center;
    padding: 20px;
    font-size: 0.9rem;
}

footer a {
    color: #3498db;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

/* Modo oscuro opcional */
@media (prefers-color-scheme: dark) {
    body {
        background-color: #1a202c;
        color: #e2e8f0;
    }
    
    .event-card {
        background-color: #2d3748;
    }
    
    .event-title {
        color: #e2e8f0;
    }
    
    .event-description {
        color: #cbd5e0;
    }
    
    .event-info {
        color: #a0aec0;
    }
    
    .pagination .page-item .page-link {
        background-color: #2d3748;
        border-color: #4a5568;
        color: #3498db;
    }
    
    .pagination .page-item .page-link:hover {
        background-color: #4a5568;
    }
}

/* Responsive */
@media (max-width: 768px) {
    .header h1 {
        font-size: 2rem;
    }
    
    .event-title {
        font-size: 1.3rem;
    }
    
    .event-description {
        font-size: 0.9rem;
    }
}
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html">Jornada de Videojuegos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.blade">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="eventos.html">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ponentes.html">Ponentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Encabezado simple -->
    <header class="header">
        <h1>Eventos Programados</h1>
    </header>

    <!-- Listado de eventos -->
    <div class="container">
        <div class="row">
            <!-- Evento 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Conferencia+Principal')"></div>
                    <div class="event-body">
                        <span class="event-date">18 de marzo, 2025 • 10:00</span>
                        <h3 class="event-title">El Futuro de los Videojuegos en Latinoamérica</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Auditorio Principal</p>
                            <p><i class="fas fa-user"></i> Carlos Rodríguez</p>
                            <p><i class="fas fa-tag"></i> Conferencia, Industria</p>
                        </div>
                        <p class="event-description">Una mirada profunda a las tendencias emergentes de la industria de videojuegos en Latinoamérica, con énfasis en oportunidades para desarrolladores independientes.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Taller+de+Unity')"></div>
                    <div class="event-body">
                        <span class="event-date">18 de marzo, 2025 • 14:00</span>
                        <h3 class="event-title">Taller: Desarrollo de Videojuegos con Unity</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Sala de Talleres 2</p>
                            <p><i class="fas fa-user"></i> María López</p>
                            <p><i class="fas fa-tag"></i> Taller, Programación</p>
                        </div>
                        <p class="event-description">Aprende los fundamentos de Unity y crea tu primer videojuego en 2D. Taller práctico para principiantes con conocimientos básicos de programación.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Panel+Narrativa')"></div>
                    <div class="event-body">
                        <span class="event-date">19 de marzo, 2025 • 11:30</span>
                        <h3 class="event-title">Panel: Narrativa en Videojuegos</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Salón B</p>
                            <p><i class="fas fa-users"></i> Varios ponentes</p>
                            <p><i class="fas fa-tag"></i> Panel, Diseño</p>
                        </div>
                        <p class="event-description">Discusión con guionistas y diseñadores de narrativa sobre cómo crear historias impactantes en videojuegos y los desafíos específicos del medio interactivo.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Masterclass+Arte')"></div>
                    <div class="event-body">
                        <span class="event-date">19 de marzo, 2025 • 16:00</span>
                        <h3 class="event-title">Masterclass: Arte Conceptual para Videojuegos</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Aula Magna</p>
                            <p><i class="fas fa-user"></i> Alejandro Gómez</p>
                            <p><i class="fas fa-tag"></i> Masterclass, Arte</p>
                        </div>
                        <p class="event-description">Descubre las técnicas y el proceso creativo detrás del arte conceptual en videojuegos, desde la ideación hasta la implementación final.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Networking')"></div>
                    <div class="event-body">
                        <span class="event-date">20 de marzo, 2025 • 18:30</span>
                        <h3 class="event-title">Networking: Conecta con la Industria</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Terraza Principal</p>
                            <p><i class="fas fa-users"></i> Todos los asistentes</p>
                            <p><i class="fas fa-tag"></i> Networking, Social</p>
                        </div>
                        <p class="event-description">Oportunidad única para conectar con profesionales, estudios y empresas de la industria de videojuegos en un ambiente relajado.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card h-100">
                    <div class="event-image" style="background-image: url('https://via.placeholder.com/800x400?text=Game+Jam')"></div>
                    <div class="event-body">
                        <span class="event-date">20 de marzo, 2025 • 14:00</span>
                        <h3 class="event-title">Game Jam: Desarrollo en 48 horas</h3>
                        <div class="event-info">
                            <p><i class="fas fa-map-marker-alt"></i> Pabellón Principal</p>
                            <p><i class="fas fa-users"></i> Equipos participantes</p>
                            <p><i class="fas fa-tag"></i> Competencia, Desarrollo</p>
                        </div>
                        <p class="event-description">Compite en equipos para desarrollar un videojuego completo en 48 horas basado en un tema sorpresa. Premios para los mejores proyectos.</p>
                        <div class="event-footer">
                            <a href="#" class="btn-details">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

    <!-- Footer simple -->
    <footer>
        <p>&copy; 2025 Jornada de Videojuegos | <a href="contacto.html">Contacto</a> | <a href="privacy.html">Política de privacidad</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>