<?php
    include('altera_fluxo_caixa.php');
    $id_usuario = $_GET['id_altera'];
    $sql = "SELECT * FROM altera where id_altera=$id_altera";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--http://localhost/PRW/Banco%20de%20dados/Aulas/altera_usuario?id_usuario=1 -->
    <h1></h1>
    <form action="altera_fluxo_caixa.php" method="POST" >
    <input name="id_altera" type="hidden"
        value="<?php echo $row ['id_altera']?>">

        <div>
            <label for="data">Data</label>
            <input type="text" name="data" id="data"
            value="<?php echo $row['data'] ?>">
        </div>
        <div>
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo"
            value="<?php echo $row['tipo'] ?>">
            
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" 
            value="<?php echo $row['valor'] ?>">

        </div>
        <div>
            <label for="historico">Historico</label>
            <input type="text" name="historico" id="historico"
            value="<?php echo $row['historico'] ?>">
        </div>
        <div>
            <label for="cheque">Cheque</label>
            <input type="text" name="cheque" id="cheque"
            value="<?php echo $row['cheque'] ?>">
        </div>
        
    </form>
</body>
</html>