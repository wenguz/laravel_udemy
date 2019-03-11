<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
			<!--inicio titulo-->
				<div class="card-header">
					Listado de productos
					<a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
				</div>
			<!--fin titulo-->
				<div class="card-body">
				<!--Verificar si se almaceno  con with de rutas-->
					@if(session('info'))
						<div class="alert alert-success">
							{{session('info')}}
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>