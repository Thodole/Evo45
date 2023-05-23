<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alterar cadastro de professor(a)</title>
		<link rel="stylesheet" href="../css/evo45styles.css">
	</head>
	<body>
		<div class="header-container">
			<header>
				<div class="navbar">
					<ul>
						<li class="menu-li"><a href="../html/index.html">Home</a></li>
						<li class="menu-li">
							Alunos
							<div class="dropdown-content">
								<a href="./alunos_lista.php">Listar Alunos</a>
								<a href="../html/aluno_cad.html">Cadastrar Aluno(a)</a>
							</div>
						</li>

						<li class="menu-li">
							Colaboradores
							<div class="dropdown-content">
								<a href="./colabs_lista.php">Listar Colaboradores</a>
								<a href="../html/colab_cad.html">Cadastrar Colaborador(a)</a>
							</div>
						</li>

						<li class="menu-li">
							Planos
							<div class="dropdown-content">
								<a href="./planos_lista.php">Listar planos</a>
								<a href="../html/plano_cad.html">Cadastrar plano</a>
							</div>
						</li>

						<li class="menu-li">
							Professores
							<div class="dropdown-content">
								<a href="./profes_lista.php">Listar Professores</a>
								<a href="../html/profe_cad.html">Cadastrar Professor(a)</a>
							</div>
						</li>

						<li class="menu-li">
							Administrador
							<div class="dropdown-content">
								<a href="../html/usuar_cad.html">Solicitar acesso de administrador</a>
							</div>
						</li>
					</ul>
				</div>
			</header>
		</div>

		<?php	
			$id=$_POST['id'];
			$con=mysqli_connect("localhost","root","","evo45"); 

			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$stmt = mysqli_prepare($con, "SELECT * FROM professores WHERE ID = ?");
			mysqli_stmt_bind_param($stmt, "s", $id);
			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);
		?>

		<div class="cad-body">
			<div class="title-box">
				<h2>Alterar cadastro de professor(a)</h2>
				<form action="./profe_done_alt.php" method="POST">
					<div class="cad-container">
						<div class="form-column">
							<?php
								while($row = mysqli_fetch_array($result)) {
							?>	
							
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

							<label for="sal">Salário:</label><br>
							<input type="number" id="sal" name="sal" required inputmode="numeric" step=".01" min="1320.00" placeholder="Informe o salário do colaborador" value="<?php echo $row['sal']; ?>"><br><br>

							<label for="fad">Função adicional:</label><br>
							<select id="fad" name="fad" required>
								<option value="" disabled selected hidden>Tem função extra?</option>
								<option value="nenhuma">
									Nenhuma
								</option>
								<option value="personal">
									Personal trainer
								</option>
								<option value="consultoria">
									Consultoria online
								</option>
								<option value="ambas">
									Personal e Consultoria
								</option>
							</select><br><br>
						</div>    
					</div>
					<div>
						<button class="down-button" type="submit">
							Atualizar
						</button>
						<?php
						}
						?>
					</div>
				</form>
			</div>
		</div>

		<!-- Rodapé -->
		<footer>
			<!-- Evo45 Logo + ícones de redes sociais. -->
			<div class="footer-sm">
				Siga-nos:
				<a href="https://facebook.com" target="_blank">
					<button class="facebook-btn"></button>
				</a>
				<a href="https://instagram.com" target="_blank">
					<button class="instagram-btn"></button>
				</a>
				<a href="https://whatsapp.com" target="_blank">
					<button class="whatsapp-btn"></button>
				</a>
			</div>
			<hr>
			<div>
				<p>© 2023 evo45 - Todos os direitos reservados. &nbsp; / &nbsp; 
				DF-495 - Santa Maria, Brasília - Distrito Federal.</p>
			</div>
		</footer>
	</body>
</html>