


    <div class="container">
        <h1>Agregar Ponente al Evento</h1>

        <form action="{{ route('speakers.attachToEvent', $event) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="speaker_id">Seleccionar Ponente:</label>
                <select name="speaker_id" id="speaker_id" class="form-control" required>
                    @foreach($speakers as $speaker)
                        <option value="{{ $speaker->id }}">{{ $speaker->name }}</option>
                    @endforeach
                </select>
                @error('speaker_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Agregar Ponente</button>
        </form>
    </div>

