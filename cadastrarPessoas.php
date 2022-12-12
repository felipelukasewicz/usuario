<?php 
    include_once "config.php";
    include_once "template/nav.php";
?>
<h1 style="text-align: center; margin-top: 2vw;">Registre seu usuário</h1>
<form action="registraBanco.php" method="post" class="row g-3" style="width: 100%; margin-top: 2vw; margin-bottom: 7vw;" enctype="multipart/form-data">
  <div class="col-md-6 offset-md-3">
    <label for="validationDefault01" class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" id="validationDefault01" required>
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="validationDefault02" class="form-label">Email</label>
    <input name="email" type="text" class="form-control" id="validationDefault02" required>
  </div>
  <div class="col-md-6 offset-md-3">
    <label for="validationDefault02" class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" id="validationDefault02" required>
  </div>
  <div class="col-md-6 offset-md-3">
            <label for="conteudo">Foto de perfil</label>
            <input type="file" name="pic" accept="image/*" class="form-control">
          </div>
  <div class="col-md-6 offset-md-3">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>
<?php 
  include_once "template/footer.html";
?>