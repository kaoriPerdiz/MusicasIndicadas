<?php
include "connect.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title>Músicas que me indicaram</title>
        <script>
            function indica(){
                if($("#nome").val() == '')
                {
                    alert("Preencha o nome da música!");
                    return false;
                }else if($("#artista").val() == '')
                {
                    alert("Preencha o campo artista!");
                    return false;
                }else if($("#indicacao").val() == '')
                {
                    alert("Preencha o seu nome!");
                    return false;
                }else{
                    return true;
                }
                
            }
        </script>
    </head>
    <body>
        
        <form action="proc_musica.php" method="post" id="form_musica">
        <div class="container">
            <!-- teste de nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-pink">
                <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="nao_ouvi.php">Não ouvi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="ouvi.php">Ouvi</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Indicar <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                </div>
            </nav>
            <!-- teste de nav -->
            <div class="title">
                <h1>Indicação</h1>
            </div>
            <div class="cadastro">    
                <table style="width: 100%">
                    <tr>
                        <td><label for="nome">Nome da música:</label></td>
                        <td><label for="nome">Artista:</label></td>
                        <td><label for="nome">Indicação de:</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="nome" name="nome"></td>
                        <td><input type="text" id="artista" name="artista">  </td>
                        <td><input type="text" id="indicacao" name="indicacao">  </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="botao_indica"><input type="button" id="indicar" name="indicar" value="Indicar" onclick="if(indica()){$('#form_musica').submit();}"></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="footer">
                <small>♥ Feito com ódio pela Kaori ♥</small>
            </div>
        </div>
        <!-- shh! hidden values -->
        <input type="hidden" id="acao" name="acao" value="1">
        <input type="hidden" id="obs" name="obs">
        <!-- bootstrap script -->
        </form>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>