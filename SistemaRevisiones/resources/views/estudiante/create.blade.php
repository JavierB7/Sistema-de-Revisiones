<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->

  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
</head>
<body style="background-color: #2E3740;">
	
			
			@if(count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $e)
							<li>{{$e}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<?php $num = Request::get('es3') ?>
			<?php $est = Request::get('es2') ?>
			
			<table>
				
			
			
			  
			{!!Form::open(array('url' => 'index', 'method'=> 'POST', 'autocomplete'=>'off'))!!}
			{{Form::token()}} 
			@for($i=0; $i<$est; $i++)
			<br>
<td>
	
    <div class="row" style=" width: 100%;  height: 50%;" >
        <div class="col-md-12">
            <div class="well well-sm" style="background-color: lightgray";>

                    <fieldset>
                        <legend class="text-center header">Nuevo Estudiante</legend>
				
			
				<div class="form-group">
					<label class="control-label" for='cedula'>Cedula</label>
					<input type="number" name="cedula" class="form-control" placeholder="Cedula...">
				</div>
				<div class="form-group">
					<label class="control-label" for='nombre'>Nombre</label>
					<input type="text" name="nombre" class="form-control" placeholder="Nombre...">
				</div>
				<div class="form-group">
					<label class="control-label" for='apellido'>Apellido</label>
					<input type="text" name="apellido" class="form-control" placeholder="Apellido...">
				</div>
				<div class="form-group">
					<label class="control-label" for="comentario">Comentario</label>
					<textarea class="form-control" name="comentario" rows="5" id="comment"></textarea>
				</div>
				<div class="form-group">
					<label class="control-label" for='enlace'>Enlace</label>
					<input type="text" name="enlace" class="form-control" placeholder="Comentario...">
				</div>
				
				<div class="form-group">
					<label class="control-label" for='num_parcial'>Numero</label>
					<input type="number" name="num_parcial" class="form-control" value="{{$num}}" placeholder="Numero..." min="1" max="5">
				</div>
				<div class="form-group">
					<div class="radio">
						<label><input type="radio" name="rev_finalizada" value="0">Por revisar</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="rev_finalizada"  value="1">Revisado</label>
					</div>
				</div>

				
</fieldset>	

 
		</div>
	</div>


</div>

    	</td>
    	
			
	@endfor
	<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
      {!!Form::close()!!}
      
    

    </table>

</body>

<html>