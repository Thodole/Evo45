<?php		
	// Salva duas variáveis com os atributos vindos da página de login
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	// Conecta ao banco de dados, através das informações passadas
	$con=mysqli_connect("127.0.0.1","root","","evo45");
	
	// Exibe mensagem de falha, se não houver conexão com o banco de dados
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " .  mysqli_connect_error();
		die();
	}

	// Prepara e executa a query (SQL) que verifica se os dados estão corretos
	$sql = "SELECT * FROM usuarios WHERE usu='$username' AND sen='$password'";
	
	// Guarda os resultados em uma variável chamada "result"
	$result = mysqli_query($con, $sql);

	// Verifica se a query retornou usuário e senha compatíveis
	if (mysqli_num_rows($result) > 0) {
		
		// Autenticação bem-sucedida: fecha a conexão com o banco de dados e redireciona para a página 'index.html'
		mysqli_close($con);
		header("Location: ./index.php");
		
		// Chama imediatamente a função 'exit()' para prevenir demais execuções de código.
		exit();
	} else {
		
		// Falha na autenticação: fecha a conexão com o banco de dados e redireciona para a página 'falha_aut.html'
		mysqli_close($con);
		header("Location: ../html/falha_aut.html");
		
		// Chama imediatamente a função 'exit()' para prevenir demais execuções de código.
		exit();
	}
?>