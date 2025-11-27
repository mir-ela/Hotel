<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // coletando os dados do formulário
    $nome = htmlspecialchars($_POST['fnome']);
    $sexo = $_POST['opcao'];
    $email = htmlspecialchars($_POST['fmail']);
    $data_chegada = $_POST['data-chegada'];
    $numero_noites = $_POST['numero-noites'];
    $numero_hospedes = $_POST['numero-hospedes'];
    $total_estimado = $_POST['total-estimado']; 
    $comentario = htmlspecialchars($_POST['comentario']);
    $newsletter = isset($_POST['newsletter']) ? $_POST['newsletter'] : 'Não';

    // exibindo os dados na página
    echo "<h3>Reserva Confirmada:</h3>";
    echo "Nome: $nome<br>";
    echo "Sexo: $sexo<br>";
    echo "E-mail: $email<br>";
    echo "Data de Chegada: $data_chegada<br>";
    echo "Número de Noites: $numero_noites<br>";
    echo "Número de Hóspedes: $numero_hospedes<br>";
    echo "Total Estimado: R$ $total_estimado<br>";
    echo "Comentário: $comentario<br>";
    echo "Inscrição na Newsletter: $newsletter<br>";
}    echo "<h3>Reserva Confirmada";

?>
