<?php
class Automobilis
{
    public $spalva = ""; //kiekvienas programuotojas pasirinks, ives kokia
    private $kebuloNumeris = "XXXXXXX";
    protected $variklis = "D3.2"; //visos musu auto bus tik tokio litrazo

    public function vaziuoti($km){
        echo $this->kebuloNumeris."Liko vaziuoti $km <br />";
    }
}
