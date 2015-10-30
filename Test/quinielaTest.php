<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/10/2015
 * Time: 4:03
 */

require_once ('/Class/quiniela.php');


class quinielaTest extends PHPUnit_Framework_TestCase
{

    //Prueba Generate1:
    public function testGenerate()
    {
        $quiniela = quiniela::generate();

        $contador1 = 0;
        $contador2 = 0;
        $contadorX = 0;


        for ($i = 0; $i < count($quiniela); $i++) {

            if ($quiniela[$i] == 1) $contador1++;
            if ($quiniela[$i] == 2) $contador2++;
            if ($quiniela[$i] == "X") $contadorX++;
        }


        //Comprueba que haya más unos que doses
        $this->assertTrue(($contador1 > $contador2));

        //Comprueba que haya al menos un dos
        $this->assertTrue(($contador2 > 1));

        //Comprueba que haya X pares
        $this->assertTrue(($contadorX % 2 == 0));

        //Que devuelva array el método
        $this->assertInternalType('array', $quiniela);

    }

}
