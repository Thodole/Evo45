<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <head>
        <?php
            $title="Cadastro de plano / contrato";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header;?>
        <div class="cad-body">
            <div class="title-box">
            <h2>Cadastro de plano / contrato</h2>
				<form method="POST" action="./plano_done_cad.php">
					<br>
					<div class="cad-container2">
						<div class="form-column">
							<label for="nom">Nome do plano:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Nome descritivo do plano"><br><br><br>
							<label for="dvm">Desc. do plano mensal:</label><br>
							<input type="number" id="dvm" name="dvm" required min="00" max="99" placeholder="Exemplo: Desc. 00%"><br><br><br>
							<label for="dvs">Desc. do p. semestral:</label><br>
							<input type="number" id="dvs" name="dvs" required min="00" max="99" placeholder="Exemplo: Desc. 20%">
						</div><br>
						<div class="form-column">
							<label for="val">Valor do contrato:</label><br>
							<input type="number" id="val" name="val" required inputmode="numeric" step=".01" min="600.00" placeholder="Valor total do plano"><br><br><br>
							<label for="dvt">Desc. p. trimestral:</label><br>
							<input type="number" id="dvt" name="dvt" required min="00" max="99" placeholder="Exemplo: Desc. 10%"><br><br><br>
							<label for="dva">Desc. p. anual:</label><br>
							<input type="number" id="dva" name="dva" required min="00" max="99" placeholder="Exemplo: Desc. 40%">
						</div>
					</div>
					<div class="cad-plan-btn">
						<button class="down-button" type="submit">Cadastrar</button>
					</div>
				</form>
            </div>
        </div>
		<?php echo $footer;?>
    </body>
</html>