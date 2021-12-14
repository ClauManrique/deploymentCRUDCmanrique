<?php

include_once("Modelo/empleado.php");
include_once("conexion.php");



class ControladorEmpleados{

    public function inicio(){

        $empleados= Empleado::consultar();

        include_once("Vista/empleados/inicio.php");

    }
    public function crear(){
        if($_POST){

            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            Empleado::crear($nombre,$correo);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("Vista/empleados/crear.php");

    }
    public function editar(){
        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];

            Empleado::editar($id, $nombre, $correo);

            header("Location:./?controlador=empleados&accion=inicio");
        }

        $id=$_GET['id'];

        $empleado= Empleado::buscar($id);

        include_once("Vista/empleados/editar.php");

    }

    public function borrar(){
        $id= $_GET['id'];

        Empleado::borrar($id);
        header("Location:./?controlador=empleados&accion=inicio");

    }
}
?>