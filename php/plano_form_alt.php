<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alterar plano / contrato</title>
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
							<?php
								while($row = mysqli_fetch_array($result)) {
							?>	
							
							<input type="hidden" name="id" value="
								<?php echo $row['ID']; ?>
							" />

							<label for="nom">Nome do plano:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Nome descritivo do plano" value="<?php echo $row['nom']; ?>"><br><br>

							<br>
							<label for="dvm">Desc. do plano mensal:</label><br>
							<input type="number" id="dvm" name="dvm" required min="00" max="99" placeholder="Exemplo: Desc. 00%" value="<?php echo $row['dvm']; ?>"><br><br>

							<br>
							<label for="dvs">Desc. do plano semestral:</label><br>
							<input type="number" id="dvs" name="dvs" required min="00" max="99" placeholder="Exemplo: Desc. 20%" value="<?php echo $row['dvs']; ?>"><br><br>
						</div>
						<br>
						<div class="form-column">
							<label for="val">Valor do contrato:</label><br>
							<input type="number" id="val" name="val" required inputmode="numeric" step=".01" min="600.00" placeholder="Valor total do plano" value="<?php echo $row['val']; ?>"><br><br>

							<br>
							<label for="dvt">Desc. do plano trimestral:</label><br>
							<input type="number" id="dvt" name="dvt" required min="00" max="99" placeholder="Exemplo: Desc. 10%" value="<?php echo $row['dvt']; ?>"><br><br>

							<br>
							<label for="dva">Desc. do plano anual:</label><br>
							<input type="number" id="dva" name="dva" required min="00" max="99" placeholder="Exemplo: Desc. 40%" value="<?php echo $row['dva']; ?>"><br><br>
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