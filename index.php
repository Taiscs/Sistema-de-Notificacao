<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eventos Notificados - Descrição da página"> <!-- Adicione uma descrição da página -->
    <title>Eventos Notificados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel = 'stylesheet' href='css/ocultar.css'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/Exibir.js"></script>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Eventos.php">Eventos Notificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Relatorio.php">Relatorio</a>
          </li>
         
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
</nav>
    <!-- Encerra barra de Menu-->

       
        <!-- Conteúdo da página -->

        <div class="p-0.5 mb-2 bg-light ">

            
<form class="formulario" name="" method="post" action="Notificar.php">
        
        <p></p><h4>Notificação de Eventos e não Conformidades</h4>
    </div><p></p>
    <!-- Unidade -->
    <label for="unidade">Unidade:</label>
    <select class="col-md-3 form-control" name="unidade" id="unidade" aria-label="Unidade">
        <option value=""></option>
        <option value="Matriz">Matriz</option>
        <option value="Convênios">Convênios</option>
        <option value="Mont serrat">Mont Serrat</option>
        <option value="Rio Vermelho">Rio Vermelho</option>
        <option value="Santo Estevão">Santo Estevão</option>
    </select><p></p>
    <!-- Data e Hora do Evento -->
  
    <input type="text" class="mb-3" id="horadoocorrido" name="horadaocorrencia" placeholder="Hora do Evento" required>
    <input type="text" class="mb-3" id="dataocorrencia" name="datadaocorrencia" placeholder="Data do Evento " required><br>





    <!-- Radio Button assinatura -->
     <input class="form-check-input" type="radio" name="mostrartxtouescondertxtass" id="mostrartxtouescondertxtass"value=Sim>Assinar<br>
     <input class="form-check-input" type="radio" name="mostrartxtouescondertxtass"id ="mostrartxtouescondertxtass"value=Não> Fazer uma notificação anônima<br><br>
      
      <!-- Input Assinatura -->
   
      <div id="notificador">
    <input type= "text"class="mb-3" id="assinatura" name="assinado"placeholder="Seu nome completo" /><br>
      </div>
  


<!-- Radio Button Paciente afetado -->
<div id= 'pacienteafetado'>
<div class="p-0.5 mb-2 bg-light text-Black"> O evento afetou o Paciente?</div>
 <input class="form-check-input" type="radio" name="mostrartxtouescondertxt" id="mostrartxtouescondertxt"value=Sim>Sim<br>
 <input class="form-check-input" type="radio" name="mostrartxtouescondertxt"id ="mostrartxtouescondertxt"value=Não> Não<br>
</div>
<!-- Input Nome do paciente afetado -->
<div id ='txtpaciente'>
<input type= "text"class="mb-3" id="nomepaciente" name="nome_paciente" placeholder="Nome do paciente"><br>
</div>
    
    <!--Select do Setor a ser notificado -->

    <div class="p-0.5 mb-2 bg-light text-Black"> Setor a ser notificado:</div>
            <select class="col-md-4" name= "SETOR" aria-label="SETOR">
            
            <option value=''></option>
            <option value='Administração'>Administração</option>
            <option value='Copa'>Copa</option>
            <option value='Enfermagem'>Enfermagem</option>
            <option value='Farmácia'>Farmácia</option>
            <option value='Higienização'>Higienização</option>
            <option value='Manutenção'>Manutenção</option>
             <option value='Nutrição'> Nutrição</option>
            <option value='Psicologia'>Psicologia</option>
            <option value='Portaria'>Portaria</option>
            <option value= 'Recepção'>Recepção</option>
            <option value='Serviço social'>Serviço social</option>
            <option value='Suprimento'>Suprimentos</option>
            <option value='Recepção'>Recepção</option>   
        </select>

      <!-- Select Tipo de ocorrencia -->

      <div class="p-0.5 mb-2 bg-light text-Black">Tipo de ocorrencia:</div>
        <select class="col-md-4" name= "tipo" aria-label="tipo">
            
             <option value=''></option>
            <option value='Aspecto a ser melhorado'>Aspecto a ser melhorado</option>
            <option value='Circustância de risco'>Circustância de risco</option>
            <option value='Evento com dano'>Evento com dano</option>
            <option value='Evento sem dano'>Evento sem dano</option>
            <option value='Não conformidade'>Não conformidade</option>
            <option value='Manutenção'>Near miss</option>
             <option value='Nutrição'> Outro</option>
  
        </select>

           <!-- Select Ocorrencia -->

           <div class="p-0.5 mb-2 bg-light text-Black">Ocorrencia</div>
         <select id='selecao' class="col-md-4" name= "Ocorrencia" aria-label="Default select example">
            
            <option value='Assistencial'>Assistencial</option>
            <option value='Avaria'>Avaria</option>
            <option value='Saude_ocupacional'>Saúde ocupacional</option>
            <option value='Quimico'>Químico</option>
            <option value='Fisico'>Físico</option>
            <option value='Fornecedor_Tercerizado'> Fornecedor Tercerizado</option>
            <option value='Procedimento_Protocolo_padrao'>Procedimento Protocolo padrão</option>
            <option value='Quebra_de_contrato_com_processo_fornecedor'>Quebra de contrato com processo fornecedor</option>
            <option value='Farmacovigilancia'>Farmacovigilância</option>
            <option value='Hemovigilancia'>Hemovigilância</option>
            <option value='Tecnovigilancia'>Tecnovigilância</option>
            <option value='Outro'>Outro</option>      
        </select>

