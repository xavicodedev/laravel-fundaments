
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<style type="text/css">
		.active{

			text-decoration: none;
			color: green;

		}

	</style>

	<?php function activeMenu($url){
		return request()->is($url) ? 'active' : '';
	} ?>
</head>
<body>
	<h1>{{ request()->url() }}</h1>
	<h1>Example</h1>
	<nav>
		<a class="{{ activeMenu('/') }}" href="{{  route('home')  }}">Inicio</a>
		<a class="{{ activeMenu('saludos/*') }}" href="{{  route('saludos')  }}">Saludos</a>
		<a class="{{ activeMenu('contactanos') }}" href="{{  route('contactos')  }}">Contacto</a>
	</nav>
	@yield('contenido')
	<footer>Copyright 2018</footer>
</body>
</html>