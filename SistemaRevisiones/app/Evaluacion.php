<?php

namespace SistemaRevisiones;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluacion'; //Haciendo referencia a la tabla evaluacion

    protected $primaryKey = "idevaluacion";

    public $timestamps = false;

    protected $fillable =[
    	'nombre_eval',
    	'fecha_eval',
    	'cant_puntos',
    	'num_parcial',
    	'activa'

    ];

    protected $guarded = [
    ];
}
