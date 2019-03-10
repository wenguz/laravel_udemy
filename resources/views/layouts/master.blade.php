<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--esto aparecera en la pestaña de la pagina-->
        <title>Probando Balde - @yield('title')</title>
    </head>
    <body>
    	@section('header')
    		Master Header
    	@show

    	<div class="container">
    		@yield('content')
    	</div>

    	@section('footer')
    		Master Footer
    	@show
    </body>
</html>