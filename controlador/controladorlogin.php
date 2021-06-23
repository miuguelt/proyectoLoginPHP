<?php

$opcion = $_POST["fenviar"];
include_once("../modelo/conexion.php");
$objetoconexion = new conexion();
$conexion = $objetoconexion->conectar();

if($opcion == 'ingresar'){

    $correousuario= $_POST["fcorreo"];
    $claveusuario= $_POST["fclave"];


    $correousuario = mysqli_real_escape_string($conexion, $correousuario);

    include_once("../modelo/login.php");
    $objetologin = new login($conexion, $correousuario, $claveusuario);
    $usuarioesvalido = $objetologin->verificarusuario();

    if ($usuarioesvalido==true){
        session_start();
        $_SESSION['id']      =    $objetologin->getidusuario();
        $_SESSION['nombre']  =    $objetologin->getnombreusuario();
        $_SESSION['rol']     =    $objetologin->getidrolusuario();
        $objetoconexion-> desconectar($conexion);
    header("location:../vista/formulariousuario.php");
    }else{
        $objetoconexion-> desconectar($conexion);      
    header("location:../index.php?mensaje=incorrecto");
    }

} else {
  
    $idusuario = 0;
    $nombreusuario = $_POST["fnombreusuario"];
    $correousuario = $_POST["fcorreousuario"];
    $claveusuario = $_POST["fclaveusuario"];
    $fecharegistrousuario = $_POST["ffecharegistrousuario"];
    $fechaultimaclave = $_POST["ffechaultimaclave"];             
    $celularusuario = $_POST["fcelularusuario"];
    $idrolusuario = $_POST["fidrolusuario"];

    $nombreusuario = htmlspecialchars($nombreusuario);
    $correousuario  = htmlspecialchars($correousuario);
    $claveusuario = htmlspecialchars($claveusuario);
    $fecharegistrousuario = htmlspecialchars($fecharegistrousuario);
    $fechaultimaclave = htmlspecialchars($fechaultimaclave);
    $celularusuario = htmlspecialchars($celularusuario);
    $idrolusuario  = htmlspecialchars($idrolusuario);

    include_once("../modelo/usuario.php");
    $objetousuario = new usuario($conexion,$idusuario,$nombreusuario,$correousuario,$claveusuario,$fecharegistrousuario,$fechaultimaclave,$celularusuario,$idrolusuario);

    $objetousuario->insertar();
    $mensaje="ingresado";

    include_once("../modelo/login.php");
    $objetologin = new login($conexion, $correousuario, $claveusuario);
    $objetologin->verificarusuario();

    session_start();
    $_SESSION['id']      =    $objetologin->getidusuario();
    $_SESSION['nombre']  =    $objetologin->getnombreusuario();
    $_SESSION['rol']     =    $objetologin->getidrolusuario();
        

    $objetoconexion->desconectar($conexion);
    header("location:../vista/formulariousuario.php?msj=$mensaje");
 
}
 
?> 
