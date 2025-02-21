<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'location', 'description', 'image_url'];



    public function speaker()
{
    return $this->belongsTo(Speaker::class);
}

}



