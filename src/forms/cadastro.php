<?php 
session_start();
include '../functions.php';
if (isset($_SESSION['dados'])) {
	extract($_SESSION);
}
// print_r($dados);
?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Empresa - Novo Cadastro</title>
</head>
<body>
	<!-- cabeçalho -->
	<div class="header">
		<div class="logo"><h1>Empresa</h1></div>
		<div class="menu">
			<ul class="nav">
				<li><a href="/">Home</a></li>
				<li><a href="#">Cadastro</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
		</div>
	</div>
	<!-- conteúdo -->
	<div class="content">
		<div class="form">
				<?php
					if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
						echo "<div class='erro'>".$_SESSION['msg']."</div>"; 
					}
				?>
			<h2>Cadastre-se</h2>
			<form action="p_cadastro.php" method="post" id="cadastro">
				<p>
					<label for="nome">Nome:</label><br />
					<input type="text" name="nome" id="nome"
	value="<?php echo isset($dados['nome'])?$dados['nome']:""; ?>">
				</p>
				<p>
					<label for="usuario">Usuário:</label><br />
					<input type="text" name="usuario" id="usuario"
	value="<?php echo isset($dados['usuario'])?$dados['usuario']:""; ?>">
				</p>
				<p>
					<label for="senha">Senha:</label><br />
					<input type="password" name="senha" id="senha">
				</p>
				<p><input type="submit" value="Enviar"></p>
			</form>
		</div>
	</div>
	<!-- rodapé -->
	<div class="footer">
		<div class="sobre">
			Site desenvolvido em PHP e HTML5. Unisinos 2013
		</div>
	</div>
	<?php session_destroy(); ?>
</body>
</html>