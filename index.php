<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Tela de Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		#tamanho {
			width: 400px;
			
		}

	</style>

</head>
<body>

	<div class="container" id="tamanho" style="margin-top: 350px">
		<H3>Entrar</H3>
		<div style="padding: 10px">
			<form action="index1.php" method="post">
				<div class="form-group">
					<label>Usuário</label>
					<input type="text" name="usuario" class="form-control" placeholder="Email" autocomplete="off" required style="border-radius: 10px; border: 1px solid #000000">
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" placeholder="Digite sua senha" autocomplete="off" required style="border-radius: 10px; border: 1px solid #000000">
				</div>

				<div class="col-auto">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="autoSizingCheck">
						<label class="form-check-label" for="autoSizingCheck">
							Lembrar de mim
						</label>
					</div>
				</div>
				
				<label></label>
				<div class="d-grid gap-2" style="text-align: right">
					<button type="submit" style="border-radius: 10px" class="btn btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>

	<div style="margin-top: 10px">
		<center>
			<small>Ainda não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui </a>!</small>
		</center>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>