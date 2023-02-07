<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matricula extends Model
{
    use HasFactory;
    protected $fillable = ['nombre estudiante', 'cantidad credito', 'nombre docente', 'asignatura prerequisito', 'cantidad horas trabajo', 'cantidad horas autonomo'];
}
