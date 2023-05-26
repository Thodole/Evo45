<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Listagem de professores";
            include 'repetition.php';
            echo $head;
        ?>
    </head>
    <body>
        <?php echo $header;?>
        <?php
            $con=mysqli_connect("localhost","root","","evo45");
            if (mysqli_connect_errno())  {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
				die();
            }
           $result = mysqli_query($con,"SELECT * FROM professores");
        ?>
        <div class="table-container">
	   		<table>
		   		<thead>
		   			<th>CPF</th>
		   			<th>Nome</th>
		   			<th>Gênero</th>
                    <th>Idade</th>
		   			<th>Telefone</th>
		   			<th>E-mail</th>
		   			<th>Salário</th>
		   			<th>Outras Fuções</th>
		   			<!-- <th colspan="2"></th> -->
		   		</thead>
		       	<?php while($row = mysqli_fetch_array($result)){ ?>
					<tr style="text-align: center">
				   		<td><?php echo $row['cpf']; ?></td>
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['gen']; ?></td>
						<td><?php echo $row['idd']; ?></td>
			            <td><?php echo $row['tel']; ?></td>
			            <td><?php echo $row['ema']; ?></td>
				        <td><?php echo $row['sal']; ?></td>
				        <td><?php echo $row['fad']; ?></td>
						<td>
							<form action="./profe_form_alt.php" method="POST">
								<input type="hidden" name="id" value="
                                    <?php echo $row["ID"];?>"/>
                                <button type="submit" name="btn_alt" value="ok">
                                    Alterar
                                </button>
							</form>
						</td>
                        <td>
							<form action="./profe_dlt.php" method="POST">
								<input type="hidden" name="id" value="
                                    <?php echo $row["ID"];?>"/>
                                <button type="submit" name="btn_del" value="ok">
                                    Deletar
                                </button>
							</form>
						</td>
					</tr>
				<?php } mysqli_close($con);?>
	    	</table>
		</div>
        <?php echo $footer;?>
    </body>
</html>