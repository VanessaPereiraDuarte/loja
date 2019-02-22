<?php 

function listaCategorias($conexao){
	$categorias = array();
	$busca = "SELECT * FROM categorias";
	$resultado = mysqli_query($conexao, $busca);
	while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
	return $categorias;

}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
    $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);

    return $resultadoDaInsercao;
}