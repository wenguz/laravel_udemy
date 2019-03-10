<!--Forma basica para mostrar informacion en blade-->
<h1>Pagina de contacto {{$nombre}}  {{$edad}}</h1>

<!--otra forma para mostrar informacion en blade-->
<h1>Pagina de contacto otro {!!$nombre!!}  {!!$edad!!}</h1>

<!--otra forma para mostrar informacion en blade con php-->
<h1>Pagina de contacto con php <?=$nombre?>  <?=$edad?></h1>