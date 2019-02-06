<?php include ("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php"); ?>

<?php
	if(array_key_exists("removido" , $_GET) && $_GET['removido']=='true') { ?>
	<p class="alert-sucess">Produto apagado com sucesso.</p>
<?php } ?>

<?php
$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered">
 	<?php 
 		foreach($produtos as $produto) {
 	?>
 		<tr>
 			<td><?= $produto['nome'] ?></td>
 			<td><?= $produto['preco'] ?></td>
 			<td>
			<?php 

			if ($produto['descricao']) {
				echo $produto['descricao'];
 			} else {
 				echo 'Produto sem descrição';
 			}

 			?> 				
 			</td>
 			<td>
 				<a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-danger" >remover</a>
 		</tr>	
 	<?php

 		}

 	?>
</table>

<?php include ("rodape.php") ?>
