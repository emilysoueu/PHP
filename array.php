<?php

$frutas = array("banana","laranja","goiaba","maçã","abacate","uva","pêra","acerola","morango","caju");


#essa função exibe um array e sua estrutura
print_r($frutas);

#todo array inicia em 0 e quando tem apenas uma dimensão é chamado de vetor para ser chamado de array
# propiamente dito é necessário que haja mais de uma dimensão, algoo com obisimensional ou tridimensional


#ARRAY BIDIMENSIONAL

$treino[0][1] = "inferiores";
$treino[0][2] = "agachamento máquina";
$treino[0][3] = "cadeira extensora";
$treino[0][4] = "leg 45";

$treino[1][0] = "superiores";
$treino[1][1] = "tríceps corda";
$treino[1][2] = "desenvolvimento arnold";
$treino[1][3] = "pull up";

echo $treino[1][2];

#MOSTRA A ULTIMA POSIÇÃO DE VALOR DO ARRAY DE TREINO
echo end($treino[0]);


#funções para tratar arrays

?>
