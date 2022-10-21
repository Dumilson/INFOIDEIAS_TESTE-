<?php

use SRC\Funcoes;

require_once 'src/funcoes.php';

$object = new Funcoes();
$data = $object->SequenciaCrescente([1, 2, 3, 4, 4, 5, 5]);
 var_dump($data);
