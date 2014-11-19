<?php

include_once "recurs.php";

class book extends recurs {

    private $numPlanes;  //int
    private $isbn; //int

    function __construct($tipus, $titol, $autor, $DataPublicacio, $en_prestec, $numPlanes, $isbn) {
        parent::__construct($tipus, $titol, $autor, $DataPublicacio, $en_prestec);
        $this->numPlanes = $numPlanes;
        $this->isbn = $isbn;
    }

    function getNumPlanes() {
        return $this->numPlanes;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function setNumPlanes($numPlanes) {
        $this->numPlanes = $numPlanes;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
    public function imprimirRecurs() {
        $resumen = parent::imprimirRecurs();
        $resumen .= "Num. paginas: " . $this->getNumPlanes() . "<br>" . "ISBN: " . $this->getisbn() . "<br>";
        return $resumen;
    }

}
?>


