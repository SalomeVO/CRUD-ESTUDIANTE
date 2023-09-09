<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    use HasFactory;

    public $table='estudiante';
    public $timestamps=false;
    protected $fillable =[
        'carnet', 'nombre','apellido','carrrera','semestre',
    ];

    protected $primaryKey = 'carnet';
}
