@extends ('layouts.admin')

@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Evaluacion: {{$evaluacion->nombre_eval}}</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $e)
							<li>{{$e}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			{!!Form::model($evaluacion,['method'=>'PATCH', 'route'=>['evaluacion.update', $evaluacion->idevaluacion]])!!}
			{{Form::token()}}
			
				<div class="form-group">
					<label for='nombre_eval'>Nombre</label>
					<input type="text" name="nombre_eval" class="form-control" value="{{$evaluacion->nombre_eval}}" placeholder="Nombre...">
				</div>
				<div class="form-group">
					<label for='fecha_eval'>Fecha</label>
					<input type="date" name="fecha_eval" class="form-control" value="{{$evaluacion->fecha_eval}}" placeholder="DD/MM/AA">
				</div>
				<div class="form-group">
					<label for='cant_puntos'>Puntaje</label>
					<input type="number" name="cant_puntos" class="form-control" value="{{$evaluacion->cant_puntos}}" placeholder="7">
				</div>
				<div class="form-group">
					<label for='num_parcial'>Numero</label>
					<input type="number" name="num_parcial" class="form-control"  value="{{$evaluacion->num_parcial}}" placeholder="3" min="1" max="5">
				</div>
				<div class="form-group">
					<div class="radio">
						<label><input type="radio" name="activa" value="1">Activa</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="activa"  value="0">Desactiva</label>
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			{!!Form::close()!!}

		</div>
	</div>
@endsection