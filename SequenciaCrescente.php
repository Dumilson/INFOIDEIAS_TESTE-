<?php

use SRC\Funcoes;

require_once 'src/funcoes.php';

$object = new Funcoes();
$data = $object->SequenciaCrescente([0, 2, 3, 4, 99, 5, 6]);
echo "Seculo: ".$data;
