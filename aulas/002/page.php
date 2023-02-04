<!-- DEBUG -->
<!-- O include da aula foi feito com sucesso! -->

<p>Hora: <span id="up-time"></span></p>
<button type="button" id="btn-up-time">Atualizar hora</button>

<script>
	setTimeout(function(){
		//Inicia ajax quando clicar no button
		$('#btn-up-time').click(up_time);
		
		//Atualiza hora com dados do servidor
		up_time();
	},1000);
	
	function up_time(){
		// DEBUG
		// console.log('O ajax foi iniciado com sucesso!');
		
		// -------------------------------- AJAX - INICIO -------------------------------- //
		
		//Cria objeto ajax para requisicao
		let ajax_rq_ob = new XMLHttpRequest();
		
		//Pega resposta e apresenta na tela
		ajax_rq_ob.onreadystatechange = function(){
			
			//Valida se requisicao retornou 'ok'
			if(this.readyState == 4 && this.status == 200){
				$('#up-time').html(this.responseText);
			}
			
			//Valida se requisicao retornou erro
			if(this.readyState == 4 && this.status != 200){
				alert('As mensagens não foram carregadas pois houve um erro!');
			}
		}
		
		//Cria parametros para a requisicao
		ajax_rq_ob.open('GET', '002/time.php?t=<?php echo time(); ?>', true);
		
		//Envia requisicao para servidor
		ajax_rq_ob.send(); 
		
		// -------------------------------- AJAX - FIM -------------------------------- //
	}
</script>