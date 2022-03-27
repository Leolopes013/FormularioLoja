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
		<form action="grava_produtos.php" method="POST">
			<h1><center>Cadastro de produtos</center></h1>
			<div>
				<label for="descricao"> descrição</label>
				<input type="text" name="descricao" id="descricao"/>
		</div>
			<div>
				<label for="fabricante">fabricante:</label>
				<input type="text" id="fabricante" name="fabricante"/>
		</div>
		<div>
				<label for="marca">marca:</label>
				<input type="text" id="marca" name="marca"/>
		</div>
		<div>
				<label for="preco">preço:</label>
				<input type="number" id="preco" name="preco"/>
		</div>
		<div>
				<label for="cor">cor:</label>
				<input type="color" id="cor" name="cor"/>
		</div>
		<div>
				<label for="tamanho">tamanho:</label>
				<input type="text" id="tamanho" name="tamanho"/>
		</div>
			
			<div class="button">
				<button type="submit">Salvar</button>
			</div>
		</form>
	</body>
</html>