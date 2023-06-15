<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Cadastro de usuário (admin)";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header;?>
        <div class="cad-body">
            <div class="title-box">
            <h2>Solicitação de acesso administrador</h2>
			<div style="color: yellow;">&#x26A0;</div> <strong>Atenção!</strong>
			<p>Após informar seus dados, entre em contato com o<br>administrador para receber sua autorização de acesso.</p>
				<form method="POST" action="./usuar_done_cad.php">
					<div><br>
						<div class="form-column">
							<label for="nom">Novo usuário:</label><br>
							<input type="text" id="nom" name="nom" required placeholder="Informe o nome de usuário"><br>
						</div>
						<div class="form-column">
							<label for="sen">Senha:</label><br>
							<input type="password" id="sen" name="sen" required placeholder="Informe a senha de usuário"><br><br>
						</div>    
					</div>
					<div>
						<button class="down-button" type="submit">
							<strong>Solicitar</strong>
						</button>
					</div>
				</form>
            </div>
        </div>
		<?php echo $footer;?>
    </body>
</html>