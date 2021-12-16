<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once '../controller/cPessoaF.php';
$id = 0;
if(isset($_POST['updatePF'])){
    $id = $_POST['id'];
}
$cadPFs = new cPessoaF();
$pf = $cadPFs->getPessoaFById($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Fisíca</title>
    </head>
    <body>
        <h1>Editar Pessoa Fisíca</h1>
        <form action="<?php $cadPFs->updatePF(); ?>" method="POST">
            <input type="hidden" value="<?php echo $pf[0]['idPessoa']; ?>" name="id"/>
            <input type="text" required value="<?php echo $pf[0]['nome']; ?>" name="nome"/>
            <br><br>
            <input type="tel" required value="<?php echo $pf[0]['telefone']; ?>" name="telefone"/>
            <br><br>
            <input type="email" required value="<?php echo $pf[0]['email']; ?>" name="email"/>
            <br><br>
            <input type="text" value="<?php echo $pf[0]['endereco']; ?>" name="endereco"/>
            <br><br>
            <input type="number" required value="<?php echo $pf[0]['cpf']; ?>" name="cpf"/>
            <br><br>
            <input type="text" value="<?php echo $pf[0]['rg']; ?>" name="rg"/>
            <br><br>
            <input type="radio" <?php if($pf[0]['sexo']=="F"){echo 'checked';} ?> value="F" name="sexo"/>Feminino
            <input type="radio" <?php if($pf[0]['sexo']=="M"){echo 'checked';} ?> value="M" name="sexo"/>Masculino
            <br><br>
            <input type="submit" value="Salvar Alterações" name="update"/>
            <input type="submit" value="Cancelar" name="cancelar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
