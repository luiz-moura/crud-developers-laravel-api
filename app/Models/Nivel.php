<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'niveis';

    protected $fillable = ['id', 'nome'];

    /**
     * Get all of the desenvolvedores for the Nivel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desenvolvedores(): HasMany
    {
        return $this->hasMany(Desenvolvedor::class, 'nivel_id', 'id');
    }
}
