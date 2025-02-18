<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    // Mostrar todos los eventos
    public function index()
{
    $events = $this->eventRepository->getAll(); // Obtener todos los eventos desde el repositorio
    return view('events.index', compact('events')); // Pasar la variable a la vista
}

    // Mostrar el formulario para crear un evento
    public function create()
    {
        return view('events.create');
    }

    // Guardar un nuevo evento en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        $this->eventRepository->create($request->only('title', 'date', 'location', 'description', 'image_url'));

        return redirect()->route('events.index')->with('success', 'Evento creado con éxito.');
    }
}
