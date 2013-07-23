<?php
session_start();
include '../functions.php';
// recebe e processa os dados do formulário
echo debug_a($_POST);
// echo htmlspecialchars('<script>alert("ola");</script><h1>mais texto');
// echo htmlentities('<script>alert("ola");</script><h1>mais texto');
// echo strip_tags('<script>alert("ola");</script><h1>mais texto');
$erro = 0;
$msg = "";
foreach ($_POST as $campo => $valor) {
	if (!valida($campo,$valor,$msg)) {
		$erro++;
	}
	echo "<strong>$campo</strong>: $valor<br />";
}

if ($erro > 0) {
	// verifica mensagem e devolve para usuário;
	$msg = "Foram encontrados problemas no formulário. Revise.";
	$_SESSION['dados'] = $_POST;
	$_SESSION['msg'] = $msg;
	header('Location: cadastro.php');
} else {
	// prepara query para gravar dados no BD;
	// envia "ok" para usuário
	$msg = "Obrigado pelo seu cadastro.";
	$_SESSION['msg'] = $msg;
	header('Location: cadastro.php');

}
echo "$erro<br />";
echo "$msg";

?>