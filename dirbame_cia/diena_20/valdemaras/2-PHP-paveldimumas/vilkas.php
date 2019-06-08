<?php

/**
 *
 */
 require_once('gyvunas.php');
class Vilkas extends Gyvunas
{
public $tipas = "ilgaplaukis";
public function printligos(){
    echo $this->ligos;
}

}
