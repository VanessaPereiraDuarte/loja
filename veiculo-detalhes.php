<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("banco-produto.php");

$id = $_GET['id']; $produto = buscaProduto($conexao, $id); $categorias = listaCategorias($conexao); $usado = $produto['usado'] ? "checked='checked'" : ""; ?>

<section class="content-details">

    <section>
        <input type="hidden" name="id" value="<?=$produto['id']?>" />
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><?=$produto['nome']?></td>
            </tr>
            <tr>
                <td>Preço</td>
                <td><?=$produto['preco']?></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><?=$produto['descricao']?></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select class="form-control" name="categoria_id">
                        <?php foreach($categorias as $categoria) :
                            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                            $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                            <option value="<?=$categoria['id']?>" <?=$selecao?>>
                                <?=$categoria['nome']?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
        </table>
    </section>

    <section class="slide">
        fotos
    </section>

</section>




<?php include("rodape.php"); ?>
