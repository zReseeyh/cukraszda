<?php
class Torta
{
    public $torta_kep;
    public $torta_nev;
    public $torta_ar;
    public $torta_leiras;
    public $kategoria;
    public $meret;
    public $elerhetoseg;
    public $allergenek;

    public function __construct($torta_kep, $torta_nev, $torta_ar, $torta_leiras, $kategoria, $meret, $elerhetoseg, $allergenek)
    {
        $this->homekep = $torta_kep;
        $this->nev = $torta_nev;
        $this->ar = (int)$torta_ar;
        $this->leiras = $torta_leiras;
        $this->kategoria = $kategoria;
        $this->meret = $meret;
        $this->elerhetoseg = $elerhetoseg;
        $this->allergenek = $allergenek;

    }
}
?>