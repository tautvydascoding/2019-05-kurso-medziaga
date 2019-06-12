<?php

/**
 * extends - paveldi viska public ir viska protected is Gyvunas
 */
 require_once('gyvunas.php');
class  Vilkas extends Gyvunas
{
    public $tipas = 'baltasis';
    public function   printLigos(){
        echo $this->ligos . "<BR />";
    }

}
