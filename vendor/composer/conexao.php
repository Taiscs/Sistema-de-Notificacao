<?php
$servername = "localhost"; // Altere para o endereço do seu servidor MySQL, se necessário
$username = "root"; // Substitua pelo nome de usuário do MySQL
$password = ""; // Substitua pela senha do MySQL
$database = "notificacao"; // Substitua pelo nome do banco de dados que você deseja conectar

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida"; // Isso é exibido se a conexão for bem-sucedida

// Agora você pode realizar consultas e operações no banco de dados usando $conn

// Lembre-se de fechar a conexão quando terminar de usá-la

?>
