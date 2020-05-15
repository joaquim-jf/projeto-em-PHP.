<?php include "config.inc.php";?>

<?php

$id =           $_POST['id'];
$nome =       $_POST['nome'];
$data =    $_POST['data'];
$hora =        $_POST['hora'];
$local =        $_POST['local'];


$sql2 = mysqli_query($conexao, "SELECT * FROM futuras WHERE id='$id'");

$sql = "UPDATE futuras SET nome='$nome', data='$data', hora='$hora', local='$local' WHERE id=$id";

$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar'>Voltar</a>";
}
?>