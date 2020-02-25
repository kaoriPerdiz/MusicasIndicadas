<?php
include "connect.php";
$id_musica = ISSET($_POST['id_musica']) ? $_POST['id_musica'] : null;
$obs = $_POST['obs'] == '' ? null : $_POST['obs'];
$acao = $_POST['acao'];
$nome = ISSET($_POST['nome']) ? $_POST['nome'] : null;
$artista = ISSET($_POST['artista']) ? $_POST['artista'] : null;
$indicacao = ISSET($_POST['indicacao']) ? $_POST['indicacao'] : null;

switch ($acao){
    case "1": //salvar música
        $sql = "INSERT INTO musica (nome, artista, indicacao, ouviu) VALUES ('$nome', '$artista', '$indicacao', 0)";
        $result = $conn->query($sql);
        $tela = "nao_ouvi.php";
    break;

    case "2": //alterar status
        $sql = "UPDATE musica SET ouviu = 1, obs = '$obs' WHERE id_musica = $id_musica";
        $result = $conn->query($sql);
        $tela = "ouvi.php";
    break;

    case "3": //deletar?
    break;
}
header("Location: $tela");
?>