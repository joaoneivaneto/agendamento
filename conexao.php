<?php 

//cria a conexão com o banco de dados
$conecta = new mysqli ("localhost","root","") or die ("Erro de conexao");
$selecionar =  mysqli_select_db($conecta, "atendimento_pandemia") or die ("Erro ao conectar a base de dados");
?>