<?php include ("cabecalho.php"); include ("banco-categoria.php"); include ("conecta.php"); ?>
	<h1> Formulário de cadastro </h1>
		<form action="adiciona-produto.php" method="POST">

		<table class="table">
			<tr>	
				<td>Nome:</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>	
				<td>Preço:</td>
				<td><input type="number" name="preco"></td>
			</tr>
			<tr>	
				<td>Descrição:</td>
				<td><input type="text" name="descricao"></td>
			</tr>
			<tr>
			    <td>Categoria</td>
			    <td>
			        <select name="categoria_id">
				        <?php foreach($categorias as $categoria) : ?>
				        <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
				        <?php endforeach ?>
			        </select>
			    </td>
			</tr>
			<tr>	
				<td><input type="submit" value="Cadastrar"></td>	
			</tr>
				
		</table>

		</form>	
<?php include ("rodape.php"); ?>