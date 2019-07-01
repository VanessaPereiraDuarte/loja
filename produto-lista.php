<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-produto.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<div class="produtos">
    <table class="tabela-produtos">
        <thead>
            <tr>
                <th>Nome</th>                    
                <th>Quantidade disponivel</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th></th>          
            </tr>
        </thead>
        <tbody>
            <?php $produtos = listaProdutos($conexao); foreach($produtos as $produto) : ?>
            <tr>
                <td> <?= $produto['nome'] ?> </td>
                <td> <?= $produto['quantidade'] ?> </td>
                <td> <?= $produto['categoria_nome'] ?> </td>
                <td> <?= $produto['preco'] ?> </td>
                <td style="display: flex">
                    <a class="botao-alterar" href="produto-altera-formulario.php?id=<?=$produto['id']?>"> Alterar</a>
                    <a class="botao-alterar" href="veiculo-detalhes.php?id=<?=$produto['id']?>"> Detalhes </a>
                    <form action="remove-produto.php" method="post">
                        <input type="hidden" name="id" value="<?=$produto['id']?>" />
                        <button type="button" class="botao-excluir">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>            
            <?php endforeach ?>
        </tbody>
    </table>
</div>
</section>
<?php include("rodape.php"); ?>
