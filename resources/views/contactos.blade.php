@extends ('layout')

@section ('contenido')

<h2> Contactos </h2>
@if(session()->has('info'))

	<h3>{{ session('info') }}</h3>

@else

<form method="POST" action="contacto">
	<label for="nombre">
		Nombre
		<input type="text" name="nombre" value="{{ old('nombre') }}">
		{{ $errors->first('nombre')}}
	</label>
	<label for="Email">
		Email
		<input type="text" name="email" value="{{ old('email') }}">
		{{ $errors->first('email')}}
	</label>
	<label for="mensaje">
		Mensaje
		<textarea name="mensaje" value="{{ old('mensaje') }}" ></textarea>
		{{ $errors->first('mensaje')}}
	</label>
	<input type="submit" value="Enviar" >

</form>

@endif

@stop