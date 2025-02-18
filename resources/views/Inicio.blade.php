<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada de Videojuegos - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       /* Reset de márgenes y relleno predeterminado */
/* Reset de márgenes y relleno predeterminado */
/* Reset de márgenes y relleno predeterminado */
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

/* Mejora en la sección principal */
.hero-section {
    background: linear-gradient(rgba(26, 32, 44, 0.7), rgba(26, 32, 44, 0.7)),
                url('https://via.placeholder.com/1920x600?text=Jornada+de+Videojuegos');
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    color: #f7f9fc;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 20px;
}

/* Títulos principales y descripción */
.hero-section h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    animation: fadeIn 1.5s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.hero-section p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    font-weight: 300;
    opacity: 0.95;
    max-width: 700px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    animation: fadeInUp 1.8s ease-out;
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Botones de Registro e Iniciar sesión */
.hero-section .btn {
    font-size: 1rem;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    margin: 0 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 2s ease-out;
}

.hero-section .btn-primary {
    background-color: #3498db;
    border: none;
}

.hero-section .btn-primary:hover {
    background-color: #2980b9;
    transform: translateY(-3px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.hero-section .btn-secondary {
    background-color: rgba(255, 255, 255, 0.9);
    color: #2c3e50;
    border: none;
}

.hero-section .btn-secondary:hover {
    background-color: #ffffff;
    color: #1a202c;
    transform: translateY(-3px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Sección de Programación */
.container {
    max-width: 1200px;
    margin: 80px auto;
    padding: 0 20px;
}

h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 25px;
    text-align: center;
    position: relative;
}

h2:after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: #3498db;
    margin: 15px auto;
    border-radius: 2px;
}

p {
    font-size: 1.2rem;
    margin-bottom: 40px;
    text-align: center;
    color: #5d6d7e;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

/* Cards de Programación */
.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    margin-bottom: 30px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    background-color: #fff;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(52, 152, 219, 0.2);
}

.card-img-top {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.8s ease;
}

.card:hover .card-img-top {
    transform: scale(1.05);
}

.card-body {
    padding: 25px;
    background-color: #fff;
}

.card-title {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #2c3e50;
}

.card-text {
    font-size: 1.1rem;
    color: #5d6d7e;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* Diseño de columnas para las cards */
.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
}

/* Aseguramos contraste adecuado y no dañamos la vista */
:root {
    color-scheme: light;
}

/* Media queries para diseño responsivo */
@media (max-width: 992px) {
    .hero-section h1 {
        font-size: 3rem;
    }
    
    .hero-section p {
        font-size: 1.3rem;
    }
}

@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }
    
    .hero-section p {
        font-size: 1.2rem;
    }
    
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .card {
        margin-bottom: 25px;
    }
    
    h2 {
        font-size: 2rem;
    }
    
    p {
        font-size: 1.1rem;
    }
}

@media (max-width: 576px) {
    .hero-section h1 {
        font-size: 2rem;
    }
    
    .hero-section p {
        font-size: 1.1rem;
    }
    
    .hero-section .btn {
        display: block;
        width: 100%;
        margin: 10px 0;
    }
    
    .hero-section .d-flex {
        flex-direction: column;
        width: 80%;
    }

    .container {
        margin: 50px auto;
    }
}

/* Agregamos un modo oscuro opcional activable por preferencias del sistema */
@media (prefers-color-scheme: dark) {
    body {
        background-color: #1a202c;
        color: #e2e8f0;
    }
    
    .card {
        background-color: #2d3748;
    }
    
    .card-body {
        background-color: #2d3748;
    }
    
    .card-title {
        color: #e2e8f0;
    }
    
    .card-text {
        color: #cbd5e0;
    }
    
    h2 {
        color: #e2e8f0;
    }
    
    p {
        color: #cbd5e0;
    }
    
    .hero-section .btn-secondary {
        background-color: rgba(45, 55, 72, 0.9);
        color: #e2e8f0;
    }
    
    .hero-section .btn-secondary:hover {
        background-color: #4a5568;
        color: #ffffff;
    }
}

    </style>
</head>
<body>
    <div class="hero-section">
        <h1>Bienvenidos a la Jornada de Videojuegos</h1>
        <p>Conferencias y Talleres sobre el mundo de los videojuegos</p>
        <div class="d-flex">
            <!-- Botón de registro -->
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-3">Registrar</a>
            @endif
            <!-- Botón de inicio de sesión -->
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Iniciar sesión</a>
            @endif
        </div>
    </div>

    <div class="container mt-5">
        <h2>Programación</h2>
        <p>Explora nuestras conferencias y talleres:</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x250?text=Conferencia" class="card-img-top" alt="Conferencia">
                    <div class="card-body">
                        <h5 class="card-title">Conferencia: El Futuro de los Videojuegos</h5>
                        <p class="card-text">Únete a nuestra conferencia sobre las tendencias y avances en la industria de los videojuegos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x250?text=Taller" class="card-img-top" alt="Taller">
                    <div class="card-body">
                        <h5 class="card-title">Taller: Desarrollo de Videojuegos</h5>
                        <p class="card-text">Participa en un taller práctico sobre cómo crear tu propio videojuego desde cero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
