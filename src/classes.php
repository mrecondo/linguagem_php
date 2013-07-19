<?php
// classes
$var = 10;
echo gettype($var)."<br />";
$var = (string) $var;
echo gettype($var)."<br />";

$nao_objeto = array('id' => '123', 'nome' => 'fulano');
echo gettype($nao_objeto)."<br />";

$objeto = (object) $nao_objeto;
echo gettype($objeto)."<br />";

echo "<br />";

echo $objeto->id;
$objeto->metodo_x();
echo get_class($objeto);
?>