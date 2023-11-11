<?php

$servername = "localhost"; //endereço do seu servidor MySQL, se necessário
$username = "root"; // nome de usuário do MySQL
$password = ""; //senha do MySQL
$database = ""; //  nome do banco de dados que você deseja conectar

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

?>
