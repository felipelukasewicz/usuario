<?php
include "config.php";
session_start();
if(isset($_SESSION['msg'])){
    ?>
    <div class="alert alert-danger" role="alert">
        <?php 
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
    </div>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div style="width:60vw; margin:0 auto;">
            <h1 style="margin-top: 2vw; text-align: center;">Login</h1>
            <hr/>
    <form method="POST" class="row g-3" style="width: 100%; margin-top: 2vw;" action="<?php echo URL_BASE?>autenticar.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
</body>
</html>