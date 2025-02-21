<!-- resources/views/speakers/edit.blade.php -->



    <h1>Editar Ponente: {{ $speaker->name }}</h1>
    <form action="{{ route('speakers.update', $speaker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="{{ $speaker->name }}" required>
        </div>
        <div>
            <label for="biography">Biografía:</label>
            <textarea name="biography">{{ $speaker->biography }}</textarea>
        </div>
        <div>
            <label for="specialty">Especialidad:</label>
            <input type="text" name="specialty" value="{{ $speaker->specialty }}">
        </div>
        <div>
            <label for="image">Imagen:</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Actualizar</button>
    </form>

