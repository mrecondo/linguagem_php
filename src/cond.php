<?php
// estrutura de controle condicional (if)
$idade = 22;
$corte = 18;
$sexo = 'm';

if ( ($idade >= $corte) || ($socio == 'y') ) {
	// ação caso verdadeiro
	if ($sexo == 'm') {
		$cracha = 'azul';
	} else {
		$cracha = 'vermelho';
	}
	echo "Seu cracha eh $cracha";
} else {
	// ação caso falso
	$falta = $corte - $idade;
	echo "aguarde $falta anos";
}

echo "<br />Mais informacoes<br />";


// estrutura de controle condicional (switch)
$perfil = 'front';
$saudacao = "Bem vindo ";

switch ($perfil) {
	case 'adm':
		echo "$saudacao admin<br />";
		break;

	case 'front':
		echo "$saudacao usuario<br />";
		break;

	case 'editor':
		echo "$saudacao editor<br />";
		break;
	
	default:
		echo "ops<br />";
		break;
}

// implementação alternativa
switch (true) {
	case $idade <= 18:
		echo "menor<br />";
		break;

	case $idade > 18 && $idade <= 25:
		echo "junior<br />";
		break;

	case $idade > 25:
		echo "senior<br />";
		break;
	
	default:
		echo "ops<br />";
		break;
}

?>