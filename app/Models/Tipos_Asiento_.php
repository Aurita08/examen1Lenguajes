<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_Asiento_ extends Model
{
    use HasFactory;
    public $timestamps=false; 
    protected $fillable = ['tipos_asientos', 'descripcion', 'precio', 'estado'];

}

