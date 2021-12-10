<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Inicializa a sessão
session_start();

//Renova tpdas as variáveis da sessão
$_SESSION = array();

//Destuir sessão
session_destroy();

//redirecionar para tela de login após logout
header("Location: ../view/login.php");
exit;