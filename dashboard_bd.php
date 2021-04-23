<?php
 
 header('Content-Type: text/html; charset=utf-8'); 
 
 include 'conexao.php';
 session_start();
     
 //para que o banco aceite caracteres especiais
 mysqli_query($conecta,"SET NAMES 'utf8'");
 mysqli_query($conecta,'SET character_set_connection=utf8');
 mysqli_query($conecta,'SET character_set_client=utf8');
 mysqli_query($conecta,'SET character_set_results=utf8');

$select = "SELECT l.id, c.nome, l.Data, l.Hora FROM cliente as c, lista as l WHERE l.Aprov_Marc = 'marcado'"
$result = $conecta->query($select);
$row = $result->fetch_assoc();

return $row
 ?>

