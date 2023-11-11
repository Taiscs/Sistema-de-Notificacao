<?php
// Verifique se o parâmetro "evento_id" foi recebido via GET
if (isset($_GET['evento_id'])) {
    // Conecte ao seu banco de dados
    include_once "conexao.php";

    // Recupere o ID do evento da solicitação
    $eventoId = $_GET['evento_id'];

    // Construa uma consulta SQL para buscar a Matriz A3 com base no ID do evento
    $query = "SELECT * FROM matriz_a3 WHERE id_notificacao = :eventoId";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':eventoId', $eventoId, PDO::PARAM_INT);
    $stmt->execute();

    // Verifique se a consulta retornou resultados
    if ($stmt->rowCount() > 0) {
        $matrizA3Data = $stmt->fetch(PDO::FETCH_ASSOC);


        // Abra o formulário antes de adicionar os campos
        echo '<form id="seuFormulario" method="post" action="update_Matriza3.php">';
        
       // Aqui você pode exibir os dados da Matriz A3
       echo '<h6>Ocorrencia Nº' . $eventoId . '</h6>';

       echo '<input type="hidden" name="id_ocorrencia" value="'.  $eventoId. '">';

       echo '<div class="row g-3">';
       echo '<label for="data_matriz">Data da Matriz:</label>';
       echo '<input type="text" id="data_matriz" name="data_matriz" class="form-control" value="' . $matrizA3Data['data_matriz'] . '">';
       echo '</div>';

       echo '<div class="row g-3">';
       echo '<label for="data_ocorrencia">Data da ocorrencia:</label>';
       echo '<input type="text" id="data_ocorrencia" name="data_ocorrencia" class="form-control" value="' . $matrizA3Data['data_ocorrencia'] . '">';

       echo '<label for="unidade">Unidade:</label>';
       echo '<input type="text" id="unidade" name="unidade" class="form-control" value="' . $matrizA3Data['unidade'] . '"><p></p>';
       echo '</div>';


       echo '<div class="row g-3">';
       echo '<label for="desfecho">Desfecho:</label>';
       echo '<textarea class="form-control" id="desfecho" name="desfecho">' . $matrizA3Data['desfecho'] . '</textarea>';
       echo '</div>';


       echo '<div class="row g-3">';
       echo '<label for="causas_potenciais">Causas potenciais:</label>';
       echo '<input type="text" id="causas_potenciais" name="causas_potenciais" class="form-control" value="' . $matrizA3Data['causas_potenciais'] . '">';
       

       
       echo '<label for="causa_raiz">Causa Raiz:</label>';
       echo '<input type="text" id="causa_raiz" name="causa_raiz" class="form-control" value="' . $matrizA3Data['causa_raiz'] . '">';
       
       echo '<label for="raiz">Raiz:</label>';
       echo '<input type="text" id="raiz" name="raiz" class="form-control" value="' . $matrizA3Data['raiz'] . '">';
       echo '</div>';

       echo '<label for="O quê ?">O que?:</label>';
       echo '<input type="text" id="oque" name="oque" class="form-control" value="' . $matrizA3Data['oque'] . '">';
       
       echo '<label for="causa_raiz">Quem ?:</label>';
       echo '<input type="text" id="quem" name="quem" class="form-control" value="' . $matrizA3Data['quem'] . '">';
       
       echo '<label for="quando">Quando ?:</label>';
       echo '<input type="text" id="quando" name="quando" class="form-control" value="' . $matrizA3Data['quando'] . '">';
       
       echo '<div class="row g-3">';
       echo '<label for="acoes">Ações:</label>';
       echo '<textarea class="form-control" id="acoes" name="acoes">' . $matrizA3Data['acoes'] . '</textarea>';
       echo '</div><p></p>';
        // ... Outros campos ...

        // Botão "Registrar" dentro do formulário
        echo '<button type="submit" class="btn btn-danger">Registrar</button>';
        
        // Feche o formulário
        echo '</form>';

        // Adicione outros campos da Matriz A3 conforme necessário
    } else {
        echo 'Nenhuma Matriz A3 encontrada para o Evento #' . $eventoId;
    }
} else {
    echo 'ID do evento não fornecido na solicitação.';

    // Após concluir o processamento, redirecione para a página "eventos.php"

}




?>
