
<?php 
require("../conn.php");


$nome_produto = $_POST['prod_nome'];
$quantidade = $_POST['qnt_prod'];
$valor = $_POST['val_prod'];
$categoria = $_POST['categ_prod'];


if(empty($nome_produto) || empty($quantidade) || empty($valor) || empty($categoria)){
	echo "Você precisa preencher todos os campos";
	die;
}else {

	$cad_produto = $pdo->prepare("INSERT INTO cad_produtos (nome_prod, qnt_prod, cate_prod, valor_prod) VALUES (:nome_prod, :qnt_prod, :cate_prod, :valor_prod)");
	$cad_produto->execute(array(
		':nome_prod' => $nome_produto,
		':qnt_prod' => $quantidade,
		':cate_prod' => $categoria,
		':valor_prod' => $valor
	));

   // echo "<h5 style='color:green'><center>Cadastrado com Sucesso</center><h5>";

	
    echo "<script>Swal.fire(
  'Bom trabalho!',
  'Produto cadastrado com sucesso!',
  'success'
 )</script>";
}

?>