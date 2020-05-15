<?php
include "config.inc.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
 

    <title>LivesOn</title>


    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

<body class="wrapper text-center bg-dark">
    

    
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
       
         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Painel Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"> 
    <span class="navbar-toggler-icon ">
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="?pg=listar">Listar lives <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pg=inserir">Inserir Nova live</a>
      </li>
       </ul>
  </div>
</nav>
        <hr>
        <!-- Content Row -->
        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "admin/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            
        } else {
            include("$pg.php");
        }
    ?>
        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
