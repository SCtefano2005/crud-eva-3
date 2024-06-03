<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $fillable = ['nombre', 'paterno', 'materno', 'fecha_nacimiento'];
}
