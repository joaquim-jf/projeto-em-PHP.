<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script>

<?php include "config.inc.php"; ?>
<?php

$busca = "Select * from futuras order by id";

$todos = mysqli_query($conexao, $busca);

?>
<div class="card">
  <div class="card-header">
    <h1 class="font-weight-bold text-xl-left"> Editar Lives Futuras</h1>
  </div>
    <div class="card-body font-weight-bold text-xl-left">
    <blockquote class="blockquote mb-0">

        <table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome do artista</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>

    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><a href="?pg=alterar&id=<?=$dados['id']; ?>">!!</a></td>
        <td><a href="?pg=excluir&id=<?=$dados['id']; ?>')">XX</a></td>
    </tr>
    
    <?php } ?>

</table>
</blockquote>
</div>
</div>
