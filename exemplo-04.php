<html>
<body>
<?php

//Na url acrescentar o ?a=123 no final
//http://localhost/projeto/exemplo-04.php?a=123

$nome = (int)$_GET["a"];
//var_dump($nome);

//server para pegar informações na maquina 
$ip = $_SERVER["REMOTE_ADDR"]; //AQUI O ip
$arquivo = $_SERVER["SCRIPT_NAME"]; //AQUI O NOME DO ARQUIVO 
echo $ip;
echo $arquivo;

?>
</html>
</body>
