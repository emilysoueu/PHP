<?php 
 /*************ESTRUTURAS DE CONTROLE E LAÇO DE REPETIÇÃO**************/


 // if, Elseif Else

 // For  ($valor_inicial, $valor_final, $incremento)

 // Foreach
$meses = array(
    "Janeiro","Fevereiro","Março",
    "Abril","Maio","Junho",
    "Julho","Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
    echo "Indice: ". $index;
    echo "o mês é: ". $mes . "<br/>";
}





 // While

 // Operador Ternário
/*
 echo ($12 < $18)? "Menor de Idade" : "Maior de Idade";*/
// a condição é verdadeira ? se sim execute X : se não execute Y.

//Switch Case { case 1: executa instrução. break;  deafult:  break;}


?>
