<?php
/* operadores
	- aritméticos
	  + - * / %
	- lógicos
	  ! (não) && (e) || (ou)
	- string
	  .
	- de comparação
	  < > == === <= >= <> !=
	- atribuição
	  = += -= *= /= %= .=
	- de incremento/decremento
	  ++ --
	- etc
	  `comando` -> execução
*/

// incremento pré e pós
$num = 30;
echo $num++, ++$num, $num--, --$num;

// operador de execução
$saida = `date`;
echo "<pre>$saida</pre>";

// operador lógico
$var1 = True;
$var2 = False;
echo $var1 && $var2;

// atribuição com soma
$teste = 0;
$teste = $teste + 10;
$teste += 10;

// atribuição com contatenação
$msg = "$nome, ";
$msg.= "seu cadastro foi efetuado com sucesso.";
$msg.= "acesse seu perfil no seguinte link: ";

?>