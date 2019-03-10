<!--otra forma para mostrar informacion en blade
ternario: si existe edad y no es null mostrar edad sio mostrar mensaje
-->

@include('contacto.cabecera')

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

<br>

<!--Bucle for-->
<p>Tabla del 2</p>
@for($i=0;$i<=10;$i++)
	{{$i.' x 2= '.($i*2)}}<br>
@endfor
<br>

<!--Bucle for:otra forma-->
<?php $numero=4;?>
<p>Tabla del {{$numero}}</p>
@for($i=0;$i<=10;$i++)
	{{$i.' x'.$numero.'= '.($i*$numero)}}<br>
@endfor
<br>

<!--Bucle while-->
<?php $f=1; ?>
@while($f<=7)
	{{'Hola mundo: '.$f}}
	<?php $f++; ?>
	<br>
@endwhile
<br>

<!--Bucle foreach: se define un array frutas en web-->
<h1>Listado frutas</h1>
@foreach($frutas as $fruta)
	<p>{{$fruta}}</p>
@endforeach
