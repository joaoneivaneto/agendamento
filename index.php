<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">website Para Agendamento(WPA)</h2>
				</div>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-7">
					<div class="login-wrap">
						<form action="login.php" method='POST' id="logar" name='logar' class="signin-form d-md-flex">
						<div class="half p-4 py-md-5">
			      		<div class="w-100">
			      			<h3 class="mb-4">Login</h3>
			      		</div>
			      		<div class="form-group mt-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="text" class="form-control" name="email" id='email' placeholder="Email" required>
			      		</div>
		            <div class="form-group">
		            <label class="label" for="password">Senha</label>
		              <input  type="password" class="form-control" name="senha" id='senha' placeholder="Senha" required>
		              
		            </div>
					<div class="form-group">
		            	<button type="submit" class="form-control btn btn-secondary rounded submit px-3">Logar</button>
		            </div>
					<p>Ainda não é cadastrado? <a href="casdatro.php">Cadastre-se</a></p>
					<p><a data-toggle="modal" data-target="#exampleModalCenter3" href="" >Recuperar Senha</a></p>
		          </div> 
			
				<div class="half p-4 py-md-5 bg-primary" >
					<img src="ggg.png" alt="" width="300" height="150" >
					<p id="conceito">Plataforma onde você pode marcar consultas em vários estabelecimentos.
						Seja clinica, hospital e etc. Não se atrase, Vamos nessa!
					</p>
		        </div>
	          </form>
	        </div>
	      </div>
	    </div>
	</div>
	</section>

	<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Siga as Instruções</h5>
          <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="alterar_usuario.php" id= "alt_usu" name="alt_usu" method='post'>
        <div class="modal-body">
          <p>Mande um Email para  joaoneivanetos@gmail.com   contendo seu nome, CPF e uma foto anexada. Essa foto deve ser um selfie com você segurando uma folha com sua assinatura e a seguinte mensagem escrita “recuperar senha “e a nova senha escrita. Caso o Email corresponda a essa descrição, sua solicitação será aceita e sua senha recuperada em até um 1 dia útil.</p>  
            
            
          
        </div>  
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">fechar</button>
        
        </form>
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

