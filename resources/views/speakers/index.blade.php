<!-- resources/views/speakers/index.blade.php -->

<style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin-top: 30px;
        color: #333;
        font-size: 2rem;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    a:hover {
        text-decoration: underline;
    }

    .container {
        width: 90%;
        margin: 0 auto;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 8px 15px;
        text-align: center;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 15px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Estilos para la tabla */
    table {
        width: 100%;
        margin: 30px 0;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    table th, table td {
        padding: 15px;
        text-align: center;
        border: 1px solid #ddd;
    }

    table th {
        background-color: #007bff;
        color: white;
        font-size: 1.1rem;
    }

    table td {
        font-size: 1rem;
        color: #555;
    }

    /* Estilos para las imágenes de los ponentes */
    .speaker-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    /* Estilos para las acciones */
    .actions {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .actions button {
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        border: none;
    }

    .actions .edit-btn {
        background-color: #28a745;
        color: white;
    }

    .actions .edit-btn:hover {
        background-color: #218838;
    }

    .actions .delete-btn {
        background-color: #dc3545;
        color: white;
    }

    .actions .delete-btn:hover {
        background-color: #c82333;
    }

    /* Mensajes de alerta */
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        background-color: #4caf50;
        color: white;
        border-radius: 5px;
        font-size: 1rem;
        text-align: center;
    }

    .alert-danger {
        background-color: #dc3545;
    }

    /* Estilos para cuando no hay ponentes */
    .no-speakers {
        text-align: center;
        font-size: 1.2rem;
        color: #888;
    }
</style>

<div class="container">
    <h1>Lista de Ponentes</h1>
    <a href="{{ route('speakers.create') }}" class="btn-primary">Agregar Ponente</a>
    <a href="{{ route('dashboard') }}" class="btn-primary">Ir al Dashboard</a> 

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @if($speakers->isEmpty())
        <p class="no-speakers">No hay ponentes disponibles.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($speakers as $speaker)
                    <tr>
                        <td>
                            {!! $speaker->image ? '<img src="'.asset('storage/'.$speaker->image).'" class="speaker-image">' : '' !!}
                        </td>
                        <td>{{ $speaker->name }}</td>
                        <td>{{ $speaker->specialty }}</td>
                        <td class="actions">
                            <!-- Botón Editar -->
                            <a href="{{ route('speakers.edit', $speaker->id) }}">
                                <button class="edit-btn">Editar</button>
                            </a>

                            <!-- Botón Eliminar -->
                            <form action="{{ route('speakers.destroy', $speaker->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
