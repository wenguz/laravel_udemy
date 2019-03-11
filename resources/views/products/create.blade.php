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
					Crear productos
				</div>
			<!--fin titulo-->
				<div class="card-body">
				<!--Inicio formulario-->
					<form action="">
						<div class="form-group">
							<label for="">Descripcion</label>
							<!--mejor si el name tiene elmismo nombre que en la migracion-->
							<input type="text" class="form-control" name="description"></input>
						</div>
						<div class="form-group">
							<label for="">Precio</label>
							<input type="number" class="form-control" name="price"></input>
						</div>
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
					</form>
				<!--Fin formulario-->
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>