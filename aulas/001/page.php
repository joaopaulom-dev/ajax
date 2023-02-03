<!-- DEBUG -->
<!-- O include da aula foi feito com sucesso! -->

<h3>Mensagens</h3>
<button type="button" id="ms-reload">Recarregar mensagens</button>
<div id="ms-container" style="padding: 20px; border: 1px solid #2D2D2D;"></div>

<script>
	setTimeout(function(){
		//Inicia ajax quando clicar no button
		$('#ms-reload').click(up_messages);
	},1000);
	
	function up_messages(){
		// DEBUG
		// console.log('O ajax foi iniciado com sucesso!');
		
		// -------------------------------- AJAX - INICIO -------------------------------- //
		
		//Cria objeto ajax para requisicao
		let ajax_rq_ob = new XMLHttpRequest();
		
		//Pega resposta e apresenta na tela
		ajax_rq_ob.onreadystatechange = function(){
			$('#ms-container').html(this.responseText);
		}
		
		//Cria parametros para a requisicao
		ajax_rq_ob.open('GET', '001/messages.php', true);
		
		//Envia requisicao para servidor
		ajax_rq_ob.send();
		
		// -------------------------------- AJAX - FIM -------------------------------- //
	}
</script>