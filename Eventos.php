<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eventos Notificados - Descrição da página"> <!-- Adicione uma descrição da página -->
    <title>Eventos Notificados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

 <!-- Inicia Barra de Menu -->
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Relatorio.php">Relatorio</a>
          </li>
        
           
            </ul>
          </li>
        </ul>
       
      </div>
    </div>
  </div>
</nav>
    <!-- Encerra barra de Menu-->

       
        <!-- Conteúdo da página -->

        <!-- Colunas da tabela -->
        <h1 class="text-center mb-4">Eventos Notificados</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Unidade</th>
                    <th>Ocorrência</th>
                    <th>Data</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>


<!-- dados impressos na tabela -->
<?php
include_once "conexao.php";
$query = "SELECT Id, Unidade, Ocorrencia, data_ocorrencia FROM eventos_notificados ORDER BY data_ocorrencia DESC";
$result = $conn->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<th scope='row'>" . $row["Id"] . "</th>";
    echo "<td>" . $row["Unidade"] . "</td>";
    echo "<td>" . $row["Ocorrencia"] . "</td>";
    echo "<td>" . $row["data_ocorrencia"] . "</td>";
    echo "<td>";
    echo " <button type='button' class='btn btn-primary btn-detalhes' data-id='" . $row["Id"] . "' data-bs-toggle='modal' data-bs-target='#exampleModal'>Detalhes</button>";
    echo " <button type='button' class='btn btn-warning btn-matriz' data-id='" . $row["Id"] . "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Matriz A3</button>";
    echo "</td>";
    echo "</tr>";
}
?>


<!-- Modal Detalhes da ocorrência -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes da Ocorrência</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="detalhes-conteudo">
                    <!-- Os detalhes do evento serão exibidos aqui -->

                    


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               

            </div>
        </div>
    </div>
</div>

<!---encerra Modal ----->

<!-- Modal Matriz A3 -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Matriz A3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="matriz-a3-conteudo">
        <!-- Aqui você pode exibir os dados da Matriz A3 -->
        <!-- Exemplo: -->
        <p>Data da Matriz: <span id="data_matriz"></span></p>
        <p>Causa Raiz: <span id="causa_raiz"></span></p>
        <!-- Adicione outros campos da Matriz A3 conforme necessário -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

        
      </div>
    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".btn-detalhes").click(function() {
            var eventoId = $(this).data("id");

            $.ajax({
                url: "buscar_evento.php?id=" + eventoId,
                type: "GET",
                success: function(response) {
                    $("#detalhes-conteudo").html(response);
                }
            });
        });

        $(".btn-matriz").click(function() {
            var eventoId = $(this).data("id");

            $.ajax({
                url: "buscar_matriz_a3.php?evento_id=" + eventoId,
                type: "GET",
                success: function(response) {
                    $("#matriz-a3-conteudo").html(response);
                }
            });
        });
    });


    function submitForm() {
    // Ative o botão de envio do formulário
    document.getElementById("submitButton").click();
}
</script>







</body>
</html>