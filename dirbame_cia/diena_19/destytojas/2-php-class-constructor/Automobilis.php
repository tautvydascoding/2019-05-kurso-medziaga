<?php



/**
 *
 */
class Automobilis
{
     public $spalva = "bespalvis";
     private $kebuloNumeris = "XXXXX";
     protected $variklis  = "D3.2";

     public function vaziuoti($km) {
         echo $this->kebuloNumeris . "Liko nuvaziuoti $km <br />";
     }
}
