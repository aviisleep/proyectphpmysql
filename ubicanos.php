<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/ubicanos.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet"> 
    <title>Home | Foto Vilon</title>
</head>
<body>
    
<?php require 'partials/header.php'?>

        <div class="section-father">
            <div class="son-left">
                <h1 class="text">¿Dónde estamos?</h1>
                <p class="sub-text">Aquí tienes un acceso a Google Maps para que nos ubiques y te enteres de dónde está Foto Vilon's. Fotos de calidad.</p>
            </div>
            <div class="son-right">
                <img class="image-home" src="./imagenes/marker-3442532_1280.png" alt="">
            </div>
        </div>
        <div class="container-maps">
            <p class="ubication-text">Ubicación de Foto Vilon's</p>
            <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses!2sco!4v1662436774742!5m2!1ses!2sco!6m8!1m7!1ssrsI4NspXBIrpOHWFG3_5g!2m2!1d4.523551238027714!2d-74.11934247536126!3f118.3379967542164!4f-4.275662973712983!5f2.522425490518111" width="100%" height="500" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
    </div>
</body>
</html> 