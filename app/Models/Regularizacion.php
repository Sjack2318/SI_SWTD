<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regularizacion extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ruta', 'mime'];
}
