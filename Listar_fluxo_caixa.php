<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('consulta_de_fluxo_de_caixa.php');
        $sql= "SELECT * FROM caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>

        <h1>Consulta de Fluxo de Caixa</h1>
        <table align="center" border="1" width="500" >
            <tr>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Historico</th>
                <th>Cheque</th>
            </tr>
            <?php
                do{
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
        
                    echo "<td><a href='consulta_de_fluxo_de_caixa.php?id_consulta="
                    .$row['id_consulta']."'>Excluir</td>";
                    echo "<td><a href='consulta_de_fluxo_de_caixa.php?id_consulta="  
                    .$row['id_consulta']."'>Consultar</a></td>";
                    echo "</tr>";
                }while($row = mysqli_fetch_array($result))
            ?>
            <a href="index.php">Voltar</a>
        </table>
</body>
</html>