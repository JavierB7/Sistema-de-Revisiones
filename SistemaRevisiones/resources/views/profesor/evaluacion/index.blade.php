@extends ('layouts.admin')

@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
			<h3>Listado de evaluaciones <a href="profesor/evaluacion/create"><button class ="btn btn-primary">Nuevo</button></a></h3> 
    	</div>
	</div>

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
        	<div class="table-responsive">
            	<table class="table table-striped table-bordered table-condensed table-hover">
               	<thead class="thead-dark">
               		<th class="text-center">Nombre</th>
               		<th class="text-center">Fecha</th>
               		<th class="text-center">Puntaje</th>
               		<th class="text-center">Numero de Parcial</th>
               		<th class="text-center">Activa</th>
               		<th class="text-center">Opciones</th>
               	</thead>
    			@foreach($evaluaciones as $ev)                 	
               	<tr class="text-center">
               		<td class="text-center">{{ $ev->nombre_eval }}</td>
               		<td class="text-center">{{ $ev->fecha_eval }}</td>
               		<td class="text-center">{{ $ev->cant_puntos }}</td>
               		<td class="text-center">{{ $ev->num_parcial }}</td>

                  @if($ev->activa=='1')
                      <td class="text-center">Si</td>
                    @else
                      <td class="text-center">No</td>
                    @endif

               		<td class="text-center">
                    
               			<a href="{{URL::action('EvaluacionController@edit',$ev->idevaluacion)}}"><button class ="btn btn-primary">Editar</button></a>
                    <a href="{{URL::action('EvaluacionController@listarEstudiantes',['dev'=>$ev->num_parcial] )}}"><button class ="btn btn-primary">Estudiantes</button></a>
               			<a href="{{URL::action('EvaluacionController@destroy',$ev->idevaluacion)}}" ><button class ="btn btn-danger">Eliminar</button></a>
               		</td>
               	</tr>
               	@endforeach

            	</table>
        	</div>
        	

    	</div>
    </div>


@endsection