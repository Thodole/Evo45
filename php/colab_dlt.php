<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
            $title="Evo45 - Cadastro deletado";
            include 'repetition.php';
            echo $head;
        ?>
	</head>
	<body>
		<?php echo $header;?>
		<?php 
            $id=$_POST['id'];
            $sql="DELETE FROM colaboradores WHERE ID='$id'";
			$con=mysqli_connect("127.0.0.1", "root", "", "evo45");
			if (mysqli_connect_errno()) {
                echo "Falha de Conexão com o MySQL: ", mysqli_connect_error();
				die();
            }            
			mysqli_query($con, $sql);
            mysqli_close($con);
        ?>
		<div class="box-container">
			<div class="show-box">
			  <h2>Cadastro de colaborador(a) deletado!</h2>
			</div>
	  	</div>
		<?php echo $footer;?>
	</body>
</html>