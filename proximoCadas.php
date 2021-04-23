<!doctype html>
<html lang="en">
  <head>
  	<title>finalizar cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     

	</head>
	<body>
        <h1 style="text-align: center;"> Finalizar cadastro</h1>
        
            
        <div class="container">
 
            <div class="panel-group" id="accordion">
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Pessoa fisica</a>
                  </h4>
                </div>
                <div  id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <form name="cadastropf" action="" method="post">
                        <div class="form-group col-md-4">
                            <label for="inputSexo4">Sexo</label>
                            <select id="inputSexo" class="form-control">
                                <option value=""></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCpf4">CPF</label>
                            <input type="number" class="form-control" id="inputCpf4" placeholder="digite seu CPF">
                        </div>
                        <div  class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Finalizar</button>
                            <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
                        </div>
                    </form> 
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Estabelecimento</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <form name="cadastrocnpj" action="" method="post" id="filho1">
                        <div class="form-group col-md-4">
                            <label for="inputCnpj4">CNPJ</label>
                            <input type="number" class="form-control" id="inputCnpj4" placeholder="Informe seu CNPJ">
                        </div>
                        <div  class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Finalizar</button>
                            <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
                        </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>

	</body>
</html>

