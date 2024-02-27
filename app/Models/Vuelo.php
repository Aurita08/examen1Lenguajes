<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    public $timestamps=false; 
    use HasFactory;
    protected $fillable = ['numero_vuelo', 'origen', 'destino', 'numeros_asientos', 'fechaSalida'];
}
