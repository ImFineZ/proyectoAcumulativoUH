<?php

//La invocacion de otros archivos


/*
@Autor: Greivin Rodriguez
@Date: 
@Descrip:
*/

/*
----Pasos para crear una clase-----
1->Clase
2->atributos
3->constructor
4->metodos
5->funciones
*/

require_once "libs/smarty_4_3_0/config_smarty.php";
require_once "model/model.php";

//Clase
class control
{
    //atributos

    private $obj_smarty;
    private $objModel;
    private $nombreApp;

    //Constructor
    public function __construct() // los contructores sirven para inicializar las variables
    {
        $this->nombreApp = "Sistema UH";
        $this->obj_smarty = new config_smarty();
        $this->objModel = new model();
    }

    public function test()
    {
        $nom = "Sistema Proga 3";
        $this->obj_smarty->setAssign("nombre", $nom);
        $this->obj_smarty->setDisplay("test.tpl");
        echo "hola";
        exit;
    }

    //metodos
    /*
    public function saludar()
    {
    return "Hola, mi nombre es: $this->nombre";
    }
    public function describir()
    {
    return "Tengo $this->edad años de edad y soy de $this->nacionalidad y estudio programacion" ;
    }
    */

    public function gestor_solicitudes()
    {
        if (isset($_REQUEST["action"])) {
            $action = $_REQUEST["action"];
            switch ($action) {
                case 'validar_login':
                    $this->ctl_validar_login();
                case 'registrar':
                    $this->new_registro();
                case 'resgistrar_usu':
                    $this->ctl_registrar_usuario();
                    break;
            }
        } else {
            $this->obj_smarty->setDisplay("frm_login.tpl");
        }
    }
    public function ctl_validar_login()
    {
        $usu = $_REQUEST["txt_usuario"];
        $pass = $_REQUEST["pwd_password"];

        $rs = $this->objModel->m_validar_login($usu, $pass);

        if (isset($rs['id_usuario'])) {
            echo "Hola, entro al sistema";
        } else {
            echo "Usuario o password invalido";
            $this->obj_smarty->setDisplay("frm_login.tpl");
        }
        // echo "iniciando validacion";
    }

    public function new_registro()
    {
        $this->obj_smarty->setDisplay("frm_registro.tpl");
    }

    public function ctl_registrar_usuario()
    {
        $nombre = $_POST['txt_nombre'];
        $apell1 = $_POST['txt_apellido1'];
        $apell2 = $_POST['txt_apellido2'];
        $usua = $_POST['txt_usuario'];
        $pass = $_POST['pwd_password'];
        $correo = $_POST['txt_correo'];
        $perfil = $_POST['txt_perfil'];
        $estado = $_POST['txt_estado'];

        $result = $this->objModel->m_insertar_usuario(
            $nombre,
            $apell1,
            $apell2,
            $usua,
            $pass,
            $correo,
            $perfil,
            $estado
        );

        if ($result) {
            echo "Usuario registrado correctamente";
        } else {
            echo "No se pudo registrar el usuario";
        }

    }
    public function validar_inactividad()
    {

    }
}

?>