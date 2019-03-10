@extends('layouts.master')
 <!--esto aparecera en la pestaña de la pagina-->
	@section('title','Curso Laravel Basico')
<!--Para heredar algo mas al header que tenia el master-->
@section('header')
	@parent
	<h1>cabecera desde hola mundo</h1>
@stop

<!--Contenido:se reemplazo el contenido que venia del master-->
@section('content')
	<p>Contenido de hola munod</p>
@stop