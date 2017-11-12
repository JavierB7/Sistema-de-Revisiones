<?php

namespace SistemaRevisiones\Http\Controllers;

use Illuminate\Http\Request;
use SistemaRevisiones\Estudiantes;
use SistemaRevisiones\Evaluacion;
use Illuminate\Support\Facades\Redirect;
use SistemaRevisiones\Http\Requests\EstudiantesFormRequest;
use DB;

class EstudiantesController extends Controller
{
     public function __construct(){

    }

    public function index(Request $request){
    	if($request){

    		$evaluaciones= DB::table('evaluacion')->orderBy('idevaluacion')->where('activa','=','1')->get();
    		return view('index', ['evaluaciones'=>$evaluaciones]);
    	}
    }

    public function create(){
    	return view('estudiante.create');
    }
    
    public function store(EstudiantesFormRequest $request){
    	$estudiantes = new Estudiantes;
    	$estudiantes->cedula = $request->get('cedula');
    	$estudiantes->nombre = $request->get('nombre');
    	$estudiantes->apellido = $request->get('apellido');
    	$estudiantes->comentario = $request->get('comentario');
    	$estudiantes->enlace = $request->get('enlace');
    	$estudiantes->num_parcial = $request->get('num_parcial');
    	$estudiantes->rev_finalizada = $request->get('rev_finalizada'); 
    	$estudiantes->save();
    	return Redirect::to("index");
    }
    
    public function show($id){
    	return view('estudiante.show', ["estudiantes"=>Estudiantes::findOrFail($id)]);
    }
    
    public function edit($id){
    	return view('estudiante.edit', ["estudiante"=>Estudiantes::findOrFail($id)]);
    } 

    public function update(EstudiantesFormRequest $request, $id){
    	$estudiante = Estudiantes::findOrFail($id);
    	$estudiante->cedula = $request->get('cedula');
    	$estudiante->nombre = $request->get('nombre');
    	$estudiante->apellido = $request->get('apellido');
    	$estudiante->comentario = $request->get('comentario');
    	$estudiante->enlace = $request->get('enlace');
    	$estudiante->num_parcial = $request->get('num_parcial');
    	$estudiante->rev_finalizada = $request->get('rev_finalizada');
    	$estudiante->update();
    	return Redirect::to("home");
    }  
    public function destroy($id){
    	$estudiantes = Estudiantes::findOrFail($id);
    	$estudiantes->rev_finalizada = '1'; 
    	$estudiantes->update();
    	return Redirect::to("estudiante/estudiantes");
    }
}
