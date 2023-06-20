<?php

$data = "localhost";
$tipo = "root";
$valor = "";
$historico = "prova2";
$cheque = "";
$port = 3307;
$con = mysqli_connect($data, $tipo, $valor, $historico, $cheque);
if(mysqli_connect_errno()){
    printf("Erro conexão: %s\n",
    mysqli_connect_error());
    exit();
}

?> 