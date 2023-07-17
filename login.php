<?php ob_start(); ?>
<?php session_start();
    #validar datos
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select mail, pass
      from usuarios where
      es_admin = 'S';*/
      /* USUARIOS["mail"] */
        if( ($_POST['usuario']=="Admin") && ($_POST['pass']=='123') ){
          $_SESSION['usuario']="Admin";
        //   $_SESSION['logueado']='S';
          #redirecciono porque ingreso ok 
          header("location:index_admin.php");
          die();
         // exit;
        }
        else{
        // alert("Usuario y/o Contraseña incorrecta");
        // header("location:login.php");   
            echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
            
            // die();
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
                    <input type="submit" value="Enviar" class="btn">
                    <p>Usuario: Admin <br> Pass: 123 </p>
                </form>
        </div>
    </div>
    
</body>
</html>