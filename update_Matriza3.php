<?php
// Conecte ao banco de dados
include_once "conexao.php";

// Verifique se o formulário de atualização foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os valores do formulário (substitua com os nomes dos seus campos)
    $eventoId = $_POST["id_ocorrencia"];
    $data_matriz = $_POST["data_matriz"];
    $desfecho = $_POST["desfecho"];
    $causas_potenciais = $_POST["causas_potenciais"];
    $causa_raiz = $_POST["causa_raiz"];
    $raiz = $_POST["raiz"];
    $oque = $_POST["oque"];
    $quem = $_POST["quem"];
    $quando = $_POST["quando"];
    $acoes = $_POST["acoes"];

    // Crie uma consulta SQL de atualização
    $query = "UPDATE matriz_a3 SET data_matriz = :data_matriz, desfecho = :desfecho, causas_potenciais = :causas_potenciais, causa_raiz = :causa_raiz, raiz = :raiz, oque = :oque, quem = :quem, quando = :quando, acoes = :acoes  WHERE id_notificacao = :eventoId";
    $stmt = $conn->prepare($query);


    // Vincule os parâmetros
    $stmt->bindParam(':eventoId', $eventoId, PDO::PARAM_INT);
    $stmt->bindParam(':data_matriz', $data_matriz, PDO::PARAM_STR);
    $stmt->bindParam(':desfecho', $desfecho, PDO::PARAM_STR);
    $stmt->bindParam(':causas_potenciais', $causas_potenciais, PDO::PARAM_STR);
    $stmt->bindParam(':causa_raiz', $causa_raiz, PDO::PARAM_STR);
    $stmt->bindParam(':raiz', $raiz , PDO::PARAM_STR);
    $stmt->bindParam(':oque', $oque, PDO::PARAM_STR);
    $stmt->bindParam(':quem', $quem, PDO::PARAM_STR);
    $stmt->bindParam(':quando', $quando, PDO::PARAM_STR);
    $stmt->bindParam(':acoes',  $acoes, PDO::PARAM_STR);

    // Execute a consulta
    if ($stmt->execute()) {
        // A atualização foi bem-sucedida
        echo "Registro atualizado com sucesso.";
    } else {
        // A atualização falhou
        echo "Erro ao atualizar o registro: " . $stmt->errorInfo()[2];
    }
}

echo '<script>';
echo '  alert("A Matriz foi atualizada.");'; // Exibe um alerta
echo '  window.location.href = "eventos.php";'; // Redireciona para a página "eventos.php"
echo '</script>';
?>
