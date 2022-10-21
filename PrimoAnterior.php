<?php

use SRC\Funcoes;

require_once 'src/funcoes.php';

$object = new Funcoes();
$data = $object->PrimoAnterior(10);
echo "Primo Anterior: ".$data;
