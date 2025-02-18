<?php

namespace App\Repositories;

use App\Models\Event;

class EventRepository
{
    public function getAll()
    {
        return Event::all(); // Obtener todos los eventos
    }

    public function create(array $data)
    {
        return Event::create($data); // Guardar el evento en la BD
    }
}
