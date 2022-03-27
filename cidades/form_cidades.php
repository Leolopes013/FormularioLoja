<html	lang="pt-BR">
	<head>
		<meta	charset="utf-8">
		<title>
			Clientes
		</title>
	
		<link rel="stylesheet" type="text/css" href="../css/formatacaoex.css" media="screen"/>
		</head>
	<body>
		<header>
			<nav id="menu">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../clientes/form_clientes.php">Clientes</a></li>
					<li><a href="../produtos/form_produtos.php">Produtos</a></li>        
					<li><a href="../cidades/form_cidades.php">Cidades</a></li>
					<li><a href="../funcionarios/form_funcionarios.php">Funcionários</a></li>
				</ul>
			</nav>
		</header>
		<form action="grava_cidades.php" method="POST">
			<h1><center>Cadastro de cidades</center></h1>
			<div>
				<label for="cidade"> Cidade</label>
				<input type="text" name="cidade" id="cidade"/>
		</div>
		<div>
				<label for="estado">uf:</label>
				<input type="text" id="estado" name="estado"/>
		</div>
			
			<div class="button">
				<button type="submit">Salvar</button>
			</div>
		</form>
	</body>
</html>