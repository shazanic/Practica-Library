<?php
require_once "collection.php";
 
class Book
{
        private $name;
        private $author;
	private $pages;
	private $ISBN;
	private $edition;
 
    public function __construct($name, $author,	$pages, $ISBN, $edition)
	{
                $this->name    = $name;
                $this->author  = $author;
		$this->pages   = $pages;
		$this->ISBN    = $ISBN;
		$this->edition = $edition;
    }
 
    public function __toString() {
        return "Llibre: " .$this->name . " >> Autor: " . $this->author . " >> Num.Planes: " 
		        . $this->pages. " >> ISBN: " . $this->ISBN. " >> Edicio: " . $this->edition;
    }
}
 
$c = new collection();
$c->addItem(new Book("El gos de terracota", "Andrea Camilleri", 271, "978-84-297-7084-1", 1999), "978-84-297-7084-1");
$c->addItem(new Book("La rebel.lio catalana", "Antonio Banyos", 264, "978-84-9930-699-5", 2013), "978-84-9930-699-5");
$c->addItem(new Book("Disseny i creativitat sonora", "Cinto Niqui", 314, "978-84-9788-611-6", 2007), "978-84-9788-611-6");

$c->addItem(new Book("El umbral de la eternidad", "Ken Follett", 1245, "978-84-013-434-90", 2014));
$c->addItem(new Book("La llave del destino", "Glenn Cooper", 317, "978-84-253-492-25", 2012));

foreach ($c->keys() as $key)
{
    echo "La clau es: ".$key;
	echo ('<br/>');
	echo $c->getItem($key);
	echo ('<br/><br/>');
}
 
echo "Esborrem el llibre amb clau 978-84-9788-611-6";
echo ('<br/>');
$c->deleteItem("978-84-9788-611-6");

try {
    $c->getItem("978-84-9788-611-6");
}
catch (KeyInvalidException $e) {
    print "La col.leccio no conte >> " .$e->getMessage();
}