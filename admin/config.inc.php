<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost","root","159");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "lives");
        
?>
