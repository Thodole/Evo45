<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
            $title="Alterar cadastro de aluno(a)";
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
			}
			$stmt = mysqli_prepare($con, "SELECT * FROM alunos WHERE ID = ?");
			mysqli_stmt_bind_param($stmt, "s", $id);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		?>
		<div class="cad-body">
			<div class="title-box">
				<h2>Alterar cadastro de Aluno(a)</h2>
				<form action="./aluno_done_alt.php" method="POST">
					<div class="cad-container">
						<div class="form-column">
							<?php while($row = mysqli_fetch_array($result)) { ?>	
							<input type="hidden" name="id" value="
								<?php echo $row['ID']; ?>
							" />
							<label for="cpf">CPF:</label><br>
							<input type="text" id="cpf" name="cpf" required inputmode="numeric" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="CPF no formato XXX.XXX.XXX-XX" minlength="14" maxlength="14" placeholder="XXX.XXX.XXX-XX" value="<?php echo $row['cpf']; ?>"><br><br>
							<label for="nom">Nome:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Informe o nome completo" value="<?php echo $row['nom']; ?>"><br><br>
							<label for="gen">Gênero:</label><br>
							<select id="gen" name="gen" required>
								<option value="" disabled selected hidden>Selecione o sexo</option>
								<option value="masculino">Masculino</option>
								<option value="feminino">Feminino</option>
								<option value="outro">Outro</option>
							</select><br><br>
							<label for="idd">Idade:</label><br>
							<input type="number" id="idd" name="idd" required min="10" max="99" placeholder="Informe a idade" value="<?php echo $row['idd']; ?>"><br><br>
						</div>
						<div class="form-column">
							<label for="tel">Celular:</label><br>
							<input type="text" id="tel" name="tel" required inputmode="numeric" pattern="\(\d{2}\) \d{5}-\d{4}" title="Celular no formato (XX) XXXXX-XXXX" maxlength="15" placeholder="(XX) XXXXX-XXXX" value="<?php echo $row['tel']; ?>"><br><br>
							<label for="ema">Email:</label><br>
							<input type="email" id="ema" name="ema" required placeholder="exemplo@email.com" value="<?php echo $row['ema']; ?>"><br><br>
							<label for="pln">Modalidade:</label><br>
							<select id="pln" name="pln" required>
								<option value="" disabled selected hidden>Selecione a modalidade</option>
								<option value="Treino Funcional">
									Treino funcional
								</option>
								<option value="Consult. on-line">
									Consult. on-line
								</option>
								<option value="Ac. com personal">
									Ac. com personal
								</option>
							</select><br><br>
							<label for="tmp">Contrato:</label><br>
							<select id="tmp" name="tmp" required>
								<option value="" disabled selected hidden>Informe a periodicidade</option>
								<option value="Mensal">Mensal</option>
								<option value="Trimestral">Trimestral</option>
								<option value="Semestral">Semestral</option>
								<option value="Anual">Anual</option>
							</select><br><br>
						</div>    
					</div>
					<div>
						<button class="down-button" type="submit">Atualizar</button> <?php } ?>
					</div>
				</form>
			</div>
		</div>
		<?php echo $footer;?>
	</body>
</html>