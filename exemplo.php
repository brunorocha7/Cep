<?php

require_once "vendor/autoload.php";

use \bruno\cep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('03951220');

print_r($resultado);