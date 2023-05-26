<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Aluno(a) cadastrado(a)";
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
            $pln=$_POST['pln'];
            $tmp=$_POST['tmp'];
            $sql = "INSERT INTO alunos(cpf,nom,gen,idd,tel,ema,pln,tmp) VALUES ('$cpf','$nom','$gen','$idd','$tel','$ema','$pln','$tmp')";
            $con = mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno())
              {  echo "Failed to connect to MySQL: " .  mysqli_connect_error();}
            mysqli_query($con,$sql);
            mysqli_close($con);
        ?>
        <div class="middle-container">
            <div class="title-container">
                <h2>Aluno(a) cadastrado(a) com sucesso!</h2>
            </div>
        </div>
        <?php echo $footer;?>
    </body>
</html>