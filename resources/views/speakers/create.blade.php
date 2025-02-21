<!-- resources/views/speakers/create.blade.php -->

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
        margin-top: 20px;
        color: #333;
    }

    /* Estilos del formulario */
    form {
        width: 50%;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    form div {
        margin-bottom: 15px;
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #333;
    }

    form input[type="text"],
    form textarea,
    form input[type="file"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    form textarea {
        resize: vertical;
        min-height: 100px;
    }

    form button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #0056b3;
    }

    /* Estilo para los enlaces */
    a {
        display: block;
        text-align: center;
        margin-top: 15px;
        font-size: 16px;
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

</style>

<h1>Crear Nuevo Ponente</h1>
<form action="{{ route('speakers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="biography">Biografía:</label>
        <textarea name="biography"></textarea>
    </div>
    <div>
        <label for="specialty">Especialidad:</label>
        <input type="text" name="specialty">
    </div>
    <div>
        <label for="image">Imagen:</label>
        <input type="file" name="image">
    </div>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('speakers.index') }}">Volver a la lista de ponentes</a>
