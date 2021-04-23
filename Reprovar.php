<?php

 
header('Content-Type: text/html; charset=utf-8'); 

include 'conexao.php';
    
//para que o banco aceite caracteres especiais
mysqli_query($conecta,"SET NAMES 'utf8'");
mysqli_query($conecta,'SET character_set_connection=utf8');
mysqli_query($conecta,'SET character_set_client=utf8');
mysqli_query($conecta,'SET character_set_results=utf8');
session_start();
$id=$_SESSION["id1"];
$sql = "UPDATE lista SET Aprov_Marc = 'Negado' where Id='$id'";
$resultado = $conecta -> query($sql);
echo '

<script type="text/javascript"> 
        window.alert("Confirmação bem sucedida"); 
        location.href="lista_estabelecimento.php";
        
</script>';

?>