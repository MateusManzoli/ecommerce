<?php
/* include_once '../../dados/dados-cabecalho.php';
  include_once '../../gerenciar/login/gerenciador-login.php';
  //delete recebe o valor do hidden || id_usuario valor que receber o id no button
  try {
  $execute = [];
  // post armazena os dados
  // se post existir ele ira cadastrar as noticias,
  if (!empty($_POST['delete'])) {
  excluirUsuario($_POST['id_usuario']);
  $execute['mensagem'] = "Exclusao de usuario realizada com êxito!";
  $execute['tipo'] = "alert-success";
  }
  // a variavel do exception nao pode ser a mesma da mensagem e tipo
  } catch (Exception $e) {
  $execute['mensagem'] = $e->getMessage();
  $execute['tipo'] = "alert-danger";
  }
  $usuarios = buscarUsuarios(); */
?>
<html>
    <link rel="stylesheet" type="text/css" href=""/>
    <?php include_once '../../dados/dados-head.php'; ?>
    <body>
        <div class="geral">
            <form method="post" action="../usuario/gerenciar.php" style="border: 1px;">
                <input type="hidden" name="delete" value="1"/>
                <table>
                    <thead class="thead">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Data de Nascimento</th>
                    </thead>
                    <?php foreach ($produtos as $produto) { ?> 
                        <tbody>
                            <tr>
                                <td><?php echo $produto['id']; ?></td>
                                <td><?php echo $produto['nome'] ?></td>
                                <td><?php echo $produto['email'] ?></td>
                                <td><?php echo $produto['senha'] ?></td>
                                <td><?php echo $produto['data_nascimento'] ?></td>
                                <!-- é necessario que o button tenha um name-->
                                <td><button name="id_usuario" type="submit" class="btn btn-default navbar-btn" value="<?php echo $usuario['id']; ?>">Excluir</button></td>
                                <td><a href="../usuario/edicao.php?id=<?php echo $usuario['id']; ?>" class="btn btn-default navbar-btn">Editar</a></td>
                            </tr>
                        <tbody>
                        <?php } ?>
                </table>
            </form>
        </div>
    </body>
</html>