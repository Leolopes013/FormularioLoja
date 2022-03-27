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
		<form action="grava_funcionarios.php" method="POST">
			<h1><center>Cadastro de funcionarios</center></h1>
			<div>
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome" placeholder="Digite aqui seu nome"/>
			</div>
			<div>
				<label for="endereco">Endereço:</label>
				<input type="text" id="endereco" name="endereco" placeholder="Digite aqui seu endereço" />
			</div>
			<div>
				<label for="bairro">Bairro:</label>
				<input type="text" id="bairro" name="bairro" placeholder="Digite aqui seu bairro"/>
			</div>
			<div>
				<label for="cidade"> Cidade</label>
				<input type="text" name="cidade" id="cidade"/>
		</div>
		<div>
				<label for="telefone">Telefone:</label>
				<input type="text" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx" />
		</div>
			<div>
				<label for="cpf">CPF:</label>
				<input type="text" id="cpf" name="cpf" placeholder="xxx.xxx.xxx.xx" />
			</div>
			<div>
				<label for="rg">RG:</label>
				<input type="text" id="rg" name="rg" placeholder="xx.xxx.xx-x" />
			</div>
			<div>
				<label for="email">E-mail:</label>
				<input type="email" id="email" name="email" placeholder="example@youremail.com"/>
			</div>
			<div>
				<label for="nasc">Data de Nascimento:</label>
				<input type="nasc" id="nasc" name="nasc" />
			</div>
			
			<div class="button">
				<button type="submit">Salvar</button>
			</div>
		</form>
	</body>
</html>