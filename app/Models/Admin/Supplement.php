<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'descrizione',
        'prezzo',
    ];

    // public function type()
    // {
    //     return $this->belongsTo(Type::class);
    // }
}
