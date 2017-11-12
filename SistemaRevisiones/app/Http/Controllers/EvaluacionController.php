<?php

namespace SistemaRevisiones\Http\Controllers;

use Illuminate\Http\Request;
use SistemaRevisiones\Evaluacion; //El modelo
use SistemaRevisiones\Estudiantes; //El modelo
use Illuminate\Support\Facades\Redirect;
use SistemaRevisiones\Http\Requests\EvaluacionFormRequest; //El formrequest
use DB;

class EvaluacionController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
    	if($request){
    		//$query=trim($request->get('searchText'));
    		$evaluaciones= DB::table('evaluacion')->orderBy('idevaluacion')->get();
    		//return view('profesor.evaluacion.index', ['evaluaciones'=>$evaluaciones,'searchText'=>$query]);
    		return view('profesor.evaluacion.index', ["evaluaciones"=>$evaluaciones]);
    	}
    }

    public function create(){
    	return view('profesor.evaluacion.create');
    }
    
    public function store(EvaluacionFormRequest $request){
    	$evaluacion = new Evaluacion;
    	$evaluacion->nombre_eval = $request->get('nombre_eval');
    	$evaluacion->fecha_eval = $request->get('fecha_eval');
    	$evaluacion->cant_puntos = $request->get('cant_puntos');
    	$evaluacion->num_parcial = $request->get('num_parcial');
    	$evaluacion->activa = '1'; //Para decirle activa de una
    	$evaluacion->save();
    	return Redirect::to("home");
    }
    
    public function show($id){
    	//return view('profesor.evaluacion.show', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    	return view('profesor.evaluacion.destroy', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    }
    
    public function edit($id){
    	return view('profesor.evaluacion.edit', ["evaluacion"=>Evaluacion::findOrFail($id)]);
    } 

    public function update(EvaluacionFormRequest $request, $id){
    	$evaluacion = Evaluacion::findOrFail($id);
    	$evaluacion->nombre_eval = $request->get('nombre_eval');
    	$evaluacion->fecha_eval = $request->get('fecha_eval');
    	$evaluacion->cant_puntos = $request->get('cant_puntos');
    	$evaluacion->num_parcial = $request->get('num_parcial');
    	$evaluacion->activa = $request->get('activa');
    	$evaluacion->update();
    	return Redirect::to("home");
    }  


    public function destroy($id){
    	$evaluacion = Evaluacion::findOrFail($id);
    	$evaluacion->delete();
    	return Redirect::to("home");
    }

    public function listarEstudiantes(){
        // $evaluacion = Evaluacion::findOrFail($id);
        //$evaluacion = $id;
        //$num_parcial = $evaluacion->num_parcial;

        //$estudiantes= DB::table('estudiantes')->where('num_parcial','=', $num_parcial)->orderBy('idestudiantes')->get();
        $estudiantes= DB::table('estudiantes')->orderBy('idestudiantes')->get();
        return view('profesor.evaluacion.listar', ["estudiantes"=>$estudiantes]);
    }
}
