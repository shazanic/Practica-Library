<html>
    <head>
        <meta charset="UTF-8">
    </head>
<?php
require_once "Collection.php";
class recurs{
      private $tipus; // ‘l’ llibre; ‘v’ video CHAR;
      private $titol;//STRING
      private $autor;//STRING
      private $DataPublicacio;//STRING
      private $en_prestec;//BOLEAN
      
      function __construct($tipus, $titol, $autor, $DataPublicacio, $en_prestec) {  
     $this->tipus = $tipus;  
     $this->titol = $titol;  
     $this->autor = $autor;  
     $this->DataPublicacio = $DataPublicacio;  
     if($en_prestec==false)
     {$en_prestec= "False";}
     else{
     $en_prestec = "True";}
     $this->en_prestec = $en_prestec;  
   }
   public function getTipus(){  
     return $this->tipus;  
   }  
   public function getTitol() {  
     return $this->titol . " ";
   }  
   public function getAutor() {  
     return $this->autor;  
   }  
   public function getDataPublicacio() {  
     return $this->DataPublicacio;  
   }  
   public function geten_prestec() {  
     return $this->en_prestec;  
   }
    public function setTipus($tipus) {  
     $this->tipus = $tipus;  
   }  
   function setEn_prestec($en_prestec) {
       $this->en_prestec = $en_prestec;
   }

   public function setTitol($titol) {  
     $this->titol = $titol;  
   }  
   public function setPrecio($autor) {  
     $this->autor = $autor;  
   }  
   public function setNombreAutor($DataPublicacio) {  
     $this->DataPublicacio = $DataPublicacio;  
   }  
   public function setApellidosAutor($en_prestec) {  
     $this->en_prestec = $en_prestec;  
   }  
   public function imprimirRecurs() {
      
     echo "======================================================================="."<br>";
     echo "Recurs"."<br>";
     echo  "======================================================================="."<br>";
     echo "Tipus: ". $this->tipus."<br>". "Títol: " . $this->titol."<br>" ."Autor: " . $this->autor. "<br>" 
     . "Data de publicació: " . $this->DataPublicacio."<br>"."En_préstec:". $this->en_prestec."<br>";  
      
   }    
 }  

?>
</html>