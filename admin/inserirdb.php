<?php
include "config.inc.php";
?>

<?php

$nome = $_POST['nome'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$local = $_POST['local'];

$sql = "INSERT INTO futuras (nome,data,hora,local) VALUES ('$nome', '$data', '$hora','$local')";

//echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar'>Listar de artistas</a>";
}

?>