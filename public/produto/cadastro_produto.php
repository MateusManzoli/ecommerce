<!DOCTYPE html>
<html>
    <?php include_once '../../dados/head.php'; ?>
    <body>
        <?php include_once '../../dados/cabecalho.php'; ?>
        <form action="formalurio_cadastro.php" method="post" style="width: 600px;">
            <h1>Cadastro</h1>
            <fieldset>
                <legend>Dados do produto</legend>
                <table cellspacing="10">
                    <tr>
                        <td>
                            <label for="nome">Marca: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="marca">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nome">Nome: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="nome">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sobrenome">Imagem: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="imagem">
                        </td>ss
                    </tr>
                    <tr>
                        <td>
                            <label for="sobrenome">Descricao: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="descricao">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sobrenome">Estoque: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="estoque">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sobrenome">Valor: </label>
                        </td>
                        <td align="left">
                            <input type="text" name="valor">
                        </td>
                    </tr>
                    <td>
                        <label for="categoria">categoria: </label>
                    </td>
                    <td align="left">
                        <select name="categoria"> 
                            <option value="<?php ?>"><?php echo "ainda vai "; ?></option> 
                        </select>
                    </td>
                </table>
            </fieldset>
        </form>
    </body>
</html>