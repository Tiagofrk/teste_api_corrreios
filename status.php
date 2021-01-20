<?php

include('index.php');
 // Para buscar o status do objeto , basta enviar uma requisição
 // para o arquivo " apicorreios.php " dentro de " api " .
 // O arquivo " apicorrios.php " buscara o status do objeto no próprio site dos correios

 


 $obj =$_POST['cod'];
 $url = "http://localhost/correios/apicorreios.php?obj={$obj}";
 $rastreio = json_decode(file_get_contents($url));

 echo '<pre>';
 var_dump($rastreio);




?>