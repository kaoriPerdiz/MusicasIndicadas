<?php
include "connect.php";

$sql = "SELECT * FROM musica WHERE ouviu = 1";
$result = $conn->query($sql);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title>Músicas que me indicaram</title>
        <script>
            function ouviu(){
                var obs = prompt("Alguma observação sobre a música?");
                $("#obs").val(obs);
                $("#form_musica").submit();
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
                    <a class="nav-link" href="nao_ouvi.php">Não ouvi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Ouvi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="indicar.php">Indicar</a>
                    </li>
                </ul>
                </div>
            </nav>
            <!-- teste de nav -->
            <div class="title">
                <h1>Músicas que ouvi</h1>
            </div>
            <div class="registros">
            <table class="table table-pink">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Artista</th>
                    <th scope="col">Indicação</th>
                    <th scope="col">Observação</th>
                    </tr>
                </thead>
                <?php
                while($row = $result->fetch_assoc()) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['artista']."</td>";
                    echo "<td>".$row['indicacao']."</td>";
                    echo "<td>".$row['obs']."</td>";
                    //echo "<td><input type='button' onclick='ouviu();' value='Ouviu a música'><input type='hidden' id='id_musica' name='id_musica' value='".$row['id_musica']."'</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                ?>
            </table>
            </div>
            <div class="footer">
                <small>♥ Feito com ódio pela Kaori ♥</small>
            </div>
        </div>
        <!-- shh! hidden values -->
        <input type="hidden" id="acao" name="acao" value="3">
        <input type="hidden" id="obs" name="obs">
        <!-- bootstrap script -->
        </form>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>