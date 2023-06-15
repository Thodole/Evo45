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
	      	$cpf=$_POST['cpf'];
	      	$nom=$_POST['nom'];
	     	$gen=$_POST['gen'];
	     	$idd=$_POST['idd'];
	     	$tel=$_POST['tel'];
	     	$ema=$_POST['ema'];
	     	$sal=$_POST['sal'];
	     	$fun=$_POST['fun'];
	       	$sql="UPDATE colaboradores SET id='$id',cpf='$cpf',nom='$nom',gen='$gen',idd='$idd',tel='$tel',ema='$ema',sal='$sal',fun='$fun' WHERE ID='$id'";
	       	$con=mysqli_connect("127.0.0.1","root","","evo45");
			if (mysqli_connect_errno())	{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				die();
			}
			mysqli_query($con, $sql);
        ?>
		<div class="box-container">
			<div class="show-box">
			  <h2>Cadastro alterado com sucesso!</h2>
			</div>
	  	</div>
		<?php echo $footer;?>
	</body>
</html>