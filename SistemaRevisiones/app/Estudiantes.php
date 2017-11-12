<?php

namespace SistemaRevisiones;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'estudiantes'; //Haciendo referencia a la tabla estudiantes

    protected $primaryKey = "idestudiantes";

    public $timestamps = false;

    protected $fillable =[
    	'cedula',
    	'nombre',
    	'apellido',
    	'comentario',
    	'enlace',
    	'num_parcial',
    	'rev_finalizada'

    ];

    protected $guarded = [
    ];
}
