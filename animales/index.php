<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Page Kids</title>
    <style>
        .box {
            display: inline-block;
            text-align: center;
            margin-left:120px;
            margin-right:120px;
            margin-bottom:90px;
        }
    </style>
</head>
<body>
<img class="vtex-rich-text-0-x-image vtex-rich-text-0-x-image--contact" src="./img/llamada2.jpg"width="120" height="120" alt="Kurumi" title="Kurumi">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./img/753945_games_game_gaming_play_video_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            PageKids
        </a>
    </nav>
    <div class="contenedor">
        <form action="index.php" method="POST">
            <div class="box">
                <div class="card-body"style ="width: 16rem; height:14rem;">
                <img class="card-image" src="./img/gato.jpg" alt="Card Image cap" style="width:15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">Gato</h5>
                    <input type="submit" class="btn btn-primary" name="gato" value="Reproducir">
                </div>
            </div>
            </div>        
            <div class="box">
                <div class="card-body"style ="width: 16rem; height:14rem;">
                <img class="card-image" src="./img/perro.jpg" alt="Card Image cap" style="width:15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">perro</h5>
                    <input type="submit" class="btn btn-primary" name="perro" value="Reproducir">
                </div>
            </div>
            <br><br>
            <div class="box">
                <div class="card-body"style ="width: 16rem; height:14rem;">
                <img class="card-image" src="./img/vaca.jpg" alt="Card Image cap" style="width:15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">vaca</h5>
                    <input type="submit" class="btn btn-primary" name="vaca" value="Reproducir">
            </div> 
            <div class="box">
                <div class="card-body"style ="width: 16rem; height:14rem;">
                <img class="card-image" src="./img/abc.webp" alt="Card Image cap" style="width:15rem; height:13rem;">
                <div class="card-body">
                    <h5 class="card-title">abecedario</h5>
                    <input type="submit" class="btn btn-primary" name="abecedario" value="Reproducir">
            </div> 
            </div> 
        </form>
    </div>
</body
</html>
<?php
include_once("animales.php");
?>
<?php
