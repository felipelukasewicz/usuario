<?php
if(!isset($_SESSION['user'])){
   header("location: login.php");
}
 require_once "dataBase.php";
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 if(isset($_FILES['pic'])){
   $ext = strtolower(substr($_FILES['pic']['name'],-4));
   $fotoNome = uniqid() . $ext;
   $dir = 'imagens/';
  
   move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$fotoNome);
 } 

 $sql="insert into usuario(nome, email, senha, fotoPerfil) values('$nome', '$email', md5($senha), '$fotoNome')";
 if($resultado=$con->query($sql)){
    header("Location: listaPessoas.php");
 }else{
    $_SESSION['msg'] = "Erro ao registrar usuario";
 }
?>