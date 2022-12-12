<?php 
    include_once "config.php";
    include_once "template/nav.php";
    require_once "dataBase.php";
    $sql="SELECT * FROM usuario";
    $resultado=$con->query($sql);
?>
<h1 style="text-align: center; margin-top: 2vw; margin-bottom: 2vw;">Pessoas registradas no sistema</h1>
<table class="table offset-md-1" style="width: 70vw; margin-bottom: 5vw;">
  <thead class="table-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Imagem</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
        <?php while($usuario=$resultado->fetch_array()){

        ?>
      <th scope="row"><?php echo $usuario['id'];?></th>
      <td><?php echo $usuario['nome'];?></td>
      <td><?php echo $usuario['email'];?></td>
      <td><?php echo $usuario['senha'];?></td>
      <td><p>Nome da foto: <?php 
      if($usuario['fotoPerfil']!=null){
          echo $usuario['fotoPerfil'];
      }?>
      </p><img class="img-thumbnail" style="width: 4vw" src="imagens/<?php
      if($usuario['fotoPerfil']!=null){
        echo $usuario['fotoPerfil'];
        }else{
          echo "perfilPadrao.jpeg";
        }
        ?>"></td>
    </tr>
    <?php } ?>
</table>
<?php 
  include_once "template/footer.html";
?>