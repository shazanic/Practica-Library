<?php

require_once "collection.php";
require_once "books.php";
require_once "videos.php";
require_once "recurs.php";

$c = new collection();

$c->addItem(new book("l", "llibre1", "autor", "15/01/2005", false, 400, 1212122));
$c->addItem(new book("l", "llibre2", "autor", "21/11/2004", true, 800, 434343));
$c->addItem(new videos("v", "video1", "autor", "18/07/2007", false, "vhs"));
$c->addItem(new videos("v", "video2", "autor", "10/02/2000", false, "dvd"));

$pruebas = new provaCataleg();
$pruebas->imprimirRecurs($c);
$pruebas->imprimir_recurs($c, "l");
$pruebas->presta_Recurs($c, "llibre1");
$pruebas->presta_Recurs($c, "video1");
$pruebas->imprimiren_prestec($c);
?>

<?php

class provaCataleg {

    public function imprimirRecurs($c) {
        foreach ($c->keys() as $key) {
            $hola = $c->getItem($key);
            echo $hola->imprimirRecurs($c);
        }
    }

    public function imprimiren_prestec($c) {
        echo "<br>"."EN PRESTEC"."<br>";
        foreach ($c->keys() as $key) {
            $hola = $c->getItem($key);
            if($hola->geten_prestec()==true){
            echo $hola->imprimirRecurs($c);
        }
    
        }
    }

    public function imprimir_recurs($c, $tipus) {
        echo "<BR>"."RECURSOS"."<BR>";
        foreach ($c->keys() as $key) {
            $hola = $c->getItem($key);
            if ($hola->getTipus() == $tipus) {


                echo $hola->imprimirRecurs($key);
            }
        }
    }

    public function presta_Recurs($cataleg, $recurs) {
         echo "<BR>"."PRESTAR RECURSOS"."<BR>";
        foreach ($cataleg->keys() as $recursos) {
            $var = $cataleg->getItem($recursos);
            if (($var->getTitol() == $recurs)and ( $var->geten_prestec() == false)) {
                echo $var->setEn_prestec(true);
            }
        }
    }

}
?>