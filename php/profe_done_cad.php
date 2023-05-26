<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Professor(a) cadastrado(a)";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header;?>
        <?php
            $cpf=$_POST['cpf'];
            $nom=$_POST['nom'];
            $gen=$_POST['gen'];
            $idd=$_POST['idd'];
            $tel=$_POST['tel'];
            $ema=$_POST['ema'];
            $sal=$_POST['sal'];
            $fad=$_POST['fad'];
            $sql = "INSERT INTO professores(cpf,nom,gen,idd,tel,ema,sal,fad) VALUES ('$cpf','$nom','$gen','$idd','$tel','$ema','$sal','$fad')";
            $con = mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " .  mysqli_connect_error();
				die();
			}
            mysqli_query($con,$sql);
            mysqli_close($con);
        ?>
        <div class="middle-container">
            <div class="title-container">
                <h2>Professor(a) cadastrado(a) com sucesso!</h2>
            </div>
        </div>
        <?php echo $footer;?>
    </body>
</html>