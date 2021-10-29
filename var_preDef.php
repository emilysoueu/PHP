<?php
/********************** Variáveis pré definidas ou arrays super globais. ****************************
 
São variáveis internas do php que já vem com alguns recursos.
-> Informações externas: informações do usuário ex: formulário
-> Informações do ambiente: Também conhecida como super globais, podendo ser acessadas de qualquer ponto do php
*/



$ip = $_SERVER["REMOTE_ADDR"]; // mostra o ip de provedor de acesso do usuário.

echo $ip;
echo "<br/>";

$ip2 = $_SERVER["SCRIPT_NAME"]; // mostra o log de acesso;
echo $ip2;
echo "<br/>";

$var = "pastor";

function desafio(){
   $var = "desafio insano";
    echo $var;
}

desafio();


/** Outros exemplos das super globais:
 * $_POST
 * $_SECTION
 * 
 * 
 */


exit;

$nome = $_GET["a"];
$nome2 = $_GET["b"];

var_dump($nome);
var_dump($nome2);
// cast = conversão de dados
$nome = (int)$_GET["a"]

// enviar mais de uma informação via get add &

/* INFORMAÇÕES SOBRE URL 
* Toda barra de endereço o nome é URL = uniforme resource locator
* ou seja, conjunto de informações que eu preciso para ir para um derterminado local.
URL é divida em várias partes, essas informações são chamadas URI.
HTTP é uma URI, ou seja, uma parte de URL.
HTTPS, ambiente criptografado, um tipo de URI.
.com ou .org também são URI,
URI = Uniforme Resource Indentifiers, parte da URL que identificam alguma coisa.
PADRÃO = PROTOCOLO + DOMÍNIO + PATH + QUERY STRING.
*/



?>
