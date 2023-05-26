<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
            $title="Evo45 - Cadastro alterado";
            include 'repetition.php';
            echo $head;
        ?>
	</head>
	<body>
		<?php echo $header;?>
		<?php
	      	 $id=$_POST['id'];
	      	$nom=$_POST['nom'];
	      	$val=$_POST['val'];
	     	$dvm=$_POST['dvm'];
	     	$dvt=$_POST['dvt'];
	     	$dvs=$_POST['dvs'];
	     	$dva=$_POST['dva'];
	       	$sql="UPDATE planos
				SET id='$id',nom='$nom',val='$val',dvm='$dvm',dvt='$dvt',dvs='$dvs',dva='$dva' WHERE ID='$id'";
	       	$con=mysqli_connect("127.0.0.1","root","","evo45");
			if (mysqli_connect_errno())	{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				die();
			}
			mysqli_query($con, $sql);
        ?>
		<div class="box-container">
			<div class="show-box"><h2>Plano / contrato atualizado!</h2></div>
		</div>
		<?php echo $footer;?>
	</body>
</html>