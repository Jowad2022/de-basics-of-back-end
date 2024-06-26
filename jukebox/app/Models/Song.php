<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'artist']; // Aanpassen aan jouw behoeften

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
