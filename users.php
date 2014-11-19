<?php        

require_once "collection.php";

// Creem la classe "Mensaje"
class Mensaje
{
private $_mensaje;
  function __construct($mensaje)
  {
    $this->_mensaje = $mensaje;
  }
  function __toString()
  {
    return $this->_mensaje;
  }
}

// Creem la classe "Usuario"
class Usuario
{
protected $_nombre;
protected $_apellido;
protected $_nivelAcceso = 0;
protected $_mensajes;  // Coleccio de mensajes
 
  function __construct($nombre, $apellido)
  {
     $this->_nombre = $nombre;
     $this->_apellido = $apellido;
	 $this->_mensajes = new collection();
  }
 
  public function agregarMensaje($mensaje)
  {
     $this->_mensajes->addItem(new Mensaje($mensaje));
  }
 
 function __toString()
 {
    $string = "Usuario: $this->_nombre $this->_apellido - nivel de acceso: $this->_nivelAcceso ";
    $string .= "<br> Mensajes: ";
	
	foreach ($this->_mensajes->keys() as $key)
	{
	    $variable = "";
		$variable = $this->_mensajes->getItem($key);
		$string .= "<br>- $variable ";
	}
    return $string;
 }
}

//creamos la clase UsuarioAdministrador
class UsuarioAdministrador extends Usuario
{
  function __construct($nombre, $apellido)
  {
    parent::__construct($nombre, $apellido);
    $this->_nivelAcceso = 1;
  }
 
}

//Programa principal

$usuario_1 = new Usuario("Juan", "Perez");
$usuario_1->agregarMensaje("Mensaje 1");
$usuario_1->agregarMensaje("Mensaje 2");
$usuario_1->agregarMensaje("Mensaje 3");
echo $usuario_1;
echo '<br><br>';

$usuario_2 = new UsuarioAdministrador("Carlos", "Serrot");
$usuario_2->agregarMensaje("Mensaje Admin 1");
$usuario_2->agregarMensaje("Mensaje Admin 2");
echo $usuario_2;

 
?>   

