<?php
session_start();

include "dataBase.php";

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $sql="SELECT id, nome, email
    FROM usuario 
    WHERE
        email='$email' AND senha=md5($senha)";
    
    $resultado=$con->query($sql);

    if($resultado){
        if($resultado->num_rows>0){
            $user=$resultado->fetch_array();
            $_SESSION['user']=$user;
            $_SESSION['msg']="Sucesso!";
            foreach($resultado as $usuario){
                $_SESSION['userNome'] = $usuario['nome'];
            }
        } 
            
    }else{
        $_SESSION['msg']="Você não possui um cadastro!";
    }
    header("Location: index.php");

?>