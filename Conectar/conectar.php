<?php
require_once('config.php');
// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Fecha a conexão
mysqli_close($conn);
?>
