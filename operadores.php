<?php


/* OPERADOR Null Coalescing : ignora os null e mostra só o que existe*/
 $sol = NULL;
 $lua = NULL;
 $star = 10;

echo $sol ?? $lua ?? $star;


exit;

  /*************** OPERADOR SPACESHIP **********
  * 1 -> A > B
    0 -> A == B
    -1 -> A < B
  **
  
$A = 100;
$B = 34;
echo "A é maior que B, portanto>". " ";
var_dump($A <=> $B);
exit;
 /*************** OPERADORES **********
  * = -> atribuição
    == -> compara o valor (igualdade de valor)
    === -> compara o tipo (igualdade de identidade)
  **/


$var1 = "bola";
$var2 = "bola";



echo "as variasveis são iguais?". " ";
var_dump( $var1 == $var2);
echo "<br/>";

var_dump($var1);
echo "<br/>";


var_dump($var2);
echo "<br/>";

var_dump($var1 === $var2);
echo "<br/>";

echo "as variasveis são diferentes?". " ";
var_dump( $var1 != $var2);
echo "<br/>";


?>
