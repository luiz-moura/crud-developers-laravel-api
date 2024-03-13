<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desenvolvedor extends Model
{
    use HasFactory;

    protected $table = 'desenvolvedores';

    protected $fillable = [
        'nivel_id',
        'nome',
        'sexo',
        'data_nascimento',
        'hobby'
    ];

    protected $casts = [
        'nivel_id' => 'int',
    ];
}
