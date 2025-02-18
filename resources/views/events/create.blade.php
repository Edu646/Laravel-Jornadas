<div class="container">
    <h1>Crear Evento</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Fecha</label>
            <input type="datetime-local" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Imagen (URL opcional)</label>
            <input type="url" class="form-control" id="image_url" name="image_url">
        </div>
        <button type="submit" class="btn btn-primary">Crear Evento</button>
    </form>
</div>
