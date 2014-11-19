<?php
include_once "recurs.php";
class videos extends recurs {  
   private $format;  //String
   
   function __construct($tipus, $titol, $autor, $DataPublicacio, $en_prestec, $format) 
   {     
     parent::__construct($tipus, $titol, $autor, $DataPublicacio, $en_prestec);  
     $this->format = $format;
   }  
   public function getformat() {  
     return $this->format;  
   }  
   public function setformat($format){  
     return $this->format = $format;  
   }  
   public function imprimirRecurs() {  
     $resumen = parent::imprimirRecurs(); 
     $resumen .= " Format: " . $this->getformat()."<br>";    
     return $resumen;  
   }
  
     
     
 } 
?>




