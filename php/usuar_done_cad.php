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
            $conect_sql = mysqli_connect("localhost","root","","evo45");
			$insert_sql = "INSERT INTO usuarios(tmp,sen) VALUES ('$nom','$sen')";
            $search_sql = "SELECT * FROM usuarios WHERE usu='$nom' OR tmp='$nom'";
            if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " .  mysqli_connect_error();
				die();
			} else {
				$result_sql = mysqli_query($conect_sql, $search_sql);
				if (mysqli_num_rows($result_sql) > 0) {
					echo $recad;
				} else {
					mysqli_query($conect_sql,$insert_sql);
            		mysqli_close($conect_sql);
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
