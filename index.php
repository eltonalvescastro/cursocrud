<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	
	<title>Cadastro de produtos</title>
</head>
<body>


<div class="container">
	<br>
	<h1 align="center">Cadastro de Produtos</h1>
	<br>
	<form action="" method="POST" id="formulario">
		<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<label>Nome do produto</label>
			<input type="text" name="prod_nome" class="form-control">
		</div>
		</div>
		
		<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<label>Quantidade do produto</label>
			<input type="text" name="qnt_prod" class="form-control">
		</div>
		</div>
		
		<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<label>Valor do produto</label>
			<input type="text" name="val_prod" class="form-control">
		</div>
		</div>
		 
		<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<label>Categoria do produto</label>
			<input type="text" name="categ_prod" class="form-control">
		</div>
		</div>
		<br>
		<div class="form-group">
		<div class="col-md-6 offset-md-3">
			<input type="submit" value="CADASTRAR" class="btn btn-success">
			<a href="tabela.php" class="btn btn-primary float-right">VISUALIZAR PRODUTOS</a>
		</div>
		</div>
	</form>	
	<div id="linkResultado"></div>
  </div>

  <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <script>
   	jQuery('#formulario').submit(function(){
     event.preventDefault();
     var dados = jQuery(this).serialize();


     jQuery.ajax({
      type: "POST",
      url: "CRUD/cad_prod.php",
      data: dados,
      success: function (data)
      {
      
      	$("#linkResultado").html(data);
      }

     });

     return false;

   	});

   </script>

</body>

</html>





