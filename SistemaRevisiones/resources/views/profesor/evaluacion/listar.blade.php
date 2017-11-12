@extends ('layouts.admin')

@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
			<h3>Listado de Estudiantes</h3> 
    	</div>
	</div>

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"> 
        	<div class="table-responsive">
            	<table class="table table-striped table-bordered table-condensed table-condensed table-hover">
               	<thead>
               		<th class="text-center">Cedula</th>
               		<th class="text-center">Nombre</th>
               		<th class="text-center">Apellido</th>
               		<th class="text-center">Comentario</th>
               		<th class="text-center">Enlace</th>
               		<th class="text-center">Numero</th>
               		<th class="text-center">Finalizada</th>
               		<th class="text-center">Opciones</th>
               	</thead>
				<?php $num = Request::get('dev') ?>
				@foreach($estudiantes as $ed)  
				@if($ed->num_parcial == $num)               	
	               	<tr>
	               		<td class="text-center">{{ $ed->cedula }}</td>
	               		<td class="text-center">{{ $ed->nombre }}</td>
	                 	<td class="text-center">{{ $ed->apellido }}</td>
	                 	<td class="text-center">{{ $ed->comentario }}</td>
	                 	<td class="text-center">{{ $ed->enlace }}</td>
	                 	<td class="text-center">{{ $ed->num_parcial }}</td>
	                 	@if($ed->rev_finalizada=='1')
	                 		<td class="text-center">Si</td>
	                 	@else
	                 		<td class="text-center">No</td>
	                 	@endif
	                 	<td class="text-center">
	                 		<a href="{{URL::action('EstudiantesController@edit',$ed->idestudiantes)}}"><button class ="btn btn-primary">Editar</button></a>
	                 	</td>

	               			
	               	</tr>
	            @endif
               	@endforeach
            	</table>
           
        	</div>
        	

    	</div>
    </div>


@endsection