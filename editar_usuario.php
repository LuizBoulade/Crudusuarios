<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Editar Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Adicionando Javascript -->
	<script>

		function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
        }

        function meu_callback(conteudo) {
        	if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>


</head>
<body>

	<div class="container" style="width: 400px; margin-top: 90px">
		<form action="atualizar_usuarios.php" method="post" style="margin-top: 20px">
			<H3>Editar Cadastro</H3>

			<?php

			$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)){

				$id_usuario = $array['id_usuario'];
				$nome_usuario = $array['nome_usuario'];
				$email_usuario = $array['email_usuario'];
				$cpf_usuario = $array['cpf_usuario'];
				$cep_usuario = $array['cep_usuario'];
				$rua_usuario = $array['rua_usuario'];
				$bairro_usuario = $array['bairro_usuario'];
				$cidade_usuario = $array['cidade_usuario'];
				$estado_usuario = $array['estado_usuario'];

				?>

				<div class="form-group">
					<label>ID</label>
					<input type="text" name="idusuario" class="form-control" value="<?php echo $id_usuario?>" style="border-radius: 10px; border: 1px solid #000000" disabled>
					<input type="text" name="id" class="form-control" value="<?php echo $id?>" style="display:none">

					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nomeusuario" class="form-control" value="<?php echo $nome_usuario?>" style="border-radius: 10px; border: 1px solid #000000">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="emailusuario" class="form-control" value="<?php echo $email_usuario?>" style="border-radius: 10px; border: 1px solid #000000">
					</div>
					
					<div class="form-group">
						<label>CPF</label>
						<input type="number" name="cpfusuario" class="form-control" value="<?php echo $cpf_usuario?>" style="border-radius: 10px; border: 1px solid #000000" disabled>

					</div>

					<div class="form-group">
						<label>CEP</label>
						<input name="cep" type="text" class="form-control" id="cep" value="<?php echo $cep_usuario?>" size="10" maxlength="9"
						onblur="pesquisacep(this.value);" style="border-radius: 10px; border: 1px solid #000000" />
					</div>

					<div class="form-group">
						<label>Rua</label>
						<input name="rua" type="text" class="form-control" id="rua" size="40" value="<?php echo $rua_usuario?>" style="border-radius: 10px; border: 1px solid #000000"/>
					</div>

						<div class="form-group">
							<label>Bairro</label>
							<input name="bairro" type="text" class="form-control" id="bairro" size="40" value="<?php echo $bairro_usuario?>" style="border-radius: 10px; border: 1px solid #000000" />
						</div>

						<div class="form-group">
							<label>Cidade</label>
							<input name="cidade" type="text" class="form-control" id="cidade" size="40" value="<?php echo $cidade_usuario?>" style="border-radius: 10px; border: 1px solid #000000"/>
						</div>

						<div class="form-group">
							<label>Estado</label>
							<input name="uf" type="text" class="form-control" id="uf" size="2" value="<?php echo $estado_usuario?>" style="border-radius: 10px; border: 1px solid #000000"/>
						</div>


						<div class="form-group">
							<label>Senha</label>
							<input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" style="border-radius: 10px; border: 1px solid #000000">
						</div>

						<div class="form-group">
							<label>Repita sua Senha</label>
							<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" oninput="validaSenha(this)" style="border-radius: 10px; border: 1px solid #000000">
							<small>A senha e a confirmação devem ser iguais!</small>
						</div>

						<div class="form-group">
							<label>Nível de Acesso</label>
							<select name="nivelusuario" class="form-control" value="<?php echo $nivel_usuario?>" style="border-radius: 10px; border: 1px solid #000000">

								<option value="1">Administrador</option>
								<option value="2">Funcionário</option>
							</select>
						</div>
						<br>
						<div style="text-align: right;">
							<button type="submit" style="border-radius: 5px" class="btn btn-sm btn-success">Atualizar</button>
							<a href="Listar_usuarios.php" style="border-radius: 5px"role= "button" class="btn btn-sm btn-primary">Voltar</a>
						</div>

					<?php } ?>
				</form>
			</div>


			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


			<script>
				function validaSenha (input){ 
					if (input.value != document.getElementById('txtSenha').value) {
						input.setCustomValidity('Repita a senha corretamente');
					} else {
						input.setCustomValidity('');
					}
				} 
			</script>

		</body>
		</html>