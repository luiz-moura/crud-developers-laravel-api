<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'cpf', 'birth_date', 'gender', 'phone', 'email'];
}
