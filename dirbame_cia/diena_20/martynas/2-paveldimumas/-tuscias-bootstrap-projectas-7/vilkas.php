<?php

require_once('gyvunas.php');
/**
 *
 */
class Vilkas extends Gyvunas
{
    public $tipas='pilkas';

    public function printLigos(){
        echo $this->ligos;
    }

// public function printPusryciai(){
//     echo $this->pusryciai;
// }


};


 ?>
