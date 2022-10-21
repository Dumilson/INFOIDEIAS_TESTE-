<?php

use SRC\Funcoes;

require_once 'src/funcoes.php';

$object = new Funcoes();
$data = $object->SeculoAno(1700);
echo "Seculo: ".$data;
