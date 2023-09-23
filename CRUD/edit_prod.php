<?php 
require("../conn.php");

$nome_produto = $_POST['prod_nome'];
$quantidade = $_POST['qnt_prod'];
$valor = $_POST['val_prod'];
$categoria = $_POST['categ_prod'];
$produtos = $_POST['id_produtos'];

if(empty($nome_produto) || empty($quantidade) || empty($valor) || empty($categoria)){
	echo "Voce precisa preencher todos os campos";

	die;
} else {

	$update = $pdo->prepare("UPDATE cad_produtos SET nome_prod = :nome_prod, qnt_prod = :qnt_prod, valor_prod = :valor_prod, cate_prod = :cate_prod WHERE id = :produtos");
	$update->execute(array(
		':nome_prod' => $nome_produto,
		':qnt_prod' => $quantidade,
		':valor_prod' => $valor,
		':cate_prod' => $categoria,
		':produtos' => $produtos

	));

	echo "<h4 align='center' style='color:green'>Editado com sucesso</h4>";
}

?>