<div class="card">
  <div class="card-header">
    <h1 class="font-weight-bold text-xl-left">Lives Futuras</h1>
  </div>
  <div class="card-body font-weight-bold text-xl-left">
    <blockquote class="blockquote mb-0">
    <h4>Agenda de lives da semana<br>lembrando que reunir os amigos só se for por videochamada.</h4>
    <?php 
	$query = mysqli_query($conexao, "SELECT * FROM futuras ORDER BY id ");
	?>

		<table>
    <tr>
        <td style="width: 205px;">Nome</td>
        <td style="width: 105px;">Data</td>
        <td style="width: 105px;">Hora</td>
        <td style="width: 105px;">local</td>
    </tr>
    <?php while ($dados=mysqli_fetch_array($query)) {?>
    
    <tr>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['data'];?></td>
        <td><?=$dados['hora'];?></td>
        <td><?=$dados['local'];?></td>
    </tr>
    
    <?php } ?>


</table>


    </blockquote>
  </div>
</div>
