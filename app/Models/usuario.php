<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\usuario;

class usuario extends Model
{
    use HasFactory;
    protected $table = "usuario";
    protected $primaryKey = "id";
    protected $fillable = ["nombres","apellidos","tipoId","identificacion","telefono","emailUser","profesion","rol"];
}
