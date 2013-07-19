<?php
include 'functions.php';
// tipos de dados
// ======================================
// String
$nome = "Fulano";
$cpf = "98561244755";
$email = 'fulano@gmail.com';

// Numéricos
$idade = 20; //inteiro
$preco = 10.99; //ponto flutuante
$valor = 1.2e3;
$valor2 = 7E-10;

$mem = 0x1A; //hexadecimal
$mem2 = 0123; //octal
$mem3 = 0b01; //binário

// Lógicos/Booleanos
$logado = True;
$admin = False;

// Exemplos
$n1 = 10;
$n2 = 20.9;
$res = $n1 + $n2;
settype($res, 'double');
echo (string) $res;
echo gettype($res);

echo "<hr />";

// Coleções: Arrays/Vetores
// tipos:
//  - indexado (índice numérico)
//  - associativo (pares de chave/valor)

// método 1:
$meses = array('Jan','Fev','Mar','Abr');
$pessoa = array(0 => 123, 'nome' => 'fulano', 'email' => 'fulano@bla');
// método 2:
$meses2[] = 'Jan';
$meses2[] = 'Fev';
$pessoa2['id'] = 456;
$pessoa2['nome'] = 'beltrano';

echo sizeof($meses)."<br />";
echo "$meses[0]<br />";
echo $pessoa[0]."<br />";

// Coleções: Matrizes
$matriz[0][0] = "teste";
$matriz[0][1] = "outro";
$matriz[0][2] = "mais um";
$matriz[1][0] = "mais teste";
$matriz[1][1] = "outro teste";
$matriz[1][2] = "etc";

debug_a($matriz);

echo "<hr />";
// Coleções: Listas
list($mes1,$mes2,$mes3) = $meses;
echo $mes1;
// Objetos
  // ver classes.php
// Outros
  // aguardar

?>