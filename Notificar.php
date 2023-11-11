<?php
include_once("conexao.php"); // Inclua a conexão PDO com o banco de dados

// Dados recebidos do formulário
$unidade = $_POST['unidade'];
$data = $_POST['datadaocorrencia'];
$hora = $_POST['horadaocorrencia'];
$assinado = $_POST['mostrartxtouescondertxtass'];
$assinatura = $_POST['assinado'];
$afetou_paciente = $_POST['mostrartxtouescondertxt'];
$paciente_afetado = $_POST['nome_paciente'];
$setor = $_POST['SETOR'];
$tipo = $_POST['tipo'];
$Ocorrencia = $_POST['Ocorrencia'];
$ocorrido = $_POST['band-rock'];
$medicamento = $_POST['descricaomedicamento'];
$lote = $_POST['lote'];
$validade_medicamento = $_POST['validade'];
$paciente_dialisado = $_POST['pacientedialise'];
$nascimento_paciente = $_POST['nascimentopaciente'];
$capilar_origem = $_POST['capilardeorigem'];
$nascimento_capilar = $_POST['nascimentocapilar'];
$descricao = $_POST['descricaoocorrencia'];

try {
    // Prepare a chamada da procedure
    $stmt = $conn->prepare("CALL InserirOcorrencia(:unidade, :data, :hora, :assinado, :assinatura, :afetou_paciente, :paciente_afetado, :setor, :tipo, :Ocorrencia, :ocorrido, :medicamento, :lote, :validade_medicamento, :paciente_dialisado, :nascimento_paciente, :capilar_origem, :nascimento_capilar, :descricao)");

    // Vincule os parâmetros
    $stmt->bindParam(':unidade', $unidade);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':hora', $hora);
    $stmt->bindParam(':assinado', $assinado);
    $stmt->bindParam(':assinatura', $assinatura);
    $stmt->bindParam(':afetou_paciente', $afetou_paciente);
    $stmt->bindParam(':paciente_afetado', $paciente_afetado);
    $stmt->bindParam(':setor', $setor);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->bindParam(':Ocorrencia', $Ocorrencia);
    $stmt->bindParam(':ocorrido', $ocorrido);
    $stmt->bindParam(':medicamento', $medicamento);
    $stmt->bindParam(':lote', $lote);
    $stmt->bindParam(':validade_medicamento', $validade_medicamento);
    $stmt->bindParam(':paciente_dialisado', $paciente_dialisado);
    $stmt->bindParam(':nascimento_paciente', $nascimento_paciente);
    $stmt->bindParam(':capilar_origem', $capilar_origem);
    $stmt->bindParam(':nascimento_capilar', $nascimento_capilar);
    $stmt->bindParam(':descricao', $descricao);

    // Execute a procedure
    $stmt->execute();

    echo "Evento Notificado com Sucesso!";
} catch (PDOException $e) {
    echo "Erro ao notificar o evento: " . $e->getMessage();
}


 
echo '<script>';
echo '  alert("Evento Notificado.");'; // Exibe um alerta
echo '  window.location.href = "index.php";'; // Redireciona para a página "index.php"
echo '</script>';
// Feche a conexão
$conn = null;
?>
