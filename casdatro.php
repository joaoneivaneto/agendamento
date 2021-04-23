<!doctype html>
<html lang="en">
  <head>
  	<title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    
	</head>
	<body>
            <h1 style="text-align: center;">Cadastro</h1>
            <form style="margin: 20px;" id="" name="" action="" method="">
                <div class="container" ng-app="myApp" ng-controller="customersCtrl">
             	<fieldset>
                
                    <div class="form-group col-md-4">
                    <label for="nome">Email: </label>
                    <input class="form-control" type="email" name="inputEmail4" name="nome" required class="input">
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="senha" >Senha: </label>
                    <input class="form-control" type="password" name="inputPassword4" name="senha" required min="3" class="input">            
                    </div>
                
                    <div class="form-group col-md-6">
		    <label for="senha2">Confirmar Senha: </label>
                    <input class="form-control" type="password" name="inputPasswordRep4" name="senha2" required class="input">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="matricula">Telefone </label>
                    <input class="form-control" type="text" name="inputTelefone4" title="Formato:(33) 99999-9999" name="matricula" maxlength="15"  pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" class="input" >
                    </div>
                    <div class="form-group col-md-6">
                    <label for="matricula">Data De Nacimento </label>
                    <input class="form-control" type="Date" name="inputData4" name="matricula" required class="input" >
                    </div>
                    <div class="form-group col-md-6">
                    <label for="matricula">Bairro: </label>
                    <input class="form-control" type="text" onKeypress="return teste(event)" name="inputBairro4" name="matricula" required class="input" >
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="matricula">Rua: </label>
                    <input  class="form-control"type="text" onKeypress="return teste(event)"  name="inputRua4" name="matricula" required class="input" >
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="matricula">Complemento: </label>
                    <input class="form-control" type="text" onKeypress="return teste(event)" name="complemento" name="matricula" class="input" >
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="matricula">Numero: </label>
                    <input class="form-control" type="text" onkeypress="return onlynumber();" name="numero" name="matricula" required class="input" >
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label for="matricula">Cidade: </label>
                    <input  class="form-control" type="text" onKeypress="return teste(event)" name="cidade" name="matricula" required class="input" >
                    </div>
                    <div class="form-group col-md-6">
                    <label for="Estado">Estado:</label>
                <select class="form-control" name="estado" required class="form-control">
                    <option></option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                    </div>
                <div class="form-group col-md-4">
                    <label for="matricula">CEP: </label>
                    <input class="form-control" type="text" onkeypress="return onlynumber();" name="cep" name="matricula" required class="input" >
                </div> 
                </fieldset>
                <button style="background-color: #122f33; margin: 30px;" type="button" class="btn btn-info" id="btn1" data-toggle="collapse" data-target="#demo">Pessoa Física</button>
                <button style="background-color: #122f33; margin: 30px;" type="button" class="btn btn-info" id="btn2" data-toggle="collapse" data-target="#demo1">Pessoa Jurídica</button>
                <a style="background-color: #122f33; margin: 30px;" type="button" class="btn btn-info" id="bt" href="index.php">Voltar</a>
            <div id="demo1" class="collapse">
                <fieldset>
                <div style="text-align: center;">
                    <form name="" action="" method="">
                                            <form name="cadastrocnpj" action="" method="post" id="filho1">
                        <div class="form-group col-md-4">
                            <label for="inputCnpj4">CNPJ:</label>
                            <input class="form-control" title="Formato:xx.xxx.xxx/xxxx-xx" pattern="\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}" name="inputCnpj4" placeholder="Informe seu CNPJ">
                        
                <label for="nome">Razão Social: </label>
                    <input class="form-control" type="text" name="inputRS" name="nome" placeholder="Razão Social"  class="input">
                            <button style="margin: 10px;" class="btn btn-primary" type="submit" id="continuar" role="button" name="continuar">Continuar</button>
                <button class="btn btn-danger" type="reset" id="limpar" role="button" name="limpar">Limpar</button>
                                            
                        </div>
                        </div>
                </fieldset>
                  </div>
                <div id="demo" class="collapse">
                <div style="text-align: center;">
                    <form name="" action="" method="post">
                        <div class="form-group col-md-5">
      
                    <label for="nome">Nome: </label>
                    <input class="form-control" type="text" name="inputNome" name="nome" placeholder="Insira seu nome"  class="input" >
                   
                            <label for="inputSexo4">Sexo:</label>
                            <select name="inputSexo" class="form-control">
                                <option value=""></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outros">Outros</option>
                            </select>
                      
                            <label for="inputCpf4">CPF:</label>
                            <input class="form-control" title="Formato:xxx.xxx.xxx-xx" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" class="form-control" name="inputCpf4" placeholder="digite seu CPF" >
                        
                   
                <button style="margin: 10px;" class="btn btn-primary" type="submit" id="continuar" role="button" name="continuar">Continuar</button>
                <button class="btn btn-danger" type="reset" id="limpar" role="button" name="limpar">Limpar</button>
                        </div>
                </div>
                  </div>
                
</div>

<script type="text/javascript">
    $('#btn1').click(function(){
    $('.collapse').hide();
    $('#demo').show();
    });
    $('#btn2').click(function(){
    $('.collapse').hide();
    $('#demo1').show();
</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

