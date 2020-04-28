<?php
class Database {
private $_conexion;
private static $_instance;
private $_host = "localhost:3306";
private $_username = "root";
private $_password = "";
private $_database = "agendaelectronica";
private $_charset = "latin1_swedish_ci";

public static function getInstance() {
	//verificando si hay una instancia creada
	//si no se crea una
	if(!self::$_instance) {
		self::$_instance = new self();
	}
	return self::$_instance;
	}

	// Constructor de la clase creado con la extensión MySQLi
	private function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
		//Verificar si se creó el objeto conexión
		if($this->_connection->connect_errno){
		 die("Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
		}
		$this->_connection->set_charset($this->_charset);
	}

	public function getConnection() {
		return $this->_connection;
	}

}	
?>