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