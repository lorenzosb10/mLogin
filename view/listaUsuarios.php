<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['logadoM']) && $_SESSION['logadoM'] != true) {
    header("Location: login.php");
} else {
    echo $_SESSION['usuarioM'] . " | " . $_SESSION['emailM'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listaUser = $cadUser->getUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="content-Language" content="pt-br">
        <title></title>
    </head>
    <body>
        <button onclick="location.href='cadUsuario.php'" >Voltar</button>
        <h1>Lista de Usuários</h1>
        <table>
            <thead><!-- Cabeçalho da tabela -->
            <tr>
                <th>ID</th><th>Usuário</th><th>e-mail</th><th>Funções</th>
            </tr>
            </thead>
            <tbody><!-- Corpo da tabela -->
                <?php foreach ($listaUser as $user): ?>
                <tr>
                    <td><?php echo $user['idUser'] ?></td>
                    <td><?php echo $user['nomeUser'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <form action="editarUser.php" method="post">
                            <input type="hidden" value="<?php echo $user['idUser'] ?>" name="idUser"/>
                            <input type="submit" name="editar" value="Editar"/>
                        </form>
                        <?php if($user['email']!=$_SESSION['emailM']){ ?>
                        <form action="../controller/deleteUser.php" method="post">
                            <input type="hidden" value="<?php echo $user['idUser'] ?>" name="idUser"/>
                            <input type="submit" name="deletar" value="Deletar"/>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
