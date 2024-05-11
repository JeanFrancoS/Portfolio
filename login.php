<?php ob_start(); ?>
<?php set_error_handler("var_dump");
include 'conexion.php';
session_start();
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
        $conexion = new conexion();
        $sql = "SELECT * FROM `admin` WHERE `Estado` = 1";
        $usuario = $conexion->ejecutar($sql);
        echo '<script> alert($usuario);</script>';
        $nombre_Usuario = $_POST['usuario'];
        $nombre_Contraseña = $_POST['pass'];
        if( ($_POST['usuario'] == 'admin') && ($_POST['pass'] == '123') ){
          $_SESSION['usuario'] = $nombre_Usuario;
          $_SESSION['logueado']='S';
          header("location:index_admin.php");
          die();
        }
        else{
            echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
        }
    }?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-login.css">
    <title>Login-CRUD</title>
</head>
<body>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Crud PortFolio</h2>
                <form action="login.php" method="post">
                    <input type="text" name="usuario" id="usuario" class="field" placeholder="Usuario" required>
                    <input type="password" name="pass" id="subject" class="field" placeholder="Password" required>
                    <a href="index.php"><input type="button" value="Volver" class="btn btnVolver" href="index.php"></a>
                    <input type="submit" value="Enviar" class="btn">
                    <!-- <p>Usuario: Admin <br> Pass: 123 </p> -->
                </form>
        </div>
    </div>
    
</body>
</html>