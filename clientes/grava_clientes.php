<?php
	@$nome = $_POST["nome"];
	@$endereco = $_POST["endereco"];
	@$bairro = $_POST["bairro"];
	@$cidade = $_POST["cidade"]; 
	@$telefone = $_POST["telefone"];
	@$cpf = $_POST["cpf"];
	@$rg = $_POST["rg"];
	@$email = $_POST["email"];
	@$nasc = $_POST["nasc"];
	

	// Cria uma conecção
	$con = mysqli_connect("localhost", "root", "", "loja_bd");

	// verifica a conecção
	if (!$con) {
		die("Conexão com falha: " . mysqli_connect_error());
	}

	//insere os dados na tabela clientes
	$query = "INSERT INTO tb_clientes (id_clientes, nome, endereco, bairro, cidade, telefone, cpf, rg, email, nasc) 
			  VALUE(null, '$nome', '$endereco', '$bairro', '$cidade', '$telefone', '$cpf', '$rg', '$email', '$nasc')";

	$result = mysqli_query($con, $query);
		
	//fecha a conexão com o banco de dados
	mysqli_close($con);
?>
<button onclick="history.go(-1);">Voltar</button>
<button>
	<a href="lista_clientes.php">Listar clientes</a>
</button>