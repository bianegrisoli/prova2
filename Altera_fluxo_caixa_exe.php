<?php
include('altera_fluxo_caixa.php');

$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "<h1>Alteração de dados</h1>";
echo "<p>Altera: $data";
echo $id_altera;

$sql = "UPDATE  SET
    data='$data',
    tipo='$tipo',
    valor='$valor',
    historico='$historico',
    cheque='$cheque',

    WHERE id_altera=$id_altera"; /*Criando o comando para alterar os dados*/

    echo $sql;
    
    /*função que conecta no banco*/
    $result = mysqli_query($con, $sql);

if ($result) {
    echo "Dados alterados com sucesso!<br>";
} else {
    echo "Ocorreu um erro ao alterar os dados: " . mysqli_error($con) . "!";
}

?>

<a href="index.php">Voltar</a>