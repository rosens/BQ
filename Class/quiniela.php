<?php


/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/10/2015
 * Time: 2:56
 */
class quiniela
{


    public static function generate(){

        $arrayQuiniela = array();

        $contador1 = 0;
        $contador2 = 0;
        $contadorX = 0;
        $cont = 0;

        //For de Generaci�n
        do {

            //Reseteo cont
            if ($cont > 14) {
                $cont = 0;
                $contador1 = 0;
                $contador2 = 0;
                $contadorX = 0;
            }


//            for ($i=0; $i < 15; $i++) {
//
//                $generado = rand(1,3);
//
//                switch ($generado) {
//
//                    case 1:
//                        $contador1 ++;
//                        break;
//
//                    case 2:
//                        $contador2 ++;
//                        break;
//
//                    case 3:
//                        $generado = "X";
//                        $contadorX ++;
//                        break;
//                }
//
//                $arrayQuiniela[$i] = $generado;
//            }

            $generado = rand(1,3);

                switch ($generado) {

                    case 1:
                        $contador1 ++;
                        break;

                    case 2:
                        $contador2 ++;
                        break;

                    case 3:
                        $generado = "X";
                        $contadorX ++;
                        break;
                }

            $arrayQuiniela[$cont] = $generado;


            $cont++;


        }while (($contadorX % 2 != 0) || !($contador1 > $contador2) || ($contador2 < 1) || ($cont < 14));

        return $arrayQuiniela;
    }
}

?>