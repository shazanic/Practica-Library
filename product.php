<?php

class Producto {  
   protected $id;  
   private $titulo;  
   private $precio;  
   private $nombreAutor;  
   private $apellidosAutor;  
   
   function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor) {  
     $this->id = $id;  
     $this->titulo = $titulo;  
     $this->nombreAutor = $nombreAutor;  
     $this->apellidosAutor = $apellidosAutor;  
     $this->precio = $precio;  
   }  
   public function getId(){  
     return $this->id;  
   }  
   public function getAutor() {  
     return $this->nombreAutor . " " . $this->apellidosAutor;  
   }  
   public function getTitulo() {  
     return $this->precio;  
   }  
   public function getPrecio() {  
     return $this->precio;  
   }  
   protected function getResumen() {  
     $resumen = "Titulo: " . $this->getTitulo() . ", Precio: " . $this->getPrecio();  
     $resumen .= ", Autor: " . $this->getAutor();  
     return $resumen;  
   }  
   public function setId($id) {  
     $this->id = $id;  
   }  
   public function setTitulo($titulo) {  
     $this->titulo = $titulo;  
   }  
   public function setPrecio($precio) {  
     $this->precio = $precio;  
   }  
   public function setNombreAutor($nombreAutor) {  
     $this->nombreAutor = $nombreAutor;  
   }  
   public function setApellidosAutor($apellidosAutor) {  
     $this->apellidosAutor = $apellidosAutor;  
   }  
 }  
 
 class Libro extends Producto {  
   private $numPaginas;  
   
   function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor, $numPaginas) 
   {  
     parent::__construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor);  
     $this->numPaginas = $numPaginas;  
   }  
   public function getNumPaginas() {  
     return $this->numPaginas;  
   }  
   public function setNumPaginas($numPaginas){  
     return $this->numPaginas = $numPaginas;  
   }  
   public function getResumen() {  
     $resumen = parent::getResumen();  
     $resumen .= ", Num. paginas: " . $this->getNumPaginas();  
     return $resumen;  
   }  
 }  
 
 class Cuento extends Producto {  
   private $edadMaxima;  
   function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor, $edadRecomen) {  
     parent::__construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor);  
     $this->edadRecomen = $edadRecomen;  
   }  
   public function getedadRecomen() {  
     return $this->edadRecomen;  
   }  
   public function setedadRecomen($edadRecomen){  
     return $this->edadRecomen = $edadRecomen;  
   }  
   public function getResumen() {  
     $resumen = parent::getResumen();  
     $resumen .= ", Edad recomendada: " . $this->getedadRecomen();  
     return $resumen;  
   }  
 }  
 
 $libro = new Libro(1,"t�tulo",20,"Autor", "Apellido1 Apellido2",440);  
 
 $cuento = new Cuento(1,"t�tulo",20,"Autor", "Apellido1 Apellido2","6-8");  
  
 //$arr = array($libro, $blog);
 
 $arr = array();    // array d'objectes  !!!
 $arr[0] = $libro;  // a la posici� 0 guardem un libro
 $arr[1] = $cuento; // a la posici� 1 guardem un cuento

 foreach($arr AS $cl)
 { 
	echo $cl->getResumen(); 
	echo('</br></br>');
 } 
   
 ?>

