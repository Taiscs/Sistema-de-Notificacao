<?php
include_once "conexao.php";

if (isset($_GET["id"])) {
    $eventoId = $_GET["id"];
  
    // Consulta SQL para buscar os detalhes do evento
    $query = "SELECT * FROM eventos_notificados WHERE Id = :id  ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $eventoId);
    $stmt->execute();
    $evento = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($evento) {
        

        echo "<p><b>Detalhes da Notificação</b> " . "</p>";

        echo "<p>Nº: " . $evento["Id"] . "</p>";
        echo "<p>Unidade: " . $evento["Unidade"] . "</p>";
        echo "<p>Ocorrência: " . $evento["Ocorrencia"] . "</p>";
        echo "<p>Data do Evento: " . $evento["data_ocorrencia"] . "</p>";




        echo "<p>Hora do Evento:   " . $evento["hora_ocorrencia"] . "</p>";
        echo "<p>Quando foi notificado: " . $evento["data_hora"] . "</p>";
        echo "<p>Assinado?<br>" . $evento["Assinado"] . "</p>";
        echo "<p>Assinatura:<br>" . $evento["Assinatura"] . "</p>";
       

        echo "<p><b>Detalhes da ocorrência</b> " . "</p>";
        echo "<p>Afetou Paciente?<br>" . $evento["Afetou_o_paciente"] . "</p>";
        echo "<p>Paciente Afetado:<br>" . $evento["Paciente_Afetado"] . "</p>";
        echo "<p>Setor: " . $evento["Setor"] . "</p>";
        echo "<p>Situação: " . $evento["Tipo"] . "</p>";
        echo "<p>Tipo:  " . $evento["Ocorrencia"] . "</p>";
        echo "<p>Ocorrido:  " . $evento["Ocorrido"] . "</p>";

        echo "<p><b>Detalhes Farmacovigilância</b> " . "</p>";
        echo "<p>Medicamento: " . $evento["Medicamento"] . "</p>";
        echo "<p>Lote: " . $evento["Lote"] . "</p>";
        echo "<p>Validade: " . $evento["Validade"] . "</p>";



        echo "<p><b>Detalhes Troca de sistema Equivocado</b> " . "</p>";
        echo "<p>Paciente Dialisado: " . $evento["Paciente_Dialise"] . "</p>";
        echo "<p>Data de Nascimento:  " . $evento["Nascimento_Paciente"] . "</p>";
        echo "<p>Paciente Capilar: " . $evento["Nome_capilar_origem"] . "</p>";
        echo "<p>Data de nascimento do Capilar:  " . $evento["Nascimento_capilar"] . "</p>";
        // Adicione outros campos aqui...
    } else {
        echo "Evento não encontrado.";
    }
} else {
    echo "ID do evento não especificado.";
}
?>
