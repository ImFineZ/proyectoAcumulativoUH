<?php
require_once "db/conn.php";

class model
{
    private $ins_conexion;

    public function __construct()
    {
        $this->ins_conexion = new conn();
    }

    public function m_validar_login($usu, $pass)
    {
        $sql = "SELECT id_usuario, nombre, apell1, apell2, usua, pass, correo, perfil, estado FROM usuarios where usua='$usu' and pass='$pass'";
        $rs = $this->ins_conexion->ejecutar($sql);



        $arrUsu = array();
        while ($row = mysqli_fetch_assoc($rs)) {

            $arrUsu['id_usuario'] = $row['id_usuario'];
            $arrUsu['nombre'] = $row['nombre'];
            $arrUsu['apell1'] = $row['apell1'];
            $arrUsu['apell2'] = $row['apell2'];
            $arrUsu['usua'] = $usu;
            $arrUsu['pass'] = $pass;
            $arrUsu['correo'] = $row['correo'];
            $arrUsu['perfil'] = $row['perfil'];
            $arrUsu['estado'] = $row['estado'];

            /*
            echo $row['id_usuario'];
            echo $row['nombre'];
            echo $row['apell1'];
            echo $row['correo'];
            */
        }
        return $arrUsu;

    }

    public function m_insertar_usuario($nombre, $apell1, $apell2, $usua, $pass, $correo, $perfil, $estado)
    {
        //Validar la conexion
        if (!$this->ins_conexion) {
            return false;
        }
        
        //Generar la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apell1, apell2, usua, pass, correo, perfil, estado) VALUES ('$nombre', '$apell1', '$apell2', '$usua', '$pass', '$correo', '$perfil', '$estado')";
        $rs = $this->ins_conexion->ejecutar($sql);

        //Verificar si los datos fue insertada correctamente
        if($rs){
            return true;
        }else{
            return false;
        }
    }
}
/*
Create
Read
Update
Delete
*/




?>