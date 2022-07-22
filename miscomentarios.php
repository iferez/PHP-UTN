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

        <div class="my-5">

<h3 class="mb-5 text-center">Compartimos tus comentarios con nuestros compañeros !</h3>



    <div class="text-center">
    <?php
    include("mostrar.php");
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