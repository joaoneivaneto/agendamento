<?php
 
 header('Content-Type: text/html; charset=utf-8'); 
 
 include 'conexao.php';
     
 //para que o banco aceite caracteres especiais
 mysqli_query($conecta,"SET NAMES 'utf8'");
 mysqli_query($conecta,'SET character_set_connection=utf8');
 mysqli_query($conecta,'SET character_set_client=utf8');
 mysqli_query($conecta,'SET character_set_results=utf8');
 session_start();
 $email = $_POST["email"];
 $senha = $_POST["senha"];
 
 

 $_SESSION['Email']= $email;
 $_SESSION['Senha'] = $senha;
 
 
 
 $verificar_usuario=  "select * from cadastro where Email = '$email'";
$result = $conecta->query($verificar_usuario);
$row1 = $result->fetch_assoc() ;

$verificar_senha=  "select * from cadastro where senha = '$senha'";
$result1 = $conecta->query($verificar_senha);
$row2 = $result1->fetch_assoc() ;

 
 
 if( $row1['Email'] == $email && $row2['Senha'] == $senha ){   
    
    $result = $conecta->query($verificar_usuario);
    $row = $result->fetch_assoc() ;
    if($row['tipo'] == "PF"){
        echo '

        <script type="text/javascript"> 
                window.alert("LOGIN BEM SUCEDIDO"); 
                location.href="lista_usuario.php";
                
        </script>';

    }else{
        echo '

        <script type="text/javascript"> 
                window.alert("LOGIN BEM SUCEDIDO"); 
                location.href="lista_estabelecimento.php";
                
        </script>';

    }
        
    
    
 }else{
    echo '

    <script type="text/javascript"> 
            window.alert("LOGIN MAL SUCEDIDO! USUARIO OU SENHA INCORRETO"); 
            location.href="index.php";
            
    </script>';
    
 }  
        
 ?>