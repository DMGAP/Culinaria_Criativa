<?php
//require_once('config.php');
// Informações de conexão
$servername = "localhost";
$username = "Culinaria_Criativa_ADM";
$password = "B5WgBJ5wRZIDEIe";
$dbname = "db_cc";
// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}


?>
