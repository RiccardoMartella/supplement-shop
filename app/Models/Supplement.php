<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    use HasFactory;


    protected $fillable = [
        'cover_image',
        'nome',
        'descrizione',
        'prezzo'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
