<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Cadastro de colaborador(a)";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header; ?>
        <div class="cad-body">
            <div class="title-box">
            <h2>Cadastro de Colaborador(a)</h2>
				<form method="POST" action="./colab_done_cad.php">
					<div class="cad-container">
						<div class="form-column">
							<label for="cpf">CPF:</label><br>
							<input type="text" id="cpf" name="cpf" required inputmode="numeric" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="CPF no formato XXX.XXX.XXX-XX" minlength="14" maxlength="14" placeholder="XXX.XXX.XXX-XX"><br><br>

							<label for="nom">Nome:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Informe o nome completo"><br><br>
										
							<label for="gen">Gênero:</label><br>
							<select id="gen" name="gen" required>
								<option value="" disabled selected hidden>Informe o gênero</option>
								<option value="masculino">Masculino</option>
								<option value="feminino">Feminino</option>
								<option value="outro">Outro</option>
							</select><br><br>

							<label for="idd">Idade:</label><br>
							<input type="number" id="idd" name="idd" required min="14" max="99" placeholder="Informe a idade"><br><br>
						</div>
						
						<div class="form-column">
							<label for="tel">Celular:</label><br>
							<input type="text" id="tel" name="tel" required inputmode="numeric" pattern="\(\d{2}\) \d{5}-\d{4}" title="Celular no formato (XX) XXXXX-XXXX" minlength="15" maxlength="15" placeholder="(XX) XXXXX-XXXX"><br><br>
										
							<label for="ema">Email:</label><br>
							<input type="email" id="ema" name="ema" required placeholder="exemplo@email.com"><br><br>
										
							<label for="sal">Salário:</label><br>
							<input type="number" id="sal" name="sal" required inputmode="numeric" step=".01" min="1320.00" placeholder="Informe o salário do colaborador"><br><br>

							<label for="fun">Cargo / Função:</label><br>
							<input type="text" id="fun" name="fun" required placeholder="Função / Cargo inicial"><br><br>
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