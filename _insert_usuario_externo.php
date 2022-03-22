<?php
include 'conexao.php';
include 'script/password.php';



$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$cpf = $_POST['cpfusuario'];
$status = 'Inativo';
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];


$sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,cpf_usuario,status,cep_usuario,rua_usuario,bairro_usuario,cidade_usuario,estado_usuario) values ('$nomeusuario','$email',sha1('$senha'),'$cpf','$status','$cep','$rua','$bairro','$cidade','$estado')";

$inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width:400px">
	<center>
		<h3>Usuário adicionado com sucesso, aguardando aprovação.</h3>
		<div style="margin-top: 10px">
			<a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#050505">Voltar</a>
		</div>
	</center>