<div id="Assistencial" style="display: none;">
<input class="form-check-input" type="radio"name="band-rock" value="Hematoma Grave"/> Hematoma Grave<br>
<input class="form-check-input" type="radio" name="band-rock" value="Hemólise"/> Hemólise<br>
<input class="form-check-input" type="radio" name="band-rock" value="Obstrução de cateter"/> Obstrução de cateter<br>
<input class="form-check-input" type="radio" name="band-rock" value="Perda de sangue"/> Perda de sangue<br>
<input class="form-check-input" type="radio" name="band-rock" id="Queda"value="Queda"/> Queda<br>
<input class="form-check-input" type="radio" name="band-rock"id="Troca do sistema equivocada" value="Troca do sistema equivocada"/> Troca do sistema equivocada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>

<div id="Avaria" style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>

<div id="Saude_ocupacional" style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>



<div   id= 'Quimico'style="display: none;">
<input  class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>



<div  id= 'Fisico'style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio"name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
<input class="form-check-input" type="radio"name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>

</div>


<div id= 'Fornecedor_Tercerizado'style="display: none;">
 <input class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>

<div  id='Procedimento_Protocolo_padrao'style="display: none;">
 <input class="form-check-input" type="radio" name="band-rock" value="Atendimento ambulatorial"/> Atendimento ambulatorial<br>
<input class="form-check-input" type="radio" name="band-rock" value="Farmácia"/>Farmácia<br>
<input class="form-check-input" type="radio" name="band-rock" value="Faturamento"/>Faturamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Financeiro"/> Financeiro<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão administrativa"/> Gestão administrativa<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de equipamentos"/> Gestão de equipamentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de pessoas"/> Gestão de pessoas"<br>
<input class="form-check-input" type="radio"value="Gestão de Suprimentos"/>Gestão de Suprimentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Higienização"/>Higienização <br>
<input class="form-check-input" type="radio" name="band-rock" value="Recepção"/>Recepção <br>
<input class="form-check-input" type="radio" name="band-rock" value="Faturamento"/>Faturamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Sistema de informação do paciente"/> Sistema de informação do paciente<br>
<input class="form-check-input" type="radio" name="band-rock" value="Terapia Diálitica"/>Terapia Diálitica:HD<br>
<input class="form-check-input" type="radio"name="band-rock" value="Terapia Diálitica"/>Terapia Diálitica:DP<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>
</div>

<div id= 'Quebra_de_contrato_com_processo_fornecedor'style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Assistencia Hemoterápica"/> Assistencia Hemoterápica<br>
<input class="form-check-input" type="radio" name="band-rock" value="CME"/> CME<br>
<input class="form-check-input" type="radio" name="band-rock" value="Diagnóstico"/> Diagnóstico<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de equipamentos"/>Gestão de equipamentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Gestão de Suprimentos"/>Gestão de Suprimentos<br>
<input class="form-check-input" type="radio" name="band-rock" value="Processamento de roupas"/> Processamento de roupas<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>

