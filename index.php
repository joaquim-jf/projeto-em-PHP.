<?php
		include_once('conecta.inc.php');
	?>
<html>
<head>
    <meta charset="utf-8">
 

    <title>LivesOn</title>


    <link rel="stylesheet" href="bootstrap/bootstrap.css">
 	
 	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

<body class="wrapper text-center bg-dark">
	
	<?php
	include_once('menu.php');
	?>
	
	<div class='container'>
	<?php
	
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "principal.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
	
	<?php
		include_once('rodape.php');
	?>

</body>
</html>
