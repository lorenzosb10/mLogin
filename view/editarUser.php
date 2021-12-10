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
$id = null;
if(isset($_POST['editar'])){
    $id = $_POST['idUser'];
    
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$user = $cadUser->getUsuarioById($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Editar Usuário</h1>
        <form action="../controller/updateUser.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $user[0] ['idUser']; ?>"/>
             <input type="text" name="nome" value="<?php echo $user[0] ['nomeUser']; ?>"/>
            <br><br>
            <input type="email" name="email" disabled value="<?php echo $user[0] ['email']; ?>"/>
            <br><br>
            
            <input type="submit" name="update" value="Salvar"/>
           
            <input type="button" value="Cancelar" 
                   onclick="location.href='listaUsuarios.php'"/>
           
        </form>
    </body>
</html>
