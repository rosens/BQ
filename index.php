<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/10/2015
 * Time: 3:24
 */

include_once('Class/quiniela.php');

$quini = quiniela::generate();

for ($i = 0; $i < 15; $i++) {
    $mostrar = $quini[$i];

    echo "$quini[$i] <br />";
}

?>