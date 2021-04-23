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
            <button type="button" class="btn btn btn-light" data-toggle="modal" data-target="#exampleModalCenter2">
                <input type="image" src="Icon_usuario.png" alt="Submit" style="float:right" width="60" height="60">
            </button>
            <h1 style="text-align: center;">lista de atendimentos</h1>
            
            <button type="button" class="btn btn-warning float-right ml-19" data-toggle="modal" data-target="#exampleModalCenter">
                Marcar

            </button>
            <form action="index.php">
            <input type="image" src="sair.png" alt="Submit" style="float:right" width="48" height="48">
            </form>
          </nav>
          <h4 style="text-align: center;">Atendimentos Em andamento</h4>
          <?php 
                  
                  $email2= $_SESSION['Email'];
                  
                  $sql1 = "SELECT Razao,Hora,Aprov_marc,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE EXISTS (SELECT cliente.Id FROM cliente INNER JOIN cadastro ON cliente.Id_cadastro=cadastro.Id WHERE Email='$email2') AND\n"

    . "Aprov_marc='Em andamento'";

                  $result1 = $conecta->query($sql1);
                  if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                ?>
                 <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                 
                   <?php 
                     $date1= $row1["Data"];
                     $date=date_create("$date1"); 
                     echo "Estabelecimento: ".$row1["Razao"]." "."Horario: ". $row1["Hora"]. " ". "Data: ".date_format($date,"d/m/Y");
                   
                   ?>
                  <?php if($row1["Aprov_marc"]=="Em Andamento"){?>
                    <span class="badge badge-primary badge-pill"><?php echo $row1["Aprov_marc"];?></span>
                  <?php }?>
                  <?php
                      if($row1["Aprov_marc"]=="Aprovado") {
                      echo '<span class="badge badge-success badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }if($row1["Aprov_marc"]=="Negado"){
                      echo '<span class="badge badge-danger badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }
                  ?>
                </li>
                  <?php  } ?>
                <?php  
                } else {
                    echo '<p style="text-align: center;">'. "Não existem atendientos Em adamento".'</p>';
                }
                ?>


          <h4 style="text-align: center;">Atendimentos Marcados</h4>
          <?php 
                  
                  $email2= $_SESSION['Email'];
                  
                  $sql1 = "SELECT Razao,Hora,Aprov_marc,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE EXISTS (SELECT cliente.Id FROM cliente INNER JOIN cadastro ON cliente.Id_cadastro=cadastro.Id WHERE Email='$email2') AND\n"

    . "Aprov_marc='Aprovado'";

                  $result1 = $conecta->query($sql1);
                  if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                ?>
                 <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                  
                   <?php
                    $date1= $row1["Data"];
                    $date=date_create("$date1");  
                    echo "Estabelecimento: ".$row1["Razao"]." "."Horario: ". $row1["Hora"]. " "."Data: ".date_format($date,"d/m/Y");
                  ?>
                  <?php if($row1["Aprov_marc"]=="em andamento"){?>
                    <span class="badge badge-primary badge-pill"><?php echo $row1["Aprov_marc"];?></span>
                  <?php }?>
                  <?php
                      if($row1["Aprov_marc"]=="Aprovado") {
                      echo '<span class="badge badge-success badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }if($row1["Aprov_marc"]=="Negado"){
                      echo '<span class="badge badge-danger badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }
                  ?>
                </li>
                  <?php  } ?>
                <?php  
                } else {
                  echo '<p style="text-align: center;">'. "Não existem atendientos Aprovado".'</p>';
                }
                ?>



              <h4 style="text-align: center;">Atendimentos Negados</h4>
          <?php 
                  
                  $email2= $_SESSION['Email'];
                  
                  $sql1 = "SELECT Razao,Hora,Aprov_marc,lista.Data from cliente INNER JOIN atende on cliente.Id= atende.id_cliente INNER JOIN estabelecimento on estabelecimento.Id=atende.id_estabecimento1 INNER JOIN lista ON lista.id= atende.id_lista INNER JOIN cadastro on cadastro.Id=estabelecimento.id_cadastro1 WHERE EXISTS (SELECT cliente.Id FROM cliente INNER JOIN cadastro ON cliente.Id_cadastro=cadastro.Id WHERE Email='$email2') AND\n"

    . "Aprov_marc='Negado'";

                  $result1 = $conecta->query($sql1);
                  if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                ?>
                 <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                   <?php 
                    $date1= $row1["Data"];
                    $date=date_create("$date1"); 
                    echo "Estabelecimento: ".$row1["Razao"]." "."Horario: ". $row1["Hora"]. " ". "Data: ".date_format($date,"d/m/Y");
                  ?>
                  <?php if($row1["Aprov_marc"]=="m andamento"){?>
                    <span class="badge badge-primary badge-pill"><?php echo $row1["Aprov_marc"];?></span>
                  <?php }?>
                  <?php
                      if($row1["Aprov_marc"]=="Marcado") {
                      echo '<span class="badge badge-success badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }if($row1["Aprov_marc"]=="Negado"){
                      echo '<span class="badge badge-danger badge-pill">'. $row1["Aprov_marc"].'</span>';
                    }
                  ?>
                </li>
                  <?php  } ?>
                <?php  
                } else {
                  echo '<p style="text-align: center;">'. "Não existem atendientos Negado ".'</p>';
                }
                ?>
     
            
          
              </ul>

        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Marcar um Atendimento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" id= "" name="" method=''>
        <div class="modal-body">
            <div class="form-group col-md-10">
                <label for="inputData4">Data</label>
                <input type="date" class="form-control" name="inputData4" placeholder="digite a data do atendimento" required>
            </div>
            <div class="form-group col-md-10">
                <label for="inputHorario4">Horario</label>
                <input type="Hour" class="form-control" name="inputHorario4" placeholder="digite o Horario com o fuso da região" required>
            </div>
            <div class="form-group col-md-10">
                <label for="inputRazao">Nome do estabelecimento</label>
                <select name="inputRazao" class="form-control" required>
                  <option value="">Escolha O Estabecimento</option>
                <?php 
                  $sql = "SELECT Id,Razao FROM estabelecimento";
                  $result = $conecta->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                 <option value="<?php echo $row['Id'] ?>"><?php echo $row{'Razao'} ?></option>
                  <?php  } ?>
                <?php  
                } else {
                    echo "0 results";
                }
                ?>    
                </select>
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
    <!-- moda 2 -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dados do usuario</h5>
          &nbsp;&nbsp;&nbsp;
          <input data-toggle="modal" data-target="#exampleModalCenter3" type="image" src="editar.png" alt="Submit"  width="40" height="30">
          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
            $email= $_SESSION['Email'];
            $verificar_usuario=  "select * from cadastro inner join cliente on cadastro.Id=cliente.Id_cadastro  where Email = '$email'";
            $result = $conecta->query($verificar_usuario);
            $row1 = $result->fetch_assoc() ;
          ?>
          <ul class="list-group list-group-flush">
                  
                <li class="list-group-item">Nome: <?php echo utf8_encode($row1["Nome"]) ?></li>
                <li class="list-group-item">Sexo: <?php echo $row1["Sexo"] ?></li>
                <li class="list-group-item">Data de Nacimento: <?php echo date_format($date,"d/m/Y") ?></li>
                <li class="list-group-item">Email: <?php echo $row1["Email"] ?></li>
                <li class="list-group-item">CPF: <?php echo $row1["CPF"] ?></li>
                <li class="list-group-item">Telefone: <?php echo $row1["Telefone"] ?> </li>
                <h5>dados de Endereço</h5>
                <li class="list-group-item" >
                <?php 
                  echo "<h6>". $row1["Rua"] . ", " . $row1["Nun_Casa"] .  ", " . $row1["Bairro"] .  ", " . $row1["Complemento"] . 
                  ", " . $row1["Cidade"]   .  ", " . $row1["Estado"] .", ". $row1["Cidade"] . ", ". $row1["cep"]."</h6>";
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
  <!-- moda 3 -->
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
       
        </div>
        
      </div>
    </div>
  </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>