<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Sistema de Revisiones</title>
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
    <div class="container">


          <header  style="background-color: black; color: white;" class="main-header" id="main-header">
  <div class="header-chunk pen-title-area">
  
    <div class="pen-title-text">
      <h1 id="pen-title" class="pen-title text-center">
           Sistema de Registro de Revisiones
      </h1>

    </div>
  </div>
</header>
      <div class="row">
              
        <div class="col-md-12">
            <div class="well well-sm" style="background-color: lightgray";>
                
                    @if (Route::has('login'))
                        <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <!--<a href="{{ route('register') }}">Register</a>-->
                        @endauth
                        </div>
                    @endif
              
                
                    <h3 >Listado de Evaluaciones</h3> 
                
           
            <br>
            
                 
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead class="thead thead-dark">
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Puntaje</th>
                                <th class="text-center">Numero de Parcial</th>
                                <th class="text-center">Estudiantes</th>
                                <th class="text-center">Opciones</th>
                            </thead>
                            @foreach($evaluaciones as $ev)                  
                                <tr>
                                    <td class="text-center">{{ $ev->nombre_eval }}</td>
                                    <td class="text-center">{{ $ev->fecha_eval }}</td>
                                    <td class="text-center">{{ $ev->cant_puntos }}</td>
                                    <td class="text-center">{{ $ev->num_parcial }}</td>
                                    <form method="" action="estudiante/create">
                                    <td class="text-center">
                                    <div class="form-group">
                                      <input type="number" name="es2" class="form-control" min="1" max="5">
                                      <input type="hidden" name="es3" value="<?= $ev->num_parcial?>">
                                    </div>
                                    </td>
                                  <td class="text-center">
                                    <a href="{{URL::action('EstudiantesController@create',['dev'=>$ev->num_parcial])}}"><button type="submit" class ="btn btn-primary">Registrarse</button></a>
                                  </td>
                                    </form>

                                     
                                    
                                </tr>
                            @endforeach
                        </table>
                    </div>
              
                    <footer class="main-footer" >
        <strong>Copyright &copy; 2017 <a href="#">M&J</a>.</strong> All rights reserved.
    </footer>
          </div>
                   </div>
          </div> 

</div>

 <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('js/icheck.min.js')}}"></script>
</body>
</html>