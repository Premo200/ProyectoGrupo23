<?php
include "../includes/registro.php";
include_once "../models/Usuario.php";

class RegistroController
{
    function __construct()
    {
    }

    function index()
    {
        try {
            if (isset($_POST["enviar"])) {
                if ($_POST["password"] !== $_POST["pass2"]) {
                    echo "Las contraseñas no coinciden";
                } else {
                    $usuario = new Usuario($_POST);
                    $pass = $usuario->getPassword();
                    $usuario->setPassword($pass);
                    header("Location:../index.php");
                    exit();
                }
            }
        } catch (Exception $e) {
            $err_msg = $e->getMessage();
            echo "<script>console.log('$err_msg')</script>";
        } finally {
            require_once "../includes/registro.php";
        }
    }
}

$registro = new RegistroController();
$registro->index();