</div>

<div  id= 'Farmacovigilancia'style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Atraso na administração do medicamento"/>Atraso na administração do medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" id="capilar" value="capilar"/>Capilar<br>
<input class="form-check-input" type="radio" name="band-rock" value="Diluição na administração do medicamento"/> Diluição na administração do medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Dose inadequada na administração do medicamento"/> Dose inadequada na administração do medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Infiltração na infusão da medicação"/>Infiltração na infusão da medicação<br>
<input class="form-check-input" type="radio" name="band-rock" id ="Medicacaovencida" value = "Medicacao vencida"/>Medicamento com prazo de validade vencido<br>
<input class="form-check-input" type="radio" name="band-rock" value="Medicação administrada em via errada"/>Medicação administrada em via errada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Paciente não medicado, mas com prescrição"/> Paciente não medicado, mas com prescrição<br>
<input class="form-check-input" type="radio" name="band-rock" value="Reação adversa ao medicamento"/>Reação adversa ao medicamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Erro no aprazamento"/>Erro no aprazamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>

<div id= 'Hemovigilancia'style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Atraso na instalação"/>Atraso na instalação<br>
<input class="form-check-input" type="radio"name="band-rock" value="Atraso na retirada"/>Atraso na retirada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Hematoma"/>Hematoma<br>
<input class="form-check-input" type="radio" name="band-rock" value="Perda de qualidade no sangue"/>Perda de qualidade no sangue<br>
<input class="form-check-input" type="radio" name="band-rock" value="Reação adversa a hemoterapia"/>Reação adversa a hemoterapia<br>
<input class="form-check-input" type="radio" name="band-rock" value="Recebimento de sangue errado"/>Recebimento de sangue errado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>




<div  id= 'Tecnovigilancia'style="display: none;">
<input class="form-check-input" type="radio" name="band-rock" value="Defeito de fabricação"/>Defeito de fabricação<br>
<input class="form-check-input" type="radio" name="band-rock" value="Desenvolvimento impróprio/Inadequado do projeto"/>Desenvolvimento impróprio/Inadequado do projeto<br>
<input class="form-check-input" type="radio" name="band-rock" value="Erro do usuário quando da utilização dos produtos de saúde"/>Erro do usuário quando da utilização dos produtos de saúde<br>
<input class="form-check-input" type="radio" name="band-rock" value="Falha no produto/equipamento"/>Falha no produto/equipamento<br>
<input class="form-check-input" type="radio" name="band-rock" value="Manuseio errado"/>Manuseio errado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Rotulagem,instruções de uso e embalagem imprópria ou inadequada"/>Rotulagem,instruções de uso e embalagem imprópria ou inadequada<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/>Outro<br>

</div>


<div  id= 'Outro' style="display: none;">
 <input class="form-check-input" type="radio" name="band-rock" value="Aspecto a ser melhorado"/> Aspecto a ser melhorado<br>
<input class="form-check-input" type="radio" name="band-rock" value="Circustância de risco"/> Circustância de risco<br>
 <input class="form-check-input" type="radio" name="band-rock" value="Evento com dano"/> Evento com dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Evento sem dano"/>Evento sem dano<br>
<input class="form-check-input" type="radio" name="band-rock" value="Não conformidade"/> Não conformidade<br>
<input class="form-check-input" type="radio" name="band-rock" value="Near miss"/> Near miss<br>
<input class="form-check-input" type="radio" name="band-rock" value="Outro"/> Outro<br>
</div>  

<div  id ='mostrarinfomed'>

<div class="p-0.5 mb-2 bg-light text-Black">Informações necessárias sobre o medicamento:</div>
<input type= "text"class="mb-3" id="descricaomedicamento" name="descricaomedicamento"placeholder="Informe o medicamento">
<input type= "text"class="mb-3"id="lote" name="lote"placeholder="Informe o lote">
<input type= "text"class="mb-3"id="validade" name="validade"placeholder="Informe a validade">
</div>

