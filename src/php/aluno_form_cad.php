<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Cadastro de aluno(a)";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php
            echo $header;    
        ?>
        <div class="cad-body">
            <div class="title-box">
            <h2>Cadastro de Aluno(a)</h2>
				<form method="POST" action="./aluno_done_cad.php">
					<div class="cad-container">
						<div class="form-column">
							<label for="cpf">CPF:</label><br>
							<input type="text" id="cpf" name="cpf" required inputmode="numeric" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="CPF no formato XXX.XXX.XXX-XX" minlength="14" maxlength="14" placeholder="XXX.XXX.XXX-XX"><br><br>

							<label for="nom">Nome:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Informe o nome completo"><br><br>
										
							<label for="gen">Gênero:</label><br>
							<select id="gen" name="gen" required>
								<option value="" disabled selected hidden>Selecione o sexo</option>
								<option value="masculino">Masculino</option>
								<option value="feminino">Feminino</option>
								<option value="outro">Outro</option>
							</select><br><br>

							<label for="idd">Idade:</label><br>
							<input type="number" id="idd" name="idd" required min="10" max="99" placeholder="Informe a idade"><br><br>
						</div>
						
						<div class="form-column">
							<label for="tel">Celular:</label><br>
							<input type="text" id="tel" name="tel" required inputmode="numeric" pattern="\(\d{2}\) \d{5}-\d{4}" title="Celular no formato (XX) XXXXX-XXXX" maxlength="15" placeholder="(XX) XXXXX-XXXX"><br><br>
										
							<label for="ema">Email:</label><br>
							<input type="email" id="ema" name="ema" required placeholder="exemplo@email.com"><br><br>
										
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
						<button class="down-button" type="submit">
							Cadastrar
						</button>
					</div>
				</form>
            </div>
        </div>
		<?php echo $footer;?>
    </body>
</html>