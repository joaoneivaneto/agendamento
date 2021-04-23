<?php

 
header('Content-Type: text/html; charset=utf-8'); 

include 'conexao.php';
    
//para que o banco aceite caracteres especiais
mysqli_query($conecta,"SET NAMES 'utf8'");
mysqli_query($conecta,'SET character_set_connection=utf8');
mysqli_query($conecta,'SET character_set_client=utf8');
mysqli_query($conecta,'SET character_set_results=utf8');

$status=$_GET["id"];
$statusExplode= explode(",",$status);
$id=$statusExplode[0];
session_start();
$_SESSION["id1"]=$id;

if($statusExplode[1]=="Marcado"){
  
   echo '
      

      <script>
      window.onload = function() {
         setTimeout("funcao1()",5/0);
      }
      function funcao1()
      {
         
         var r=confirm("Tem certeza seja confirmar esse tendimento!");
         if (r==true)
      {';
            
            echo'location.href="aprovar.php"';
      echo' }
      else
      {
         location.href="lista_estabelecimento.php"
      }
      document.getElementById("demo").innerHTML=x;
   }
   </script>';
   }
 else{
   echo '
      

      <script>
      window.onload = function() {
         setTimeout("funcao1()",5/0);
      }
      function funcao1()
      {
         
         var r=confirm("Tem certeza que deseja negar o atendimento!");
         if (r==true)
      {';
           
            echo'location.href="Reprovar.php"';
      echo' }
      else
      {
         location.href="lista_estabelecimento.php"
      }
      document.getElementById("demo").innerHTML=x;
   }
   </script>';
   }
  
 
    
   
 
   
   

       
   
   

       

?>