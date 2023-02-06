<!-- DEBUG -->
<!-- O include da aula foi feito com sucesso! -->

<!---------------------------------------- FORM - INICIO ---------------------------------------->

<p><small>Nome</small></p>
<input type="text" placeholder="Digite seu nome" id="frm-nome">

<br>

<p><small>Email</small></p>
<input type="text" placeholder="Digite seu email" id="frm-email">

<br>

<p><small>Mensagem</small></p>
<textarea cols="30" rows="6" id="frm-mensagem">Digite aqui sua mensagem.</textarea>

<br>

<p><button type="button" onclick="ajax_post_data();">Enviar</button></p>

<!---------------------------------------- FORM - FIM ---------------------------------------->

<script>
	function ajax_post_data(){
		//Pega dados do form
		let ajax_pt_nm = $('#frm-nome').val();
		let ajax_pt_em = $('#frm-email').val();
		let ajax_pt_mg = $('#frm-mensagem').val();
		
		// DEBUG
		// console.log('Nome: '+ajax_pt_nm);
		// console.log('Email: '+ajax_pt_em);
		// console.log('Mensagem: '+ajax_pt_mg);
		
		//AJAX - Objeto
		let ajax_pt_ob = new XMLHttpRequest();
		
		//AJAX - Resposta
		ajax_pt_ob.onreadystatechange = function(){
			
			//Valida se requisicao retornou 'OK'
			if(this.readyState == 4 && this.status == 200){
				alert('Os dados foram enviados ao servidor com sucesso!');
			}
			
			//Valida se requisicao retornou 'ERRO'
			if(this.readyState == 4 && this.status != 200){
				alert('Os dados não foram enviados ao servidor pois houve um erro!');
			}
		}
		
		//AJAX - Parametros
		ajax_pt_ob.open('POST', '003/servidor.php', true);
		ajax_pt_ob.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		
		//AJAX - Requisição
		ajax_pt_ob.send('frm_nome=' + ajax_pt_nm + '&frm_email=' + ajax_pt_em + '&frm_mensagem=' + ajax_pt_mg);
	}
</script>