<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>iferez</title>
</head>

<body>
    <?php
    // VARIABLES CON PHP
    $profesora = 'Yanel';
    $detallePhp = 'Hipertext Preprocesor';
    $admin = 1;
    $compañeros = 29;
    $capacidadCurso = 40;
    
    //constantes
    const DNI = '38465536'; 
    const NOMBREADMIN = 'Ivan'; 
    const APELLIDOADMIN = 'Ferez'; 
    ?>



    <div class="container p-0 bg-light">
        <nav id="menuNav" class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid py-2">
                <a class="navbar-brand" href="#">iferez</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        <a class="nav-link" href="mail.php">Contacto</a>
                        <a class="nav-link" href="miscomentarios.php">Comentarios</a>

                    </div>
                </div>
            </div>
        </nav>

        <div>
            <h1>Bienvenida
                <?php echo $profesora ?> !
            </h1>
            <?php
                if (isset ($_GET['e'])){
                    echo'<div class="alert alert-success" role="alert">
                    Comentario enviado con exito !
                  </div>';
                }
                ?>
            <h2 class="my-3">¿Qué es PHP y cómo funciona?</h2>
            <p>
                PHP es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear páginas web,
                favoreciendo la conexión entre los servidores y la interfaz de usuario.</p>
        </div>

        <div>
            <h3 class="mt-5">Vamos a repasar algunos Tips basicos</h3>
            <ul>
                <li>PHP : Es el acrónimo de "
                    <?php echo $detallePhp ?>".


                    Php es un lenguaje interpretado, de alto nivel y embebido en páginas HTML. Su sintaxis es similar a
                    la de los lenguajes de C, Java, Perl.


                    Además es un lenguaje Multiplataforma (trabaja tanto para Unix como para Windows).
                    Otra característica que es muy potente y destacable es su soporte para una gran cantidad de bases de
                    datos, como por ejemplo: Oracle, PostgreSQL, MySQL, Informix, ODBC, entre otras.


                    Php soporta el uso de otros servicios que usan protocolos como IMAP, SNMP, NNTP,POP3, HTTP. Dispone
                    de librerías para el tratamiento de la fecha, de directorios, de archivos, de imágenes.

                    Php también soporta Programación Orientada a Objetos.

                    Php es una herramienta de uso gratis por lo tanto si deseas descargarlo de Internet puedes dirigirte
                    a la siguiente dirección : http://www.php.net
                </li>
                <br>
                <li> Un delimitador puede ser cualquier carácter no alfanumérico, que no sea una barra invertida, y que
                    no sea un espacio en blanco. Los delimitadores que se usan a menudo son barras oblícuas ( / ),
                    signos de número ( # ) y virgulillas ( ~ ). Los siguientes ejemplos son todos patrones delimitados
                    válidos.
                </li>
                <br>
                <li>Las variables en PHP son representadas con un signo de dólar ($) seguido por el nombre de la
                    variable. El nombre de la variable es sensible a minúsculas y mayúsculas. Es decir, las siguientes
                    declaraciones de variables son distintas entre ellas: $variable, $Variable, $variAble, $VariAble,
                    etc.</li>
                <br>
                <li>Las constantes son elementos de PHP que guardan un valor fijo que no se puede modificar a lo largo
                    del programa. Las constantes pueden ser definidas por el programa o estar predefinidas por el propio
                    PHP o por algún módulo.</li>
                <br>
                <li>Pero PHP también dispone de una serie de operadores de asignación que permite realizar la operación
                    en un único paso.
                    += Suma y asignación.
                    -= Resta y asignación.
                    *= Multiplicación y asignación.
                    /= División y asignación.
                    %= Módulo y asignación.
                    .= Concatenación y asignación.</li>
            </ul>
        </div>

        <div>
            <h3 class="mt-5">Datos de nuestra web</h3>
            <p>Es administrada por
                <?php echo $admin ?> persona
            </p>
            <p>Pueden ingresar los
                <?php echo $compañeros ?> alumnos del curso
            </p>
            <p>El curso tiene un total de participantes:
                <?php echo $usuariosTotal= $admin + $compañeros;  ?>
            </p>

            <p>
                <?php    
                if($usuariosTotal < $capacidadCurso) {
                    echo 'Todavia quedan lugares para inscribirse !';
                 } else {
                     echo 'Nuestro curso esta lleno, debe esperar al proximo';
                 }
                 ?>
            </p>

            <div class="my-5">
                <h3 class="mb-3">Dejanos tu comentario!</h3>
                <form name="form" action="comentario.php" method="post">
                    <div>
                        <label for="nombre">Usuario:</label>
                        <input class="form-control" id="usuario" name="usuario" required placeholder="Nombre de usuario">
                    </div>
                    <div>
                        <label for="nombre">Edad:</label>
                        <input class="form-control" type="number" id="edad" name="edad" placeholder="Edad">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="ejemplo@email.com">
                    </div>
                    <div>
                        <label for="mensaje">Mensaje:</label> 
                        <textarea class="form-control" id="comentario" name="comentario" required
                            placeholder="Dejanos tu mensaje"></textarea>
                    </div>
                    <input class="btn-success my-3 px-5" id="submit" name="submit" type="submit" value="Enviar">
                </form>

                <?php
                if (isset ($_GET['e'])){
                    echo'<div class="alert alert-success" role="alert">
                    Puedes dejar un nuevo comentario !
                  </div>';
                }
                ?>
            </div>

        </div>

        <footer class="bg-primary text-white">
            <p class="ps-3">Nombre:
                <?php echo NOMBREADMIN ?> </p>
            <p class="ps-3">Apellido: <?php echo NOMBREADMIN ?> </p>
            <p class="ps-3">DNI: <?php echo DNI ?> </p>
        </footer>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>