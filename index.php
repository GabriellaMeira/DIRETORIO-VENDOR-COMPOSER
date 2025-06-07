<?php 

require_once "vendor/autoload.php"; // ajuste o caminho se necessário

use Wead\ZipCode\Search;

$busca = new Search();

print_r($busca->getAddressFromZipcode('03624010'));
