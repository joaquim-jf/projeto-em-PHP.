<?php  include "config.inc.php"; ?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM futuras WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>
<div class="card">
  <div class="card-header">
    <h1 class="font-weight-bold text-xl-left">Lives Futuras</h1>
  </div>
  <div class="card-body font-weight-bold text-xl-left">
    <blockquote class="blockquote mb-0">
<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome do artista: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>data: </td>
        <td><input name="data" type="text" value="<?=$dados['data'];?>"/></td>
    </tr>
    <tr>
        <td>hora: </td>
        <td><textarea name="hora" value="<?=$dados['hora'];?>"><?=$dados['hora'];?></textarea></td>
    </tr>
    <tr>
        <td>local: </td>
        <td><textarea name="local" value="<?=$dados['local'];?>"><?=$dados['local'];?></textarea></td>
    </tr>
     <tr>
        <td>URL: </td>
        <td><textarea name="URL" value="<?=$dados['URL'];?>"><?=$dados['URL'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
<?php 
}
?>
</blockquote>
</div>
</div>
