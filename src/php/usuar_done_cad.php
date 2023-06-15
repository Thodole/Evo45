<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Evo45 - Solicitação de acesso admin.";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header;?>
        <?php
            $nom=$_POST['nom'];
            $sen=$_POST['sen'];
			$search_sql = "SELECT * FROM usuarios WHERE usu='$nom' OR tmp='$nom'";
			$insert_sql = "INSERT INTO usuarios(tmp,sen) VALUES ('$nom','$sen')";
			$con = mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " .  mysqli_connect_error();
				die();
			} else {
				$result_sql = mysqli_query($con, $search_sql);
				if (mysqli_num_rows($result_sql) > 0) {
					echo"
                        <div class=\"middle-container\">
                            <div class=\"title-container\">
                                <h2>Registro de usuário pendente!</h2>
                                <p>Entre em contato com o administrador.</p>
                            </div>
                        </div>
                    ";
				} else {
					mysqli_query($con,$insert_sql);
            		mysqli_close($con);
				}
			}
        ?>
        <div class="middle-container">
            <div class="title-container">
                <h2>Solicitação enviada com sucesso!</h2>
				<p>Entre em contato com o administrador.</p>
            </div>
        </div>
        <?php echo $footer;?>
    </body>
</html>