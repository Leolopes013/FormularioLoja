<?php
	@$cidade = $_POST["cidade"]; 
	@$estado = $_POST["estado"];
	
	// Cria uma conecção
	$con = mysqli_connect("localhost", "root", "", "loja_bd");

	// verifica a conecção
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}

	//insere os dados na tabela clientes
	$query = "INSERT INTO cidades_tb (id_cidades,cidade,estado) 
			  VALUE(null, '$cidade','$estado')";

	$result = mysqli_query($con, $query);
		
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>
<button onclick="history.go(-1);">Voltar</button>
<button>
	<a href="lista_cidades.php">Listar cidades</a>
</button>