<?php

include 'conexao.php';

$id = $_POST['id'];
//$id_usuario = $_POST['id_usuario'];
$nomeusuario = $_POST['nomeusuario'];
$email= $_POST['emailusuario'];
//$cpf = $_POST['cpfusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];



$sql = "UPDATE `usuarios` SET `nome_usuario`='$nomeusuario',`email_usuario`='$email',`senha_usuario`= sha1('$senha'),`nivel_usuario`='$nivel',`cep_usuario`='$cep',`rua_usuario`='$rua',`bairro_usuario`='$bairro',`cidade_usuario`='$cidade',`estado_usuario`='$estado' WHERE id_usuario = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width: 400px">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="Listar_usuarios.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
		</div>
	</center>


</div>