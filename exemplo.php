<?php

require_once "vendor/autoload.php";
use Dxs\CepClass\Search;

$busca = new Search;

$resultado = $busca->getAdrressFromZipCode('01001000');

print_r($resultado);

?>