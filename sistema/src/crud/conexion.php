<?php 

class BD{

    private static $instancia=NULL;

    public static function crearInstancia(){

        if(!isset(self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            self::$instancia= new PDO('mysql:host=mysql-svc;dbname=empleados','root','root', $opcionesPDO);
            
        }
        return self::$instancia;
    }
}
?>