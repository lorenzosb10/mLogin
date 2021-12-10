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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../controller/logout.php">Sair</a>
        <h1>Cadastro de Usuários</h1>
        <form action="<?php $cadUser->inserir(); ?>" method="POST">
            <input type="text" name="nome" placeholder="Nome aqui ..."/>
            <br><br>
            <input type="email" name="email" placeholder="E-mail aqui ..."/>
            <br><br>
            <input type="password" name="pas" placeholder="Senha aqui ..." />
            <br><br>
            <input type="submit" name="salvar" value="Salvar"/>
            <input type="reset" name="limpar" value="Limpar"/>
            <input type="button" value="Voltar" 
                   onclick="location.href='../index.php'"/>
            <input type="button" value="Lista Usuários" 
                   onclick="location.href='listaUsuarios.php'"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
