<?php
//Atualiza timezone para pegar data
date_default_timezone_set('America/Maceio');

//Pega data para apresentar na tela
$data = date('d/m/Y H:i:s');

//Apresenta data na tela
echo $data;