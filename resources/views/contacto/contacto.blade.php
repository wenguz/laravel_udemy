<!--otra forma para mostrar informacion en blade
ternario: si existe edad y no es null mostrar edad sio mostrar mensaje
-->
<h1>Pagina de contacto:  {!!$nombre!!} -
<!--
{{isset($edad) && !is_null($edad) ? $edad: 'No existe edad'}}
-->
</h1>

<!--condicional If-->
@if(is_null($edad))
	No existe la edad
@else
	Si existe la edad: {{$edad}}
@endif
