<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Lista de Eventos</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Crear Nuevo Evento</a> 
    <a href="{{ route('dashboard') }}" class="btn btn-primary mb-3">inicio</a> 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4">
                <div class="card mb-4">
                    @if($event->image_url)
                        <img src="{{ $event->image_url }}" class="card-img-top" alt="Imagen del evento">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text"><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y H:i') }}</p>
                        <p class="card-text"><strong>Ubicación:</strong> {{ $event->location }}</p>
                        <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($events->isEmpty())
        <p class="text-center">No hay eventos disponibles.</p>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
