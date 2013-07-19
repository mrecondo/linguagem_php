<?php
include 'functions.php';
// laços (for,while,do..while,foreach)

// for
for ($i=0; $i < 10; $i++) { 
	echo "ola for $i".linha();
}

// while (testa sempre antes de entrar no bloco)
$j = 11;
while ($j <= 10) {
	echo "ola while $j".linha();
	$j++;
}

// do..while (executa ao menos uma vez antes de testar)
$k = 11;
do {
	echo "ola do..while $k".linha();
	$k++;
} while ($k <= 10);

// foreach
$teste = array('id' => 123, 'nome' => 'fulano', 'email' => 'fulano@bla');
foreach ($teste as $key => $value) {
	echo "$key: $value".linha();
}







?>