<?php

    include("cadastro_fluxo_caixa.php");
    

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    $sql = "INSERT INTO cadastro (data, tipo, valor, historico, cheque,)";

    $sql .= " VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', 
    '".$cheque."',)"; 


    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";
?>