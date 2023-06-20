<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Pagina Inicial - Projeto Cadastro Fluxo de Caixa</h3> 
<h3> Pagina Inicial - Projeto Listagem de Fluxo de Caixa</h3>
<h3> Pagina Inicial - Projeto Consulta Saldo do Caixa</h3>    
<?php
if(!empty($_SESSION['cadastro']))
{
    echo"<h4>cadastro fluxo_de_caixa ".$_SESSION'['cadastro_fluxo_de_caixa']."</h4>";
    echo"<h4>listagem de fluxo_de_caixa ".$_SESSION'['listagem_fluxo_de_caixa']."</h4>";
    echo"<h4>consulta saldo_do_caixa ".$_SESSION'['cadastro_fluxo_de_caixa']."</h4>";
    

}
?>

<hr>
<ul>
<?php
if(empty($_SESSION['cadastro']))
{
    echo "<li><a href='cadastro.html'>cadastrar</a></li>";
}
?>


<LI><a href="cadastro_fluxo de caixa.html"> Cadastrar</a>  </LI>
<LI><a href="cadastrar_listagem de fluxo de caixa.php"> Listar</a>  </LI>
<LI><a href="consultar saldo do caixa.php"> consultar</a>  </LI>

</ul>

</body>
</html>