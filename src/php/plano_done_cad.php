<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Plano cadastrado";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
	    <?php echo $header;?>
        <?php
            $nom=$_POST['nom'];
            $val=$_POST['val'];
            $dvm=$_POST['dvm'];
            $dvt=$_POST['dvt'];
            $dvs=$_POST['dvs'];
            $dva=$_POST['dva'];
            $sql = "INSERT INTO planos(nom,val,dvm,dvt,dvs,dva) VALUES ('$nom','$val','$dvm','$dvt','$dvs','$dva')";
            $con = mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " .  mysqli_connect_error();
				die();
			}
            mysqli_query($con,$sql);
            mysqli_close($con);
        ?>
        <div class="middle-container">
            <div class="title-container"><h2>Plano cadastrado com sucesso!</h2></div>
        </div>
        <?php echo $footer;?>
    </body>
</html>