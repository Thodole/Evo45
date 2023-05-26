<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
            $title="Alterar plano / contrato";
            include 'repetition.php';
            echo $head;
        ?>
	</head>
	<body>
		<?php echo $header;?>
		<?php
			$id=$_POST['id'];
			$con=mysqli_connect("localhost","root","","evo45"); 
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				die();
			}
			$stmt = mysqli_prepare($con, "SELECT * FROM planos WHERE ID = ?");
			mysqli_stmt_bind_param($stmt, "s", $id);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		?>
		<div class="cad-body">
			<div class="title-box">
				<h2>Alterar plano / contrato</h2>
				<form action="./plano_done_alt.php" method="POST">
					<div class="cad-container">
						<div class="form-column">
							<?php while($row = mysqli_fetch_array($result)) {?>
							<input type="hidden" name="id" value="<?php echo $row['ID']; ?>" />
							<label for="nom">Nome do plano:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Nome descritivo do plano" value="<?php echo $row['nom']; ?>"><br><br><br>
							<label for="dvm">Desc. do plano mensal:</label><br>
							<input type="number" id="dvm" name="dvm" required min="00" max="99" placeholder="Exemplo: Desc. 00%" value="<?php echo $row['dvm']; ?>"><br><br><br>
							<label for="dvs">Desc. do plano semestral:</label><br>
							<input type="number" id="dvs" name="dvs" required min="00" max="99" placeholder="Exemplo: Desc. 20%" value="<?php echo $row['dvs']; ?>"><br><br><br>
						</div><br>
						<div class="form-column">
							<label for="val">Valor do contrato:</label><br>
							<input type="number" id="val" name="val" required inputmode="numeric" step=".01" min="600.00" placeholder="Valor total do plano" value="<?php echo $row['val']; ?>"><br><br><br>
							<label for="dvt">Desc. do plano trimestral:</label><br>
							<input type="number" id="dvt" name="dvt" required min="00" max="99" placeholder="Exemplo: Desc. 10%" value="<?php echo $row['dvt']; ?>"><br><br><br>
							<label for="dva">Desc. do plano anual:</label><br>
							<input type="number" id="dva" name="dva" required min="00" max="99" placeholder="Exemplo: Desc. 40%" value="<?php echo $row['dva']; ?>"><br><br>
						</div>    
					</div>
					<div>
						<button class="down-button" type="submit">Atualizar</button>
						<?php }?>
					</div>
				</form>
			</div>
		</div>
		<?php echo $footer;?>
	</body>
</html>