<?php
/**
 *
 */
class Automobilis // vadinamas kaip failo pavadinimas kuris prasideda is didziosios raides
{
    // function __construct(argument) //visada slaptai pasileidzia. Gali padaryt defaultinis reiksmes.
    // {
    //     // code...
    // }
    public $spalva = ""; //paliekam galimybe nurodyt spalva. Iniacilizacija - nurodom, kad bus stringas.
    private $kebuloNumeris = "XRZ";
    protected $variklis = "D4.3"; // pvz dedam kiekvienam modeliui tapati varikli, tai tada ji naudojam kaip protected nes jis jau buvo sugalvotas. Jis veiks jeigu paveldes klase. Private neveiks jeigu paveldes. Jos iskviesti uz klases ribu neimanoma.
    // funkcijos by default yra openssl_get_publickey
    function vaziuoti($km) {
        echo $this->kebuloNumeris . " Liko nuvaziuoti $km <br />";
        //su $this islipi is funkcijos ir ieskai klasiu auksciau. Privatus kintamieji gali buti naudojami tik klases viduje. Jie negali buti paveldeti.
    }
}
// TOLIAU KODINT YRA DRAUDZIAMA. TOKS SUSITARIMAS.
