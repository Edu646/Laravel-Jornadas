<?php
// app/Models/Speaker.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'biography', 'specialty', 'image',
    ];

    // Relación Muchos a Muchos con los eventos
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_speaker');
    }
}
