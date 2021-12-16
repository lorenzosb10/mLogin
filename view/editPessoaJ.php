<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once '../controller/cPessoaJ.php';
$id = 0;
if(isset($_POST['updatePJ'])){
    $id = $_POST['id'];
}
$cadPJs = new cPessoaJ();
$pj = $cadPJs->getPessoaFJyId($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Jurídica</title>
    </head>
    <body>
        <h1>Editar Pessoa Jurídica</h1>
        <form action="<?php $cadPJs->updatePJ(); ?>" method="POST">
            <input type="hidden" value="<?php echo $pj[0]['idPessoa']; ?>" name="id"/>
            <input type="text" required value="<?php echo $pj[0]['nome']; ?>" name="nome"/>
            <br><br>
            <input type="tel" required value="<?php echo $pj[0]['telefone']; ?>" name="telefone"/>
            <br><br>
            <input type="email" required value="<?php echo $pj[0]['email']; ?>" name="email"/>
            <br><br>
            <input type="text" value="<?php echo $pj[0]['endereco']; ?>" name="endereco"/>
            <br><br>
            <input type="number" required value="<?php echo $pj[0]['cnpj']; ?>" name="cnpj"/>
            <br><br>
            <input type="text" required value="<?php echo $pj[0]['site']; ?>" name="site"/>
            
            <br><br>
            <input type="submit" value="Salvar Alterações" name="update"/>
            <input type="submit" value="Cancelar" name="cancelar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
