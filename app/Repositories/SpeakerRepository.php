<?php
// app/Repositories/SpeakerRepository.php
namespace App\Repositories;

use App\Models\Speaker;

class SpeakerRepository
{
    // Obtener todos los ponentes
    public function all()
    {
        return Speaker::all();
    }

    // Crear un nuevo ponente
    public function create(array $data)
    {
        return Speaker::create($data);
    }

    // Encontrar un ponente por su ID
    public function find($id)
    {
        return Speaker::findOrFail($id);
    }

    // Actualizar un ponente
    public function update($id, array $data)
    {
        $speaker = $this->find($id);
        $speaker->update($data);
        return $speaker;
    }

    // Eliminar un ponente
    public function delete($id)
    {
        $speaker = $this->find($id);
        $speaker->delete();
    }
}
