<?php
include "connect.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title>Músicas que me indicaram</title>
    </head>
    <body>
        <div class="container">
            <!-- teste de nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-pink">
                <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="nao_ouvi.php">Não ouvi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="ouvi.php">Ouvi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="indicar.php">Indicar</a>
                    </li>
                </ul>
                </div>
            </nav>
            <!-- teste de nav -->
            <div class="title">
                <h1>Sistema de músicas que me indicaram</h1>
            </div>
            <div class="footer">
                <small>♥ Feito com ódio pela Kaori ♥</small>
            </div>
        </div>
        <!-- bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>