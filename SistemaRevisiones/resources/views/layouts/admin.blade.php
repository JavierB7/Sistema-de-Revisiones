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

        <!-- Content Header (Page header)
        <section class="content-header">
          <h1>
            Sistema de Registro de Revisiones
          </h1>
        </section> -->
 <li class="dropdown">
     <a href="home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
    {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li>
        <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        </li>
    </ul>
</li>
        
        <section class="content container-fluid">

          
            @yield('contenido')

        </section>
        <!-- /.content -->
       <footer class="main-footer">
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