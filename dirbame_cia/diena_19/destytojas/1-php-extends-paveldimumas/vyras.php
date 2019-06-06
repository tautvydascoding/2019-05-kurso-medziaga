<?php
require_once('zmogus.php');

class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    // UZDUOTIS 1.
    // susikurti f-jas kurios :
    // 1. pakeicia 'testosterono' kieki
    // 2. isveda 'testosrerono' kieki
    public function setTestosteronas($t) {
        $this->testosteronas = $t;
    }
    public function printTestosteronas( ) {
        echo $this->testosteronas;
    }
    public function getTestosteronas( ) {
        return $this->testosteronas;
    }
    public function printVyroDuomenys() {
          echo $this->testosteronas  . "<br />";
          echo $this->ugis  . "<br />";
          echo $this->turtas  . "<br />";
          // echo $this->pusryciai  . "<br />";     // Error: privatus jo nepaveldime
    }
    public function printPusryciai222() {
        $this->printPusryciai();
    }
}
