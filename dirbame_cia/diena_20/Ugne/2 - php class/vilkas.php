<?php

require_once('gyvunas.php');

class Vilkas extends Gyvunas
{

 public $tipas = 'Naminis';
 public function printLigos(){
   echo $this->$ligos;
 }
 public function printPusryciai(){
   echo $pusryciai;
 }
}


?>
