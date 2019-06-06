<?php
class Automobilis
{
  public $spalva = "";
  private $kebulonumeris = "XXXX";
  protected $variklis = "D3.2";

  public function vaziuoti($km){
    echo $this->kebulonumeris . "Liko vaziuoti $km <br />";
  }
}

 ?>
