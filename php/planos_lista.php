<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $title="Lista de planos";
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
           $result = mysqli_query($con,"SELECT * FROM planos");
        ?>
        <div class="table-container">
	   		<table>
		   		<thead>
		   			<th>Nome</th>
		   			<th>Valor total</th>
                    <th>Mensalidade</th>
		   			<th>Mensal. pl. tri.</th>
		   			<th>Mensal. pl. sem.</th>
		   			<th>Mensal. pl. anu.</th>
		   			<!-- <th colspan="2"></th> -->
		   		</thead>
		       	<?php while($row = mysqli_fetch_array($result)){ $val = $row['val'];?>
					<tr style="text-align: center">
						<td><?php echo $row['nom']; ?></td>
						<td><?php echo $row['val']; ?></td>
						<td><?php
								/* number_format accepts the 1st parameter as a number, and 2nd is a decimal after zero */
								echo number_format(
										($val-(
											// desconto em porcentagem mensal
											$val*(
												$row['dvm']!= 0? $row['dvm']/100: 0
											)
										)
									)/12, 2
								);
							?></td>
			            <td><?php echo number_format(($val-($val*($row['dvt']/100)))/12, 2); ?></td>
			            <td><?php echo number_format(($val-($val*($row['dvs']/100)))/12, 2); ?></td>
				        <td><?php echo number_format(($val-($val*($row['dva']/100)))/12, 2); ?></td>
						<td>
							<form action="./plano_form_alt.php" method="POST">
								<input type="hidden" name="id" value="
                                    <?php
                                        echo $row["ID"];
                                    ?>"/>
                                <button type="submit" name="btn_alt" value="ok">Alterar</button>
							</form>
						</td>
                        <td>
							<form action="./plano_dlt.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $row["ID"];?>"/>
                                <button type="submit" name="btn_del" value="ok">Deletar</button>
							</form>
						</td>
					</tr>
				<?php } mysqli_close($con);?>
	    	</table>
		</div>
        <?php echo $footer;?>
    </body>
</html>