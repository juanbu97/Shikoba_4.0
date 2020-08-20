<?php

class ConexionDB{

    /* Variable de conexión */
    private $pdo;

    /* Variable de instancia */
    private static $instancia;

    /* Constructor */
    private function __construct(){
        $bd = 'mysql:dbname=convivencia2;host=localhost';
        $this ->pdo = new PDO(
            $bd,
            'root',
            'iesgc_0606',
            array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8")
        );
    }

    /* Devuelve la instancia */
    public function getInstancia(){
        if(!isset(self::$instancia)){
            $class = __CLASS__;
            self::$instancia = new $class;
        }
        return self::$instancia;
    }

    /* Método para consultas parametrizadas */
    public function query($consulta, $parametros){
        $consulta = $this->pdo->prepare($consulta);
        if(!$consulta -> execute($parametros))
        	return false;
        return $consulta;
    }
}
	
?>