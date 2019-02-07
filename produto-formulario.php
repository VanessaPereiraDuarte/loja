<?php include ("cabecalho.php"); ?>
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
				<td><input type="submit" value="Cadastrar"></td>	
			</tr>
				
		</table>

		</form>	
<?php include ("rodape.php"); ?>