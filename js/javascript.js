$(document).ready(function() {


$('#select').on('change',function(){


 var selectvalor = '#'+$(this).val();

$('#geral').children('div').hide();
$('#geral').children(selectvalor).show();

 
	
});


});

