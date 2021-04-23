<!doctype html>
<html lang="en">
  <head>
  	<title>lista de cadastro de atendimento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
  <?php include "conexao.php";  session_start();?>

	</head>
	<body>
        
        <nav class="navbar navbar-dark bg-dark">
            <p class="h1 0.5cm" >lista de atendimentos</p>
            <button type="button" class="btn btn btn-light" data-toggle="modal" data-target="#exampleModalCenter2">
                <input type="image" src="https://img.icons8.com/ios/452/online-store.png" alt="Submit" style="float:right" width="48" height="48">
            </button>
            <form action="index.php">
            <input type="image" src="sair.png" alt="Submit" style="float:right" width="48" height="48">
            </form>
           
          </nav>
          <h4 style="text-align: center;">Atendimentos Em Andamento</h4>
            
            <?php 
              $email= $_SESSION['Email'];
              
             $sql1 = "SELECT lista.Id,Nome,Hora,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE Email ='$email' AND Aprov_Marc='Em Andamento'";

              $result1 = $conecta->query($sql1);
              if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
            ?>
             <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"  >
                <?php
                  $date1= $row1["Data"];
                  $date=date_create("$date1"); 
                   
                  echo  "Nome: ". utf8_encode($row1["Nome"])." "."Horario: ". $row1["Hora"]. " "."Data: ".date_format($date,"d/m/Y");
                  echo "<a href='confirmar.php?id=" . $row1['Id'] .",Negado". "'data-confirm='Tem certeza que deseja negar essa atendimento?' name='confi'>
                  <img src='cancel.png' alt='apagar' style='float:right' width='48' height='48'></a>";
                  echo "<a href='confirmar.php?id=" . $row1['Id'] .",Marcado". "'data-confirm='Tem certeza que deseja aceitar esse atendimento?'>
                  <img src='confirm.png' alt='apagar' style='float:right' width='48' height='48'></a>"; 
                  
                ?>
                  
            
                  

            </li>
              <?php  } ?>
            <?php  
            } else {
              echo '<p style="text-align: center;">'. "Não existem Atendientos Em Andamento".'</p>';
            }
            ?>


        
          <h4 style="text-align: center;">Atendimentos Aprovados</h4>
            
                <?php 
                  $email= $_SESSION['Email'];
                  
                 $sql1 = "SELECT lista.Id,Nome,Hora,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE Email ='$email' AND Aprov_Marc='Aprovado'";

                  $result1 = $conecta->query($sql1);
                  if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                ?>
                 <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center"  >
                    <?php  
                     $date1= $row1["Data"];
                     $date=date_create("$date1"); 
                      echo  "Nome: ".utf8_encode($row1["Nome"])." "."Horario: ". $row1["Hora"]. " "."Data: ". date_format($date,"d/m/Y");
                     
                      
                    ?>
                      
                
                      

                </li>
                  <?php  } ?>
                <?php  
                } else {
                  echo '<p style="text-align: center;">'. "Não existem atendientos Aprovados".'</p>';
                }
                ?>




                 <h4 style="text-align: center;">Atendimentos Negado</h4>
            
            <?php 
              $email= $_SESSION['Email'];
              
             $sql1 = "SELECT lista.Id,Nome,Hora,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE Email ='$email' AND Aprov_Marc='Negado'";

              $result1 = $conecta->query($sql1);
              if ($result1->num_rows > 0) {
                // output data of each row
                while($row1 = $result1->fetch_assoc()) {
            ?>
             <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"  >
                <?php   
                  $date1= $row1["Data"];
                  $date=date_create("$date1"); 
                  echo  "Nome: ".utf8_encode($row1["Nome"])." "."Horario: ". $row1["Hora"]. " "."Data: ".  date_format($date,"d/m/Y");
                  
                  
                ?>
                  
            
                  

            </li>
              <?php  } ?>
            <?php  
            } else {
              echo '<p style="text-align: center;">'. "Não existem Atendientos Negados".'</p>';
            }
            ?>
             
     
              </ul>

        

  

  
        
    
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dados do Estabelecimento</h5>
          &nbsp;&nbsp;&nbsp;
          <input data-toggle="modal" data-target="#exampleModalCenter3" type="image" src="editar.png" alt="Submit" style="float:right" width="40" height="30">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <?php
            $email= $_SESSION['Email'];
            $verificar_usuario=  "select * from cadastro inner join estabelecimento on cadastro.Id=estabelecimento.Id_cadastro1  where Email = '$email'";
            $result = $conecta->query($verificar_usuario);
            $row1 = $result->fetch_assoc() ;
          ?>
            <ul class="list-group list-group-flush">
                 <li class="list-group-item">Nome: <?php echo $row1["Razao"] ?></li>
                <li class="list-group-item">Data de Nacimento: <?php echo $row1["Data"] ?></li>
                <li class="list-group-item">Email: <?php echo $row1["Email"] ?></li>
                <li class="list-group-item">CNPJ: <?php echo $row1["CNPJ"] ?></li>
                <li class="list-group-item">Telefone: <?php echo $row1["Telefone"] ?> </li>
                <h5>dados de Endereço</h5>
                <li class="list-group-item" >
                <?php 
                  echo "<h6>". $row1["Rua"] . ", " . $row1["Nun_Casa"] .  ", " . $row1["Bairro"] .  ", " . $row1["Complemento"] . 
                  ", " . $row1["Cidade"]   .  ", " . $row1["Estado"] .", ". $row1["Cidade"] . ", ". $row1["cep"]. ", ". $row1["Data"] ."</h6>";
                ?>
                </li>
              </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
          
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">editar dados do usuario</h5>
          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" id= "" name="" method=''>
        <div class="modal-body">
           <div class="form-group col-md-10">
                <label for="inputTelefone">Telefone</label>
                <input type="tel" required="required"  maxlength="15"  pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="Formato: (33) 99999-9999" class="form-control"    name ="inputTelefone4" value ="<?php echo $row1["Telefone"] ?>">
            </div>
            <div class="form-group col-md-10">
                <label for="inputRua4">Rua</label>
                <input type="Text" required="required"  maxlength="50" pattern="[a-zA-Z][a-zA-Z0-9-_\. ]{0,50}$"  title="Apenas Letras"  class="form-control" id="inputRua4" name = "inputRua4" value = "<?php echo $row1["Rua"] ?>">
            </div>
            <div class="form-group col-md-10">
                <label for="inputBairro4">Bairro</label>
                <input type="Text" class="form-control" required="required"  maxlength="20" pattern="[a-zA-Z][a-zA-Z0-9-_\. ]{0,20}$"  title="Apenas Letras"  id="inputBairro4" name = "inputBairro4" value = <?php echo $row1["Bairro"] ?>>
            </div>
            <div class="form-group col-md-10">
                <label for="inputNunCasa4">Numero Da Casa</label>
                <input type="Text" class="form-control" class="form-control" required="required"  maxlength="5" pattern="[0-9]+$" title="Apenas Nyúmeros " id="inputNunCasa4" name="inputNunCasa4" value = <?php echo $row1["Nun_Casa"]?>>
            </div>
            <div class="form-group col-md-10">
                <label for="inputComplemento4">Complemento</label>
                <input type="Text" class="form-control" id="inputComplemento4" required="required"  maxlength="10" pattern="[a-zA-Z][a-zA-Z0-9-_\. ]{0,20}$"  title="Apenas Letras"  name="inputComplemento4"  value = <?php echo $row1["Complemento"] ?>>
            </div>
            <div class="form-group col-md-10">
                <label for="inputCidade4">Cidade</label>
                <input type="Text" class="form-control" id="inputCidade4" required="required"  maxlength="50" pattern="[a-zA-Z][a-zA-Z0-9-_\. ]{0,20}$"  title="Apenas Letras" name="inputCidade4" value = <?php echo $row1["Cidade"] ?>>
            </div>
            <div class="form-group col-md-10">
                <label for="inputEstado4">Estado</label>
                <input type="Text" class="form-control" required="required"  maxlength="2" pattern="[A-Z][A-Z0-9-_\.]{0,20}$"  title="Apenas 2 Letras Mauisculas" id="inputEstado4" name= "inputEstado4" value = <?php echo $row1["Estado"] ?>>
            </div>
            <div class="form-group col-md-10">
                <label for="inputCep4">CEP</label>
                <input type="Text" class="form-control"  required="required"  maxlength="10" pattern="\d{5}-\d{3}"  title="Formato: 99999-000" name= "inputcep4" value = <?php echo $row1["cep"] ?>>
            </div>
            
            
            
          
        </div>  
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
          <button type="submit" class="btn btn-primary">salvar</button>
        </form>
        </div>
        
      </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
      </div>
      <form action="confirmar.php" id= "marc" name="marc" method='post'>
      <input type="hidden" id="custId" name="marc" value="Negado">
               
      <div class="modal-body">
        Se clicar nesse botão voce negará um atendimento.
        voce tem certeza que deseja fazer isso?
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-bs-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-success">Sim</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
      </div>
      <form action="confirmar.php" id= "marc" name="marc" method='post'>
      <input type="hidden" id="Marc" name="marc1" value="Marcado">
      
      <div class="modal-body">
      
        Se clicar nesse botão voce aprovará um atendimento.
        voce tem certeza que deseja fazer isso?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-success">Sim</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

