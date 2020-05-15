<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3>Obrigado pelo contato.</h3> 
        </div>
        <div >
		<?php
			
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			
			$dados = "INSERT INTO contato (nome, email,assunto,mensagem,cidade,estado) VALUES ('$nome','$email','$assunto','$mensagem','$cidade','$estado')";
			
			$query = mysqli_query($conexao,$dados);

			if($query){
				echo "<h4>Dados enviados com sucessso!</h4></center>";
		    }else{
		    	echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=contato>Tente novamente.</a></h4></center>";
		    }
		?>
		</div>
	  </div>
	</div>
</div>
