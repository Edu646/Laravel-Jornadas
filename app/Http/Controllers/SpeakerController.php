<?php
// app/Http/Controllers/SpeakerController.php
namespace App\Http\Controllers;

use App\Repositories\SpeakerRepository;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    protected $speakerRepo;

    public function __construct(SpeakerRepository $speakerRepo)
    {
        $this->speakerRepo = $speakerRepo;
    }

    // Mostrar todos los ponentes
    public function index()
    {
        $speakers = $this->speakerRepo->all();
        return view('speakers.index', compact('speakers'));
    }

    // Mostrar el formulario para crear un nuevo ponente
    public function create()
    {
        return view('speakers.create');
    }

    // Guardar un nuevo ponente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'biography' => 'nullable|string',
            'specialty' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $data = $request->only(['name', 'biography', 'specialty', 'image']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('speakers_images');
        }

        $this->speakerRepo->create($data);

        return redirect()->route('speakers.index');
    }

    // Mostrar el formulario para editar un ponente
    public function edit($id)
    {
        $speaker = $this->speakerRepo->find($id);
        return view('speakers.edit', compact('speaker'));
    }

    // Actualizar un ponente
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'biography' => 'nullable|string',
            'specialty' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $data = $request->only(['name', 'biography', 'specialty', 'image']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image');
        }

        $this->speakerRepo->update($id, $data);

        return redirect()->route('speakers.index');
    }

    // Eliminar un ponente
    public function destroy($id)
    {
        $this->speakerRepo->delete($id);
        return redirect()->route('speakers.index');
    }
}
