@extends ('layouts.admin')

@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Evaluacion: {{$evaluacion->nombre_eval}} eliminada</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $e)
							<li>{{$e}}</li>
						@endforeach
					</ul>
				</div>
			@endif

			{!!Form::model($evaluacion,['method'=>'DELETE', 'route'=>['evaluacion.destroy', $evaluacion->idevaluacion]])!!}
			{{Form::token()}}
			<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					
			</div>
				
			

			{!!Form::close()!!}
		</div>
	</div>
@endsection