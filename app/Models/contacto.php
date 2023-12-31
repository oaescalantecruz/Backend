<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\contacto;

class contacto extends Model
{
    use HasFactory;
    protected $table = "contacto";
    protected $primaryKey = "id";
    protected $fillable = ["nombresApellidos","email","telefono","asunto","mensaje"];
}
