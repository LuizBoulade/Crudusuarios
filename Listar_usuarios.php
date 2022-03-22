<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários</title>
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


  <div class="container" style="margin-top: 40px">
    <div style="text-align: right">
      <a href="painel.php" role="button" style="border-radius: 5px" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h3>Lista de Usuários</h3>
    <br>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Cpf</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      
      <?php
      include 'conexao.php';
      $sql = "SELECT * FROM `usuarios`";
      $busca = mysqli_query($conexao,$sql);

      while ($array = mysqli_fetch_array($busca)) {

        $id_usuario = $array['id_usuario'];
        $nome_usuario = $array['nome_usuario'];
        $email_usuario = $array['email_usuario'];
        $cpf_usuario = $array['cpf_usuario'];
        
        
        ?>
        <tr>

          <td><?php echo $id_usuario ?></td>

          <td><?php echo $nome_usuario ?></td>

          <td><?php echo $email_usuario ?></td>

          <td><?php echo $cpf_usuario ?></td>

          <td><a class="btn btn-warning btn-sm" style="border-radius: 5px" href="editar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="border-radius: 5px"  href="deletar_usuario_painel.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-regular fa-trash-can"></i>&nbsp;Deletar</a>
          </td>


        </tr>

      <?php } ?>
      
      

    </table>


  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>