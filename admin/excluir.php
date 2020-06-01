<?php include "config.inc.php";?>

<?php

$id = $_GET['id'];

$sql = "DELETE FROM futuras WHERE  id=$id ";

$del = mysqli_query($conexao, $sql);

if(!$del){
    echo "Ocorreu um erro  <a href='?pg=listar'>Tente Novamente</a>";
}else{
   echo "<h3>Excluido com sucesso!</h3><br>";
   echo "<a href='?pg=listar'>Listar </a>";
}

?>
