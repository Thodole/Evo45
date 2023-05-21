<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de alunos</title>
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
            $con=mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno())  {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

           $result = mysqli_query($con,"SELECT * FROM alunos");
        ?>

        <div class="table-container">
	   		<table border="2">
		   		<thead>
		   			<th>CPF</th>
		   			<th>Nome</th>
		   			<th>Gênero</th>
                    <th>Idade</th>
		   			<th>Telefone</th>
		   			<th>E-mail</th>
		   			<th>Plano</th>
		   			<th>Periodicidade</th>
		   			<th colspan="2"></th>
		   		</thead>
		       	<?php
		       		while($row = mysqli_fetch_array($result)){
				?>
					<tr style="text-align: center">
				   		<td><?php echo $row['cpf']; ?></td>
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['gen']; ?></td>
						<td><?php echo $row['idd']; ?></td>
			            <td><?php echo $row['tel']; ?></td>
			            <td><?php echo $row['ema']; ?></td>
				        <td><?php echo $row['pln']; ?></td>
				        <td><?php echo $row['tmp']; ?></td>
						<td>
							<form action="./aluno_alt.php" method="POST">
								<input type="hidden" name="cpf" value="
                                    <?php
                                        echo $row["cpf"];
                                    ?>"/>
								
                                <button type="submit" name="btn_alt" value="ok">
                                    Alterar
                                </button>
							</form>
						</td>
                        <td>
							<form action="./aluno_dlt.php" method="POST">
								<input type="hidden" name="cpf" value="
                                    <?php
                                        echo $row["cpf"];
                                    ?>"/>
								
                                <button type="submit" name="btn_del" value="ok">
                                    Deletar
                                </button>
							</form>
						</td>
					</tr>
				<?php
		    		}
		    		mysqli_close($con);
		    	?>
	    	</table>
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