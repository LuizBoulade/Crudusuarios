<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];


$sql = "SELECT email_usuario,senha_usuario FROM usuarios WHERE email_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)){

	$senha = $array['senha_usuario'];

	$senhacodificada = sha1($senhausuario);

	if ($total > 0) {

		if($senhacodificada == $senha) {

			session_start();
			$_SESSION['usuario'] = $usuario;
			header('location: painel.php');

		} else {
			header('location: index2.php');
		}

	}

	else {
		header('location: index2.php');
	}

}



?>