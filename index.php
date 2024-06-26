<?php include 'header.php'; 
    $sql = "SELECT * FROM `proyectos`";
    $datos = $conexion->consultar($sql);
    $proyectos= $conexion->consultar("SELECT * FROM `Proyectos` WHERE Estado = 1"); 
?>
    <main>
        <div class="container">
            <section class="SobreMi" id="SobreMi">
                <div>
                    <h1>JEAN FRANCO SOLÉ</h1>
                    <img src="./assets/img/ .jpg" alt="" class="imgPpal"/>
                </div>
                <div>
                    <div class="tit">
                        <h2>SOBRE MI</h2>
                    </div>
                    <div class="descripcion">
                        <p>Programador Jr. dispuesto a seguir aprendiendo, trabajar en equipo y a crecer. <br> Si te interesa mi curriculum, aqui puedes descargarlo.</p>
                    </div>
                    <div class="btnCv">
                        <a href="./assets/cv/CvJeanFrancoSolé.pdf" download="CvJeanFrancoSolé" title="Descargar curriculum" class="btn curriculum">Curriculum Vitae</a>
                    </div>
                </div>
            </section>
            <section class="Proyectos" id="Proyectos">
                <div class="tit">
                    <h2>PROYECTOS</h2>
                </div>
            
                <div class="cardsProyectos">
                    <?php #leemos proyectos 1 por 1
                        foreach($proyectos as $proyecto){ 
                    ?>
                            <div class="card">
                                <a href="<?php echo $proyecto['URL'];?>">
                                    <img src="assets/img/<?php echo $proyecto['Imagen'];?>" alt="">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-lenguajes"> 
                                            <?php echo $proyecto['Lenguajes'];?>
                                    </h5>
                                    <h3 class="card-titulo">
                                        <a href="<?php echo $proyecto['URL_GitHub'];?>" class="carddd"><?php echo $proyecto['Nombre'];?></a>
                                    </h3>   
                                    <p class="card-texto">
                                        <?php echo $proyecto['Descripcion'];?>
                                    </p>
                                    <div class="links">
                                        <a href="<?php echo $proyecto['URL_GitHub'];?>" class="carddd">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512" class="card-link"><style>svg{fill:#000000}</style><path class="card-link" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                                        </a>
                                        <a href="<?php echo $proyecto['URL'];?>" class="carddd">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="card-link"><style>svg{fill:#000000}</style><path class="card-link" d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                                        </a>
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
        </div>
    </main>
<?php include 'footer.php'; ?>