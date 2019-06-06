<?php

 /**
  *
  */
 class Automobilis
 {
     public $spalva = "";
     private $kebuloNumeris = "xxxxxx";
     protected $variklis = "D3.2";
     function vaziuoti($km){
         echo $this->kebuloNumeris."Liko nuvaziuoti $km <br />";
     }
 }
