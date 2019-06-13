<?php
require_once('gyvunas.php');

class Vilkas extends Gyvunas {

    public $tipas = "keturkojis";

    public function printLigos(){
        echo $this->ligos; //islipa is funkcijos, tampa globaliu
    }
}


 ?>
