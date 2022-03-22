<!DOCTYPE html>
<html>
<head>
	<title>Aprovar Usuários</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/4b7fe1be04.js" crossorigin="anonymous"></script>
	

</head>
<body>
	<?php

	session_start();
	
	$usuario = $_SESSION['usuario'];

	if(!isset($_SESSION['usuario'])){
		header('location: index.php');
	}
	?>

	<div class="container" style="margin-top: 30px">
		<div style="text-align: right">
			<a href="painel.php" role="button" style="border-radius: 5px" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h3>Lista de Usuários</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome </th>
					<th scope="col">Email </th>
					<th scope="col">Nível </th>
					<th scope="col"> Ação</th>
				</tr>
				

				<?php
				include 'conexao.php';
				$sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
				$busca = mysqli_query($conexao,$sql);

				while ($array = mysqli_fetch_array($busca)) {

					$id_usuario = $array['id_usuario'];
					$nomeusuario = $array['nome_usuario'];
					$email = $array['email_usuario'];
					$nivel = $array['nivel_usuario'];

					?>
					<tr>
						<td><?php echo $nomeusuario ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $nivel ?></td>

						<td><a class="btn btn-success btn-sm" style="color:#fff" style="border-radius: 5px" href="_aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"><i class="fa-regular fa-eye"></i>&nbsp;Administrador</a>
							<a class="btn btn-dark btn-sm" style="color:#fff" style="border-radius: 5px" href="_aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=2" role="button"><i class="fa-regular fa-address-card"></i>&nbsp;Funcionário</a>

							<a class="btn btn-danger btn-sm" style="color:#fff" style="border-radius: 5px" href="_deletar_usuarios.php?id=<?php echo $id_usuario?> "role="button"><i class="fa-regular fa-trash-can"></i>&nbsp;Excluir</a>

						</td>
					</tr>

				<?php } ?>


				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

			</body>
			</html>