<div id ='informacoescapilar'>

<div class="p-0.5 mb-2 bg-light text-Black">Informações necessárias sobre troca do sistema:</div>
<input type= "text"class="mb-3" id="pacientedialise" name="pacientedialise"placeholder="Nome do paciente em diálise">
<input type= "text"class="mb-3"id="nascimentopaciente" name="nascimentopaciente"placeholder="Nascimento do capilar">
<input type= "text"class="mb-3"id="capilardeorigem" name="capilardeorigem"placeholder="Nome do capilar de origem">
<input type= "text"class="mb-3"id="nascimentocapilar" name="nascimentocapilar"placeholder="Nascimento do paciente">

  </div>
  



    <!-- Botão Registrar -->
    <p></p><div class="form-group">
        <label for="descricaoocorrencia">Descreva a ocorrência:</label>
        <textarea class="form-control" id="descricaoocorrencia" name="descricaoocorrencia" rows="4" placeholder="Ocorrido" required></textarea>
    <p></p></div>
    <button type="submit" class="btn btn-warning">Registrar</button>

</div>



<script>
const selecao = document.getElementById("selecao");
const Assistencial = document.getElementById("Assistencial");
const Avaria = document.getElementById("Avaria");
const Saude_ocupacional = document.getElementById("Saude_ocupacional");

const Quimico = document.getElementById("Quimico");
const Fisico = document.getElementById("Fisico");
const Fornecedor_Tercerizado = document.getElementById("Fornecedor_Tercerizado");
const Procedimento_Protocolo_padrao = document.getElementById("Procedimento_Protocolo_padrao");

const Quebra_de_contrato_com_processo_fornecedor = document.getElementById("Quebra_de_contrato_com_processo_fornecedor");
const Farmacovigilancia = document.getElementById("Farmacovigilancia");
const Hemovigilancia = document.getElementById("Hemovigilancia");
const Tecnovigilancia = document.getElementById("Tecnovigilancia");
const Outro = document.getElementById("Outro");

selecao.addEventListener("change", function() {
    const valorSelecionado = selecao.value;

    // Oculta todas as divs
    Assistencial.style.display = "none";
    Avaria.style.display = "none";
    Saude_ocupacional.style.display = "none";

    Quimico.style.display = "none";
    Fisico.style.display = "none";
    Fornecedor_Tercerizado.style.display = "none";

    Procedimento_Protocolo_padrao.style.display = "none";
    Quebra_de_contrato_com_processo_fornecedor.style.display = "none";
    Farmacovigilancia.style.display = "none";
    Hemovigilancia.style.display = "none";
    Tecnovigilancia.style.display = "none";
    Outro.style.display = "none";

    // Exibe a div correspondente à opção selecionada
    if (valorSelecionado === "Assistencial") {
        Assistencial.style.display = "block";
    } else if (valorSelecionado === "Avaria") {
        Avaria.style.display = "block";
    } else if (valorSelecionado === "Saude_ocupacional") {
        Saude_ocupacional.style.display = "block";
    

} else if (valorSelecionado === "Quimico") {
        Quimico.style.display = "block";
    } else if (valorSelecionado === "Fisico") {
        Fisico.style.display = "block";
    

} else if (valorSelecionado === "Fornecedor_Tercerizado") {
    Fornecedor_Tercerizado.style.display = "block";
    } else if (valorSelecionado === "Procedimento_Protocolo_padrao") {
        Procedimento_Protocolo_padrao.style.display = "block";
    

} else if (valorSelecionado === "Quebra_de_contrato_com_processo_fornecedor") {
    Quebra_de_contrato_com_processo_fornecedor.style.display = "block";
    } else if (valorSelecionado === "Farmacovigilancia") {
        Farmacovigilancia.style.display = "block";
    

} else if (valorSelecionado === "Hemovigilancia") {
    Hemovigilancia.style.display = "block";
    } else if (valorSelecionado === "Tecnovigilancia") {
        Tecnovigilancia.style.display = "block";

    } else if (valorSelecionado === "Outro") {
        Outro.style.display = "block";
    
    }
});  
</script>



</form>
</body>
</html>