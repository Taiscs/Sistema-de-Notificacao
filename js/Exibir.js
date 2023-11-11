$(document).ready(function(){
                     
    $('input[id="mostrartxtouescondertxtass"]').change(function(){

      if ($('input[id="mostrartxtouescondertxtass"]:checked').val()==="Sim"){

          $('#notificador').show();
        }else{

           $('#notificador').hide();

       }
       });

       });


           /* Exibir e recolher campo  Paciente */
       $(document).ready(function(){
    
    $('input[id="mostrartxtouescondertxt"]').change(function(){

      if ($('input[id="mostrartxtouescondertxt"]:checked').val()==="Sim"){

          $('#txtpaciente').show();
        }else{

           $('#txtpaciente').hide();

       }
       });

       });

      
/* Exibir e recolher Div Medicação vencida */
       $(document).ready(function(){
    
    $('input[id="Medicacaovencida"]').change(function(){

      if ($('input[id="Medicacaovencida"]:checked').val()==="Medicacao vencida"){

          $('#mostrarinfomed').show();
        }else{

           $('#mostrarinfomed').hide();

       }
       });

       });


/* Exibir e recolher Div Informações Capilar */





$(document).ready(function(){
    
    $('input[id="Troca do sistema equivocada"]').change(function(){

      if ($('input[id="Troca do sistema equivocada"]:checked').val()==="Troca do sistema equivocada"){

          $('#informacoescapilar').show();
        }else{

           $('#informacoescapilar').hide();

       }
       });

       });



       
