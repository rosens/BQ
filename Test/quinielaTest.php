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

        $this->assertInternalType('array', $quiniela);

    }

}
