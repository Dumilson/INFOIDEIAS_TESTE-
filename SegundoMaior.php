<?php

use SRC\Funcoes;

require_once 'src/funcoes.php';

$object = new Funcoes();
$data = $object->SegundoMaior(array(
    array(25, 22, 18),
    array(10, 75, 70),
    array(24, 5, 2),
    array(80, 17, 15)
));

echo "Segundo Maior : " . $data;
