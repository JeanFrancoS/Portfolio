<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeanFrancoSolé</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/45b2b8f4cd.js" crossorigin="anonymous"></script>
    <!-- <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon"> -->
</head>
<body class="body">
    <header class="header">
        <div class="menu">
            <div class="logo">
                <h2>Jean Franco Solé</h2>
            </div>
            <nav class="navHeader">
                <ul class="navLista">
                    <li class="listaItem"><a href="#Proyectos" class="link">Proyectos</a></li>
                    <li class="listaItem"><a href="#Conocimientos" class="link">Conocimientos</a></li>
                    <li class="listaItem"><a href="#SobreMi" class="link">Sobre mi</a></li>
                    <li class="listaItem"><a href="#Contactame" class="link">Contactame</a></li>
                    <!-- <li class="listaItem"><img src="" alt=""></li> -->
                    <!-- <li class="listaItem"><i class="link iconHamburguer fa-solid fa-gear"></i>
                        <ul class="submenu"> -->
                            <li class="listaItem"><a href="login.php" class="link">Acceder</a></li>
                            <!-- <li class="listaItem"><input type="checkbox" class="link"></input></li>
                        </ul>
                    </li> -->
                    <!-- <li class="listaItem"><a href="#" class="link">Acceder</a></li> -->
                    <!-- <input type=""> BTN PARA MODO OSCURO-->
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="Proyectos" id="Proyectos">
            <div class="tit">
                <h2>PROYECTOS</h2>
                <?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ 
                ?>
                    <div class="col">
                        <div class="card border border-3 shadow w-100">
                            <a>
                                <img class="card-img-top" width="100" src="assets/img/<?php echo $proyecto['Imagen'];?>" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-dark">
                                    <?php echo $proyecto['Nombre'];?>
                                </h5>
                                <p class="card-text text-dark">
                                    <?php echo $proyecto['Descripcion'];?>
                                </p>
                                 
                                 <a href="<?php echo $proyecto['URL'];?>">Ingresa a la pagina</a>
                                 <a href="<?php echo $proyecto['URL_GitHub'];?>">Ingresa al GitHub</a>
                               
                            </div>
                        </div>
                    </div>
                <?php 
                 } 
                 ?>
            </div>
            <!-- <?php
            ?> -->
        </section>
        <section class="Conocimientos" id="Conocimientos">
            <div class="tit">
                <h2>CONOCIMIENTOS</h2>
            </div>
        </section>
        <section class="SobreMi" id="SobreMi">
            <div class="tit">
                <h2>SOBRE MI</h2>
            </div>
            <div class="descripcion">
                <p>Programador Jr. dispuesto a seguir aprendiendo, trabajar en equipo y a crecer. <br> Si te interesa mi curriculum, aqui puedes descargarlo.</p>
            </div>
            <div class="btnCv">
                <a href="./assets/cv/CvJeanFrancoSolé.pdf" download="CvJeanFrancoSolé" title="Descargar curriculum" class="btn curriculum">Curriculum Vitae</a>
            </div>
        </section>
        <section class="Contactame" id="Contactame">
            <div class="formulario">
                <div class="titulo">
                    <h2>CONTACTAME</h2>
                </div>
                <h3>Si quieres enviarme un mail con alguna sugerencia o duda, llená el siguiente formulario.<br>Sus datos no serán compartidos. </h3>
                <p class="pAclaracion">*Todos los campos son obligatorios a excepción del número de teléfono.</p>
                <form action="formAct" class="form">
                    <div class="datosPersonales">
                        <input type="text"  class="txt datos" id="nombre" name="name"  placeholder="Nombre" required>
                        <input type="email" class="txt datos" id="email"  name="email" placeholder="Email"  required>
                        <input type="tel"   class="txt datos" id="phone"  name="phone" placeholder="Número de teléfono" pattern="[0-9]{11}">
                    </div>
                    <div>
                        <input type="text"  class="txt msje asunto" id="asunto" name="asunto" placeholder="Asunto" required>
                    </div>
                    <div>
                        <textarea type="text"  class="txt msje" id="mensaje" name="message" placeholder="Escriba un mensaje" cols="90" rows="4" required></textarea>
                    </div>
                    <div class="btnesForm">
                        <input type="reset" value="Borrar" class="btn btnForm">
                        <input type="submit" value="Enviar" class="btn btnForm">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <a href="https://web.whatsapp.com/send?phone=54%C2%A09%C2%A011%C2%A03617-2154&text=Hola!%20Acabo%20de%20ver%20tu%20portfolio.%20[Ingrese%20lo%20que%20desee%20decir.%20Será%20respondido%20a%20la%20brevedad%20posible&#128513]"
    class="chatWpp" target="_blank">
        <i class="fa-brands fa-whatsapp wppIcon"></i>
    </a>
    <script src="js/javascript.js"></script>
</body>
</html>